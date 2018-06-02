<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($content = false)
	{
		if ($content) {
			$this->load->view('pages/home');
		} else {
			$template_data['title'] = "Travel Web App";
			$template_data['content'] = $this->load->view('pages/home', array(), true);

			$this->load->view('templates/main', $template_data);
		}
	}
	
}

?>