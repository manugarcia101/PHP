<?php

class Item extends CI_Controller{

	public function list_items($content = false)
	{
		$username = $_SESSION['logged_in']['username'];
		if ($content) {
			$this->load->model('Items_model');
			$data['items'] = $this->Items_model->getItems($username);
			$this->load->view('pages/list_items', $data);
		} else {
			$this->load->model('Items_model');
			$data['items'] = $this->Items_model->getItems($username);
			$template_data['content'] = $this->load->view('pages/list_items', $data, true);

			$this->load->view('templates/main', $template_data);
		}
	}

	public function addItem()
	{
		if($this->input->post('idItem')){
			$username = $_SESSION['logged_in']['username'];
			$this->load->model("Items_model");
			$this->Items_model->addItem($username, $this->input->post('idItem'));

			$this->list_items(true);
		}
	}

	public function deleteItem()
	{
		$group = $_SESSION['logged_in']['group'];
		if($this->input->post('idItem') && $group == 1){
			$this->load->model("Items_model");
			$this->Items_model->deleteItem($this->input->post('idItem'));

			$this->list_items(true);
		}
	}

	public function searchItem()
	{
		if($this->input->post('text') && $this->input->post('text') != ""){
			$this->load->model("Items_model");
			$data['items'] = $this->Items_model->searchItem($this->input->post('text'));

			$this->load->view('pages/list_items', $data);
		} else {
			$username = $_SESSION['logged_in']['username'];
			$this->load->model('Items_model');
			$data['items'] = $this->Items_model->getItems($username);

			$this->load->view('pages/list_items', $data);
		}

	}
}

?>