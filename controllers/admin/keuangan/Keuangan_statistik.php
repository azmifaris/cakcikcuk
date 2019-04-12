
<?php

class Keuangan_statistik extends CI_Controller
{
	
	public function index(){
/*		$this->load->model("KeuanganRekap_model");
*//*		$data["fetch_data"] = $this->KeuanganRekap_model->fetch_data();
*/		$this->load->view("adminstba/keuangan/Keuangan_statistik"/*, $data*/);
	}

}