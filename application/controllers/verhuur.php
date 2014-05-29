<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class verhuur extends CI_Controller {

	public function index() {
		// Views
		$this->load->view('components/header');	
		$this->load->view('components/navbar');
		$this->load->view('verhuur');
		$this->load->view('components/footer');
	}

	public function verhuurkalender() {
		// Models
		$this->load->model('mysql_model_verhuur');
		$data['rows'] = 

		// Views
		$this->load->view('components/header');
		$this->load->view('components/navbar');
		$this->load->view('verhuurkalender');
		$this->load->view('components/footer');
	}
	
}
