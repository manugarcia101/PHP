<?php

class Common extends CI_Controller {

	public function unauthorized($content = false)
	{
		if ($content) {
			$this->load->view('pages/unauthorized');
		} else {
			$template_data['content'] = $this->load->view('pages/unauthorized', array(), true);

			$this->load->view('templates/main', $template_data);
		}
	}
}

?>