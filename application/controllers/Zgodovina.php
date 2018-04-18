<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zgodovina extends CI_Controller {


	public function index()
	{
        
		#$this->load->view('test'); #na pogled pozdravljeni pošljemo polje data
	}
    public function zgo(){
        # $vsipodatki=$this->input->post();
         #echo $vsipodatki['st'];
         $this->load->model('Model_zgodovina');
        $rez= $this->Model_zgodovina->usee();
        #$rezultat=$this->Model_vodo->neki($_POST['mesec'],$_POST['vrsta'] ,$_POST['st']);
        #echo $rez;
        #echo "<script type='text/javascript'>alert('Uspešen vnos!')</script>";
        #print_r($rez);
        
        $this->load->view('zgodovina',$rez);
        
        
    }
    
    

}


?>