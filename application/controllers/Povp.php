<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Povp extends CI_Controller {


	
    
    public function naloz(){
           $this->load->model('Model_povp');
        $rezultat=$this->Model_povp->podatki();
        
        $this->load->view('povp',$rezultat);
        
        
    }
    public function povpr(){
        $var = $_POST['naslov'];
        $this->load->model('Model_povp');
        //echo $var;
        
        $this->load->database();#povezemo na bazo
       $result = mysql_query('SELECT DISTINCT ime FROM test.uporabniki where naslov like "'.$var.'"');
        #echo $niz;
        
        $sez=array();
        for ($x = 0; $x < mysql_num_rows($result); $x++){ 
            $row = mysql_fetch_assoc($result);
            array_push($sez,$row['ime']);
         //   echo $row['ime'];
           // echo "<br>";
        }
       // print_r($sez);
        
        $rezultat=$this->Model_povp->usee($sez);
        //$row = mysql_fetch_assoc($result);
    //   print_r ($row['ime']);
    //  $row = mysql_fetch_assoc($result);
       // print_r ($row['ime']);
        //echo "<script type='text/javascript'>alert('Uspešeno spremenjena vrsta!!')</script>";
        
      
        $this->load->view('graf',$rezultat);
        
    }
    

    
    

}


?>