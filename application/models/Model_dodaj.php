<?php

class Model_dodaj extends CI_Model {


	
    public function neki($mesec,$vrsta,$kolicina)
	{
        
        $this->load->database();#povezemo na bazo
        $niz= 'INSERT INTO `voda`( `kolicina`, `iduporabnika`) VALUES ('.$kolicina.",'". $_SESSION['uporabnik']."')";
        
        $query=$this->db->query($niz);
        
        
        $query=$this->db->query('SELECT idvoda FROM voda where iduporabnika like "'.$_SESSION['uporabnik'].'"');
        $vrstice=$query->num_rows();
        $st= $query->row('idvoda',$vrstice);
        #return $st;
        $niz1 ='INSERT INTO `mesec`( `mesec`, `idvoda`) VALUES ("'.$mesec.'",'."'" .$_SESSION['uporabnik']."'".")";
        
        $query=$this->db->query($niz1);
        $niz2 ='INSERT INTO `vrstavode`( `vrstavode`, `idvoda`) VALUES ("'.$vrsta.'",'."'" .$_SESSION['uporabnik']."'".")";
        $query=$this->db->query($niz2);
        
        
        
        return($vrstice);
            
      
        
        #$this->db->close(); zapremo povezavo do baze
        
	}
    

}


?>