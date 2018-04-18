<?php

class Model_prijava extends CI_Model {


	
    public function preveri($ime, $geslo)
	{
        $this->load->database();#povezemo na bazo
        
        $query=$this->db->query('SELECT * FROM uporabniki where ime="'.$ime.'"AND geslo="'.$geslo.'"');
        #echo "st uporabnikov v bazi je: ".$query->num_rows()."<br>";
        $query->num_rows();
        #iz pouzvedbe smo izluscili podatzek o stevilu vrstic
        if($query->num_rows!=0){
            return TRUE;
            
        }
        
        return FALSE;
        
        
        #$this->db->close(); zapremo povezavo do baze
        
	}
    

}


?>