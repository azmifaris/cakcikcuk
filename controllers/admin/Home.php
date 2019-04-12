<?php

class Home extends CI_Controller
{
	function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('admin/login');
    }
  }
	public function index(){
		$this->load->model("Jadwal_model");
		$data["fetch_data"] = $this->Jadwal_model->fetch_data();
		$this->load->view("adminstba/overview", $data);
	}
	
}

