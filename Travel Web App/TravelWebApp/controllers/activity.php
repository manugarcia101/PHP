<?php

class Activity extends CI_Controller{
	public function list_activities($content = false)
	{
		$username = $_SESSION['logged_in']['username'];
		if ($content) {
			$this->load->model('Activities_model');
			$data['activities'] = $this->Activities_model->getActivities($username);

			$this->load->view('pages/list_activities', $data);
		} else {
			$this->load->model('Activities_model');
			$data['activities'] = $this->Activities_model->getActivities($username);
			$template_data['content'] = $this->load->view('pages/list_activities', $data, true);

			$this->load->view('templates/main', $template_data);
		}
	}

	public function addActivity()
	{
		if($this->input->post('idActivity')){
			$username = $_SESSION['logged_in']['username'];
			$this->load->model("Activities_model");
			$this->Activities_model->addActivity($username, $this->input->post('idActivity'));

			$this->list_activities(true);
		}
	}

	public function deleteActivity()
	{
		$group = $_SESSION['logged_in']['group'];
		if($this->input->post('idActivity') && $group == 1){
			$this->load->model("Activities_model");
			$this->Activities_model->deleteActivity($this->input->post('idActivity'));

			$this->list_activities(true);
		}
	}

	public function searchActivity()
	{
		if($this->input->post('text') && $this->input->post('text') != ""){
			$this->load->model("Activities_model");
			$data['activities'] = $this->Activities_model->searchActivity($this->input->post('text'));

			$this->load->view('pages/list_activities', $data);
		} else {
			$username = $_SESSION['logged_in']['username'];
			$this->load->model('Activities_model');
			$data['activities'] = $this->Activities_model->getActivities($username);

			$this->load->view('pages/list_activities', $data);
		}
	}

}

?>