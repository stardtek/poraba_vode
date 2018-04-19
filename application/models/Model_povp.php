<?php

class Model_povp extends CI_Model {


	
    public function usee()
	{
        
        $this->load->database();#povezemo na bazo
      
        $result = mysql_query("SELECT * FROM test.voda where iduporabnika =  '".$_SESSION['uporabnik']."'");
        $row = mysql_fetch_assoc($result);
        $result1 = mysql_query("SELECT * FROM test.mesec where idvoda ='".$_SESSION['uporabnik']."'");
        $result2 = mysql_query("SELECT * FROM test.vrstavode where idvoda ='".$_SESSION['uporabnik']."'");
        
        #echo mysql_result($result, 9); // outputs third employee's name
        #echo $result;
        $podatki=[];
        $seznam1['podatki']=array();
        #print_r($result);
        for ($x = 0; $x < mysql_num_rows($result); $x++){
            $row = mysql_fetch_assoc($result);
            $row1 = mysql_fetch_assoc($result1);
            $row2 = mysql_fetch_assoc($result2);
           // print_r ($row);
            //print_r ($row1);
            //print_r ($row2);
            //echo "<br>";
            //echo $row['mesec'];
            #array_push($seznam1['podatki'],array($row['kolicina'],intval($row['mesec'])));
            array_push($seznam1['podatki'],[$row['kolicina'],$row1['mesec'],$row2['vrstavode']]);
            $podatki[] = $row['kolicina'];
            #echo $row['iduporabnika']; 
            #echo "<br>";
        }
        #echo count($seznam1['podatki']);
        #print_r($seznam1);
        #print_r ($seznam1['podatki']);
        //echo "<br>";
        $mescih=array("jan"=>0,"feb"=>0,"mar"=>0,"apr"=>0,"maj"=>0,"jun"=>0,"jul"=>0,"avg"=>0,"sep"=>0,"okt"=>0,"nov"=>0,"dec"=>0);
        $mescit=array("jan"=>0,"feb"=>0,"mar"=>0,"apr"=>0,"maj"=>0,"jun"=>0,"jul"=>0,"avg"=>0,"sep"=>0,"okt"=>0,"nov"=>0,"dec"=>0);
        for ($z = 0; $z<count($seznam1['podatki']);$z++){
            #echo $z;
            if($seznam1['podatki'][$z][1]=='januar' and $seznam1['podatki'][$z][2] == "hladna"){
               // echo "ustaul1 <br>";
                $mescih["jan"]=$mescih["jan"]+$seznam1['podatki'][$z][0];
                
            }
            if($seznam1['podatki'][$z][1]=='februar' and $seznam1['podatki'][$z][2] == "hladna"){
               // echo "ustaul 2<br>";
                $mescih["feb"]=$mescih["feb"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='marec' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul3 <br>";
                $mescih["mar"]=$mescih["mar"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='april' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul4 <br>";
                $mescih["apr"]=$mescih["apr"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='maj' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul5 <br>";
                $mescih["maj"]=$mescih["maj"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='junij' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul6 <br>";
                $mescih["jun"]=$mescih["jun"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='julij' and $seznam1['podatki'][$z][2] == "hladna"){
               // echo "ustaul7 <br>";
                $mescih["jul"]=$mescih["jul"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='avgust' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul8 <br>";
                $mescih["avg"]=$mescih["avg"]+$seznam1['podatki'][$z][0];
                
            }
            if($seznam1['podatki'][$z][1]=='september' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul9 <br>";
                $mescih["sep"]=$mescih["sep"]+$seznam1['podatki'][$z][0];
                
            }
            
            
            if($seznam1['podatki'][$z][1]=='oktober' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul10 <br>";
                $mescih["okt"]=$mescih["okt"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='november' and $seznam1['podatki'][$z][2] == "hladna"){
               // echo "ustaul11 <br>";
                $mescih["nov"]=$mescih["nov"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='december' and $seznam1['podatki'][$z][2] == "hladna"){
              //  echo "ustaul12 <br>";
                $mescih["dec"]=$mescih["dec"]+$seznam1['podatki'][$z][0];
                
            }
            
            
            
            
            
            
            
            
            #za toplo vodo
            
            
            if($seznam1['podatki'][$z][1]=='januar' and $seznam1['podatki'][$z][2] == "topla"){
                //echo "ustaul1 <br>";
                $mescit["jan"]=$mescit["jan"]+$seznam1['podatki'][$z][0];
                
            }
            if($seznam1['podatki'][$z][1]=='februar' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul2 <br>";
                $mescit["feb"]=$mescit["feb"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='marec' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul3 <br>";
                $mescit["mar"]=$mescit["mar"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='april' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul4 <br>";
                $mescit["apr"]=$mescit["apr"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='maj' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul5 <br>";
                $mescit["maj"]=$mescit["maj"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='junij' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul6 <br>";
                $mescit["jun"]=$mescit["jun"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='julij' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul7 <br>";
                $mescit["jul"]=$mescit["jul"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='junuj' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul8 <br>";
                $mescit["jun"]=$mescit["jun"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='avgust' and $seznam1['podatki'][$z][2] == "topla"){
                //echo "ustaul9 <br>";
                $mescit["avg"]=$mescit["avg"]+$seznam1['podatki'][$z][0];
                
            }
            if($seznam1['podatki'][$z][1]=='september' and $seznam1['podatki'][$z][2] == "topla"){
                //echo "ustaul10 <br>";
                $mescit["sep"]=$mescit["sep"]+$seznam1['podatki'][$z][0];
                
            }
            
            
            if($seznam1['podatki'][$z][1]=='oktober' and $seznam1['podatki'][$z][2] == "topla"){
               // echo "ustaul11 <br>";
                $mescit["okt"]=$mescit["okt"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='november' and $seznam1['podatki'][$z][2] == "topla"){
                //echo "ustaul12 <br>";
                $mescit["nov"]=$mescit["nov"]+$seznam1['podatki'][$z][0];
                
            }
            
            if($seznam1['podatki'][$z][1]=='december' and $seznam1['podatki'][$z][2] == "topla"){
                //echo "ustaul <br>";
                $mescit["dec"]=$mescit["dec"]+$seznam1['podatki'][$z][0];
                
            }
            
            
            
        }
        //echo "hladna";
        //print_r($mescih);
        //echo "<br>";
        //print_r($mescit);
        //echo "<br>";
        $tabelaData['podatki']=[$mescih,$mescit]; 
        
        
        
        
       
        #var_dump($result['kolicina']);
                
        #print_r($result);
       

        return($tabelaData);
            
      
        
        #$this->db->close(); zapremo povezavo do baze
        
	}
    

    
    
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