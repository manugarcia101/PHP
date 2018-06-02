<?php

class Admin extends CI_Controller{

	public function index($content = false)
	{
		if ($content) {
			$group = $_SESSION['logged_in']['group'];
			if ($group == 1) {
				$this->load->view('pages/admin');
			} else {
				$this->load->view('pages/unauthorized');
			}
		} else {
			$group = $_SESSION['logged_in']['group'];
			if ($group == 1) {
				$template_data['content'] = $this->load->view('pages/admin', array(), true);

				$this->load->view('templates/main', $template_data);
			} else {
				$template_data['content'] = $this->load->view('pages/unauthorized', array(), true);

				$this->load->view('templates/main', $template_data);
			}
		}
	}

	public function parseImgURL($imageAux)
	{
		echo $imageAux;
		$image = explode("/", $imageAux);
		echo $image[2];
		//return $image[2];
	}

	function handleFiles($iFile)
	{
		echo "hola12";
		$varpath = $iFile.value;
		console.log($iFile);
		console.log($path);
	}

	public function parseDate($date)
	{
		$parsedDate = explode("/", $date);
		echo $parsedDate[0];
		$array = array($parsedDate[2], $parsedDate[1], $parsedDate[0]);
		$newDate = implode("-", $array);
		echo $newDate;
	}

	public function addItem()
	{
		$this->load->model('Admin_model');

		if ($this->input->post('nameitem') && $this->input->post('priceitem')) {
			if ($this->input->post('priceitem') > 0) {
				$image = $this->parseImgURL($this->input->post('imgitem'));
				$newItem = array(
					'name' => $this->input->post('nameitem'),
					'brief' => $this->input->post('briefitem'),
					'image' => $this->input->post('imgitem'),
					'price' => $this->input->post('priceitem')
				);
			} else {
				echo "Non valid price, price must be above 0";
			}
		}
		else echo "Non valid item (Name and price must be set)"; 
		
	}

	public function addActivity()
	{
		$this->load->model('Admin_model');

		if ($this->input->post('nameactivity') && $this->input->post('priceactivity') && $this->input->post('dateactivity') && $this->input->post('placeactivity')) {
			if($this->input->post('priceactivity')>0){
				$this->parseDate($this->input->post('dateactivity'));
				//$imageAux = $this->input->post('imgactivity');
				//$image = parseImgURL($imageAux);
				$newActivity = array(
					'date' => $this->input->post('dateactivity'),
					'place' => $this->input->post('placeactivity'),
					'name' => $this->input->post('nameactivity'),
					'brief' => $this->input->post('briefactivity'),
					'image' => $this->input->post('imgactivity'),
					'price' => $this->input->post('priceactivity')
				);
				//$this->Admin_model->addActivities($newActivity, $this->input->post('nameactivity'));
			}else{
				echo "Non valid price, price must be above 0";
			}
		} else echo "Non valid activity (Name, price, date and place must be set)";

	}

}

?>