<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spremeni extends CI_Controller {


	
    
    public function naloz(){
           $this->load->model('Model_spremeni');
        $rezultat=$this->Model_spremeni->podatki();
        
        $this->load->view('spremeni',$rezultat);
        
        
    }
    public function zbris(){
        $var = $_POST['izbrisan'];
        $var1 = $_POST['vrsta'];
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