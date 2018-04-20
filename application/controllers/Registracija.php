<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registracija extends CI_Controller {


	public function index()
	{
        
		$this->load->view('registracija'); 
	}
    
    public function indexreg()
	{
        
		$this->load->view('registracija'); 
	}
    public function registriraj()
	{
       
        
        $vsipodatki=$this->input->post();
        
        $this->load->model('model_registracija'); #na pogled pozdravljeni 
        $this->model_registracija->vnesi($vsipodatki['uporabnik'], $vsipodatki['geslo'],$vsipodatki['naslov'],$vsipodatki['obcina']);
        

	}
    

}


?>