<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Takken extends CI_Controller {

	public function index() {
		// Model
		$this->load->model('model');
		$data['rows'] = $this->model->GetAll();

		// Views
		$this->load->view('components/header');
		$this->load->view('components/navbar');
		$this->load->view('Takken', $data);
		$this->load->view('components/footer');
	}

	public function Kapoenen() {
		// Model
		$this->load->model('mysql_model_takbeschrijvingen');
		$this->load->model('mysql_model_activiteiten');
		

		// Variables
		$data['rows'] = $this->mysql_model_takbeschrijvingen->Kapoenen_beschrijving();
		$data['row'] = $this->mysql_model_activiteiten->Kapoenen_activiteiten();

		// Views
		$this->load->view('components/header');
		$this->load->view('components/navbar');
		$this->load->view('kapoenen', $data);
		$this->load->view('components/footer');
	}

	public function Welpen() {
		// Model
		$this->load->model('model');
		$data['rows'] = $this->model->Welpen();

		// Load Views
		$this->load->view('components/header');
		$this->load->view('components/navbar');
		$this->load->view('welpen', $data);
		$this->load->view('components/footer');
	}

	public function Jonggivers() {
		// Model
		$this->load->model('model');
		$data['rows'] = $this->model->Jonggivers();

		// Views
		$this->load->view('components/header');
		$this->load->view('components/navbar');
		$this->load->view('jong-givers', $data);
		$this->load->view('components/footer');
	}

	public function Givers() {
		// Model 
		$this->load->model('model');
		$data['rows'] = $this->model->Givers();

		// Views
		$this->load->view('components/header');
		$this->load->view('components/navbar');
		$this->load->view('givers', $data);
		$this->load->view('components/footer');
	}

	public function Jins() {
		// Models
		$this->load->model('model');
		$data['rows'] = $this->model->Jins();

		// Views
		$this->load->view('components/header');
		$this->load->view('components/navbar');
		$this->load->view('jins', $data);
		$this->load->view('components/footer');
	}
 
 	public function Leiding() {
 		// Models
 		$this->load->model('model');
 		$data['rows'] = $this->model->Leiding();

 		// Views
 		$this->load->view('components/header');
 		$this->load->view('components/navbar');
 		$this->load->view('leiding', $data);
 		$this->load->view('components/footer');
 	}

}