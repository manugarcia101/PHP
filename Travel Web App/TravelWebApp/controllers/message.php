<?php

class Message extends CI_Controller{
	public function new_message($content = false)
	{
		if ($content) {
			$this->load->view('pages/new_message');
		} else {
			$template_data['content'] = $this->load->view('pages/new_message');

			$this->load->view('templates/main', $template_data);
		}
	}

	public function addMessage(){

		$this->load->model('Messages_model');

		if ($this->input->post('receiver') && $this->input->post('title') && $this->input->post('content')) {
			$username = $_SESSION['logged_in']['username'];
			$date = getdate();
			$year = $date['year'];
			$month = $date['mon'];
			if($date['mon']<10){
				$month = "0". $date['mon'];
			}
			$day = $date['mday'];
			if($date['mday']<10){
				$day = "0" . $date['mday'];
			}
			$finalDate = $year."-". $month ."-". $day;
			$receiver = $this->input->post('receiver');
			$newItem = array(
				'date' => $finalDate,
				'content' => $this->input->post('content'),
				'title' => $this->input->post('title'),
				'sender' => $username,
				'receiver' => $receiver
			);
			$this->Messages_model->addMessage($newItem, $receiver,$username);
		} else echo "Non valid item. (Receiver, title and content must be set)";

	}
}

?>