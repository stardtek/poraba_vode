<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Povp extends CI_Controller {


	
    
    public function naloz(){
           $this->load->model('Model_povp');
        $rezultat=$this->Model_povp->podatki();
        
        $this->load->view('povp',$rezultat);
        
        
    }
    public function povpr(){
        $var = $_POST['izbrisan'];
        
        //echo $var;
        
        $this->load->database();#povezemo na bazo
        $niz = 'UPDATE `uporabniki` SET `vrstauporabnika`="'.$var1.'" WHERE `ime` like "'.$var.'"';
        #echo $niz;
        
        $query=$this->db->query($niz);
        echo "<script type='text/javascript'>alert('Uspešeno spremenjena vrsta!!')</script>";
        
      
        $this->naloz();
        
    }
    

    
    

}


?>