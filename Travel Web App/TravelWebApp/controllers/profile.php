<?php

class Profile extends CI_Controller
{
    public function my_profileInfo($content = false)
    {
        if ($content) {
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['info'] = $this->Profiles_model->getAllInfo($username);
            $result['data'] = '';
            $result['data'] .= $this->load->view('templates/barProfile', array(), true);
            $result['data'] .= $this->load->view('pages/my_profileInfo', $data, true);
            echo $result['data'];

        } else {
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['info'] = $this->Profiles_model->getAllInfo($username);
			$template_data['content'] = $this->load->view('templates/barProfile', array(), true);
            $template_data['content'] .= $this->load->view('pages/my_profileInfo', $data, true);

            $this->load->view('templates/main', $template_data);
        }
    }

    public function my_profileItems($content = false)
    {
        if ($content) {
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['items'] = $this->Profiles_model->getAllItems($username);
            $result['data'] = '';
            $result['data'] .= $this->load->view('templates/barProfile', array(), true);
            $result['data'] .= $this->load->view('pages/my_profileItems', $data, true);
            echo $result['data'];

        } else {
			
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['items'] = $this->Profiles_model->getAllItems($username);
			$template_data['content'] = $this->load->view('templates/barProfile', array(), true);
            $template_data['content'] .= $this->load->view('pages/my_profileItems', $data, true);

            $this->load->view('templates/main', $template_data);
        }
    }

    public function my_profileActivities($content = false)
    {

        if ($content) {
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['activities'] = $this->Profiles_model->getAllActivities($username);
            $result['data'] = '';
            $result['data'] .= $this->load->view('templates/barProfile', array(), true);
            $result['data'] .= $this->load->view('pages/my_profileActivities', $data, true);
            echo $result['data'];

        } else {
			
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['activities'] = $this->Profiles_model->getAllActivities($username);
			$template_data['content'] = $this->load->view('templates/barProfile', array(), true);
            $template_data['content'] .= $this->load->view('pages/my_profileActivities', $data, true);

            $this->load->view('templates/main', $template_data);
        }


    }

    public function my_profileUsers($content = false)
    {
        if ($content) {
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['users'] = $this->Profiles_model->getAllFriends($username);
            $result['data'] = '';
            $result['data'] .= $this->load->view('templates/barProfile', array(), true);
            $result['data'] .= $this->load->view('pages/my_profileUsers', $data, true);
            echo $result['data'];

        } else {
			$this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['users'] = $this->Profiles_model->getAllFriends($username);
			$template_data['content'] = $this->load->view('templates/barProfile', array(), true);
            $template_data['content'] .= $this->load->view('pages/my_profileUsers', $data, true);

            $this->load->view('templates/main', $template_data);
        }

    }

    public function my_profileMessages($content = false)
    {

        if ($content) {
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['messages'] = $this->Profiles_model->getAllMessages($username);
            $result['data'] = '';
            $result['data'] .= $this->load->view('templates/barProfile', array(), true);
            $result['data'] .= $this->load->view('pages/my_profileMessages', $data, true);
            echo $result['data'];

        } else {
			$this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['messages'] = $this->Profiles_model->getAllMessages($username);
			$template_data['content'] = $this->load->view('templates/barProfile', array(), true);
            $template_data['content'] .= $this->load->view('pages/my_profileMessages', $data, true);

            $this->load->view('templates/main', $template_data);
        }

    }

    public function my_profileSettings($content = false)
    {

        if ($content) {
            $this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['settings'] = $this->Profiles_model->getAllInfo($username);
            $result['data'] = '';
            $result['data'] .= $this->load->view('templates/barProfile', array(), true);
            $result['data'] .= $this->load->view('pages/my_profileSettings', $data, true);
            echo $result['data'];

        } else {
			$this->load->model('Profiles_model');

            $username = $_SESSION['logged_in']['username'];
            $data['settings'] = $this->Profiles_model->getAllInfo($username);
			$template_data['content'] = $this->load->view('templates/barProfile', array(), true);
            $template_data['content'] .= $this->load->view('pages/my_profileSettings', $data, true);

            $this->load->view('templates/main', $template_data);
        }
    }

    public function changeSettings()
    {
        if($this->input->post()){
            $username = $_SESSION['logged_in']['username'];
            $data = array();

            if(!empty($this->input->post('name'))){
                $name = $this->input->post('name');
                $data['name'] = $name;            
            }
            if (!empty($this->input->post('surname'))) {
                $surname = $this->input->post('surname');
                $data['surname'] = $surname;
            }
            if (!empty($this->input->post('age'))) {
                $age = $this->input->post('age');
                $data['age'] = $age;
            }
            if (!empty($this->input->post('bio'))) {
                $bio = $this->input->post('bio');
                $data['bio'] = $bio;
            }
            if (!empty($this->input->post('city'))) {
                $city = $this->input->post('city');
                $data['city'] = $city;
            }
            if (!empty($this->input->post('photo'))) {
                $photo = $this->input->post('photo');
                $data['photo'] = $photo;
            }
            if (!empty($this->input->post('background'))) {
                $background = $this->input->post('background');
                $data['background'] = $background;
            }

            $this->load->model('Profiles_model');
            $this->Profiles_model->changeSettings($username, $data);

            $data['settings'] = $this->Profiles_model->getAllInfo($username);
			$result['data'] = '';
            $result['data'] .= $this->load->view('templates/barProfile', array(), true);
            $result['data'] .= $this->load->view('pages/my_profileSettings', $data, true);
            echo $result['data'];
        }
    }

    public function deleteActivity($id)
    {      
        $username = $_SESSION['logged_in']['username'];
        $this->load->model('Profiles_model');
        $this->Profiles_model->deleteActivity($username, $id);

        $this->my_profileActivities();
    }

    public function deleteItem($id)
    {
        $username = $_SESSION['logged_in']['username'];
        $this->load->model('Profiles_model');
        $this->Profiles_model->deleteItem($username, $id);

        $this->my_profileItems();
    }

    public function deleteUser($id)
    {
        $username = $_SESSION['logged_in']['username'];
        $this->load->model('Profiles_model');
        $this->Profiles_model->deleteUser($username, $id);

        $this->my_profileUsers();
    }

    public function deleteMessage($id)
    {
        $username = $_SESSION['logged_in']['username'];
        $this->load->model('Profiles_model');
        $this->Profiles_model->deleteMessage($username, $id);

        $this->my_profileMessages();
    }

    public function searchActivity()
    {
        $username = $_SESSION['logged_in']['username'];
        if (!$this->input->post()) {
            $this->load->model('Profiles_model');
            $data['activities'] = $this->Profiles_model->getAllActivities($username);
            $template_data['content'] = $this->load->view('pages/my_profileActivities', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }

        $name = $this->input->post('search_text');

        if (!empty($name)) {
            $this->load->model("Profiles_model");
            $data['activities'] = $this->Profiles_model->searchActivity($username, $name);
            $template_data['content'] = $this->load->view('pages/my_profileActivities', $data, true);

            $this->load->view('templates/main', $template_data);
        } else {
            $this->load->model('Profiles_model');
            $data['activities'] = $this->Profiles_model->getAllActivities($username);
            $template_data['content'] = $this->load->view('pages/my_profileActivities', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }
    }

    public function searchItem()
    {
        $username = $_SESSION['logged_in']['username'];
        if (!$this->input->post()) {
            $this->load->model('Profiles_model');
            $data['items'] = $this->Profiles_model->getAllItems($username);
            $template_data['content'] = $this->load->view('pages/my_profileItems', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }

        $name = $this->input->post('search_text');

        if (!empty($name)) {
            $this->load->model("Profiles_model");
            $data['items'] = $this->Profiles_model->searchItem($username, $name);
            $template_data['content'] = $this->load->view('pages/my_profileItems', $data, true);

            $this->load->view('templates/main', $template_data);
        } else {
            $this->load->model('Profiles_model');
            $data['items'] = $this->Profiles_model->getAllItems($username);
            $template_data['content'] = $this->load->view('pages/my_profileItems', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }
    }

    public function searchUser()
    {
        $username = $_SESSION['logged_in']['username'];
        if (!$this->input->post()) {
            $this->load->model('Profiles_model');
            $data['users'] = $this->Profiles_model->getAllFriends($username);
            $template_data['content'] = $this->load->view('pages/my_profileUsers', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }

        $name = $this->input->post('search_text');

        if (!empty($name)) {
            $this->load->model("Profiles_model");
            $data['users'] = $this->Profiles_model->searchUser($username, $name);
            $template_data['content'] = $this->load->view('pages/my_profileUsers', $data, true);

            $this->load->view('templates/main', $template_data);
        } else {
            $this->load->model('Profiles_model');
            $data['users'] = $this->Profiles_model->getAllFriends($username);
            $template_data['content'] = $this->load->view('pages/my_profileUsers', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }
    }

    public function searchMessage()
    {
        $username = $_SESSION['logged_in']['username'];
        if (!$this->input->post()) {
            $this->load->model('Profiles_model');
            $data['messages'] = $this->Profiles_model->getAllMessages($username);
            $template_data['content'] = $this->load->view('pages/my_profileMessages', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }

        $name = $this->input->post('search_text');

        if (!empty($name)) {
            $this->load->model("Profiles_model");
            $data['messages'] = $this->Profiles_model->searchMessage($username, $name);
            $template_data['content'] = $this->load->view('pages/my_profileMessages', $data, true);

            $this->load->view('templates/main', $template_data);
        } else {
            $this->load->model('Profiles_model');
            $data['messages'] = $this->Profiles_model->getAllMessages($username);
            $template_data['content'] = $this->load->view('pages/my_profileMessages', $data, true);

            $this->load->view('templates/main', $template_data);
            return;
        }
    }

    public function set()
    {
        echo '<script language="javascript">alert("set");</script>';
        $username = $_SESSION['logged_in']['username'];
        $this->load->model('Profiles_model');
        $this->Profiles_model->setPunctuaction($username, $id);
    }

    public function setPlus()
    {
        echo '<script language="javascript">alert("setPlus");</script>';
    }

    public function setLess()
    {
        echo '<script language="javascript">alert("setLess");</script>';
    }
    
}

?>