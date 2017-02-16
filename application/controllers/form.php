<?php

class Form extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		
		//load url helper library
		$this->load->helper('url_helper');
		
		// Load form validation library
		$this->load->library('form_validation');
		
		// Load database
		$this->load->model('queriesdb');
	}
	public function send() {
			
		/* Set validation rule for name field in the form */
		$this->form_validation->set_rules('name', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
		$this->form_validation->set_rules('message', 'String', 'trim|required');
			
		if ($this->form_validation->run() == FALSE) {
			$data["errors"] = validation_errors();
			$data['title'] = "formfailure";
			$this->load->view('templates/header', $data);
			$this->load->view("pages/formfailure",$data);
			$this->load->view('templates/footer');
		}
		else {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('message')
			);
			$result = $this->queriesdb->insertmsg($data);
			if ($result == TRUE ) {
				redirect('formsuccess');
			}
			else {
				redirect('formfailure');
			}
		}
	}
	
	public function read(){
		$data['records'] = $this->queriesdb->readmsg();
		/*$data['json'] = array_values($data);*/
		$result = $this->queriesdb->readmsg();
		$datar = array();
		foreach( $result as $row ){
			array_push($datar,$row);
		}
		$data['json'] = json_encode($datar);
		$this->load->view('pages/admin',$data);
	}
}
?>