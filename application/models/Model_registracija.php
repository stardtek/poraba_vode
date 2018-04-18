<?php

class Model_registracija extends CI_Model {


	
    public function vnesi($ime, $geslo, $naslov, $obcina)
	{
        $this->load->database();#povezemo na bazo
        $niz = 'INSERT INTO UPORABNIKI(`ime`,`geslo`,`naslov`,`obcina`,`vrstauporabnika`) VALUES ("'.$ime.'","'.$geslo.'","'.$naslov.'","'.$obcina.'","normal")';
        #echo $niz;
        
        $query=$this->db->query($niz);
       
        $this->load->view('prijava');
        
       
        
	}
    

}


?>