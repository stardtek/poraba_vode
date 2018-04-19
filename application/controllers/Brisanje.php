<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brisanje extends CI_Controller {


	
    
    public function naloz(){
           $this->load->model('Model_brisanje');
        $rezultat=$this->Model_brisanje->podatki();
        
        $this->load->view('brisanje',$rezultat);
        
        
    }
    public function zbris(){
        $var = $_POST['izbrisan'];
        //echo $var;
        
        $this->load->database();#povezemo na bazo
        $niz = 'DELETE FROM `voda` WHERE `iduporabnika` like "'.$var.'"';
        #echo $niz;
        
        $query=$this->db->query($niz);
        
        $niz1 = 'DELETE FROM `uporabniki` WHERE `ime` like "'.$var.'"';
        #echo $niz;
        
        $query=$this->db->query($niz1);
        $niz2 = 'DELETE FROM `vrstavode` WHERE `idvoda` like "'.$var.'"';
        #echo $niz;
        
        $query=$this->db->query($niz2);
        $niz3 = 'DELETE FROM `mesec` WHERE `idvoda` like "'.$var.'"';
        #echo $niz;
        
        $query=$this->db->query($niz2);
        $this->naloz();
        
    }
    

    
    

}


?>