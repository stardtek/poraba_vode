<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dodaj extends CI_Controller {


	public function index()
	{
        
		#$this->load->view('test'); #na pogled pozdravljeni pošljemo polje data
	}
    
    public function naloz(){
      
        
        $this->load->view('dodaj');
        
        
    }
    
    public function dod(){
         $vsipodatki=$this->input->post();
         #echo $vsipodatki['st'];
         $this->load->model('Model_dodaj');
        $rezultat=$this->Model_dodaj->neki($_POST['mesec'],$_POST['vrsta'] ,$_POST['st']);
        #echo $rezultat;
        echo "<script type='text/javascript'>alert('Uspešen vnos!')</script>";
        
        $this->load->view('dodaj');
        
        
    }
    
    

}


?>