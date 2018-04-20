<?php

class Model_povp extends CI_Model {


	
    

    
    
    public function podatki(){
        $this->load->database();#povezemo na bazo
        //echo ("SELECT ime FROM `uporabniki` WHERE ime not like '".$_SESSION['uporabnik']."'");
        $result = mysql_query("SELECT  DISTINCT `naslov` FROM test.uporabniki");
        //$result = mysql_query("SELECT * FROM test.voda where iduporabnika =  '".$_SESSION['uporabnik']."'");
        #echo "st uporabnikov v bazi je: ".$query->num_rows()."<br>";
    //     $row = mysql_fetch_assoc($result);
        
         $seznam1['podatki']=array();
       // echo $result;
        //print_r($row);
        for ($x = 0; $x < mysql_num_rows($result); $x++){
            $row = mysql_fetch_assoc($result);
            //echo ($row['ime']);  
            array_push($seznam1['podatki'],$row['naslov']);
        }
        return($seznam1);
    }
    
    
}
#https://developers.google.com/chart/interactive/docs/quick_start delaaaaaaaaaaa








#https://www.tutorialrepublic.com/php-tutorial/php-mysql-select-query.php
?>