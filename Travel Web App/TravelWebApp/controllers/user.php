<?php

class User extends CI_Controller
{

	public function list_users($content = false)
	{
		$username = $_SESSION['logged_in']['username'];
		if ($content) {
			$this->load->model('Users_model');
			$data['users'] = $this->Users_model->getUsers($username);
			$this->load->view('pages/list_users', $data);
		} else {
			$this->load->model('Users_model');
			$data['users'] = $this->Users_model->getUsers($username);
			$template_data['content'] = $this->load->view('pages/list_users', $data, true);

			$this->load->view('templates/main', $template_data);
		}
	}

	public function logout()
	{
		//$this->session->sess_destroy();
		$this->login();
	}

	public function login($content = false)
	{

		if (!empty($_SESSION['logged_in']['username'])) {
			$this->session->sess_destroy();
		}

		if (!$this->input->post()) {
			if ($content) {
				$this->load->view('pages/login');
				return;
			} else {
				$template_data['content'] = $this->load->view('pages/login', array(), true);

				$this->load->view('templates/basicMain', $template_data);
				return;
			}
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_authenticate');

		if ($this->form_validation->run() == false) {
			//Cargar de nuevo la vista de login.
			$template_data['content'] = $this->load->view('pages/login', array(), true);

			$this->load->view('templates/basicMain', $template_data);
			return;
		} else {
			//Enviar email
			//$this->send_email();
			//Cargar las vistas de la pagina principal.
           	redirect('home/index');
		}

	}

	public function authenticate($password)
	{
		$this->load->model('Users_model');
		$username = $this->input->post('username');
		$user = $this->Users_model->authenticate($username, $password);
		if ($user != null) {
			if (password_verify($password, $user->password)) {
				$this->session->set_userdata('logged_in', array(
					'username' => $user->username,
					'email' => $user->email,
					'group' => $user->group
				));
				return true;
			} else {
				$this->form_validation->set_message('authenticate', 'Invalid password');
				return false;
			}
		}
		$this->form_validation->set_message('authenticate', 'Invalid username');
		return false;
	}

	public function register($content = false)
	{

		if (!empty($_SESSION['logged_in']['username'])) {
			$this->session->sess_destroy();
		}
		
		//$this->send_email();

		if (!$this->input->post()) {
			if ($content) {
				$this->load->view('pages/register');
				return;
			} else {
				$template_data['content'] = $this->load->view('pages/register', array(), true);

				$this->load->view('templates/basicMain', $template_data);
				return;
			}
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'username',
			'username',
			'trim|required|xss_clean|is_unique[users.username]|min_length[4]|max_length[50]',
			array('is_unique' => 'The username already exists.')
		);
		$this->form_validation->set_rules(
			'password1',
			'password',
			'trim|required|xss_clean|matches[password2]|min_length[8]|max_length[50]',
			array('matches' => 'The passwords are not equal.')
		);
		$this->form_validation->set_rules('password2', 'confirmation password', 'trim|required|xss_clean');
		$this->form_validation->set_rules(
			'email',
			'email',
			'trim|required|xss_clean|valid_email|is_unique[users.email]',
			array('is_unique' => 'The email already exists.')
		);
		$this->form_validation->set_rules('name', 'name', 'xss_clean');
		$this->form_validation->set_rules('surname', 'surname', 'xss_clean');
		$this->form_validation->set_rules(
			'g-recaptcha',
			'captcha',
			'callback_check',
			array('check' => 'The captcha is not validated.')
		);

		if ($this->form_validation->run() == false) {
			//Cargar de nuevo la vista de register.
			$template_data['content'] = $this->load->view('pages/register', array(), true);

			$this->load->view('templates/basicMain', $template_data);
			return;
		} else {
			//Cargar las vistas de la pagina principal.
			$this->registration();
			redirect('home/index');
		}
	}

	public function registration()
	{

		$this->load->model('Users_model');

		$user = array(
			'age' => $this->input->post('age'),
			'name' => $this->input->post('name'),
			'surname' => $this->input->post('surname'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password1'), PASSWORD_BCRYPT),
			'email' => $this->input->post('email'),
			'group' => '2'
		);

		$this->Users_model->register($user);

		$this->session->set_userdata('logged_in', array(
			'username' => $user['username'],
			'email' => $user['email'],
			'group' => $user['group']
		));
	}

	public function check()
	{
		$this->load->library('recaptcha');

		$recaptcha = $this->input->post('g-recaptcha-response');
		$response = $this->recaptcha->verifyResponse($recaptcha);

		$this->form_validation->set_message('Captcha not validated.');

		return $response['success'];
	}

	public function send_email()
	{

		$config = array(
			//'protocol' => 'smtp',
			//'smtp_host' => 'ssl://smtp.googlemail.com',
			//'smtp_port' => 465,
			'smpt_user' => 'travel.web.app.123@gmail.com',
			'smtp_pass' => "bomo56car",
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'wordwrap' => true//,
			//'newline' => "\r\n"
		);
		
		//Libraries.
		$this->load->library('email', $config);

		$this->email->from('travel.web.app.123@gmail.com', 'Travel Web App');
		$this->email->to('manugarcial96@gmail.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->set_newline("\r\n");

		if ($this->email->send()) {
			echo 'Envio el email.';
		} else {
			show_error($this->email->print_debugger());
		};

	}

	public function addUser()
	{
		if ($this->input->post('username')) {
			$username = $_SESSION['logged_in']['username'];
			if ($username != $this->input->post('username')) {
				$this->load->model("Users_model");
				$this->Users_model->addUser($username, $this->input->post('username'));
			}

			$this->list_users(true);
		}
	}

	public function searchUser()
	{
		if ($this->input->post('text') && $this->input->post('text') != "") {
			$this->load->model("Users_model");
			$data['users'] = $this->Users_model->searchUser($this->input->post('text'));

			$this->load->view('pages/list_users', $data);
		} else {
			$username = $_SESSION['logged_in']['username'];
			$this->load->model('Users_model');
			$data['users'] = $this->Users_model->getUsers($username);

			$this->load->view('pages/list_users', $data);
		}
	}

}

?>