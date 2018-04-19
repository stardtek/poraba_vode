<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prijava extends CI_Controller {


	public function index()
	{
        
		$this->load->view('prijava'); #na pogled pozdravljeni pošljemo polje data
	}
    public function vstop()
	{
        #echo "vstop dela";
        
        $vsipodatki=$this->input->get();#vsi podatki iz obrazca so se shranili v asociativnotebelo$vsipodatki spremeniu u get iz post
        #echo $vsipodatki['uporabnik'].$vsipodatki['geslo'];
        $this->load->model('model_prijava');#nalozmo model "Model_prijava.php"
        $rezultat=$this->model_prijava->preveri($vsipodatki['uporabnik'],$vsipodatki['geslo']);#poklicemo metodo preveri ki je znotraj modela Model_prijava.php
        if($rezultat==TRUE){
            if($vsipodatki['uporabnik']=="muza" or $vsipodatki['uporabnik']=="admin"){
                $this->session->set_userdata('uporabnik',$vsipodatki['uporabnik'],'geslo',$vsipodatki['geslo']);
            #$this->output->set_header('Pragma: no-cache');
            $this->load->view('admin'); #na pogled pozdravljeni 
                
            }
            $this->session->set_userdata('uporabnik',$vsipodatki['uporabnik'],'geslo',$vsipodatki['geslo']);
            #$this->output->set_header('Pragma: no-cache');
            $this->load->view('dovoljen_vstop'); #na pogled pozdravljeni 
        }
        else{
            echo "neprava prijava";
            $this->load->view('prijava'); #na pogled pozdravljeni 
        }
       
	}
    

}


?>