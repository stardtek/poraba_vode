


<!DOCTYPE html>
<html>
<head>
<title>welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
    <style>
        .main{
            #background-color: #F0F8FF;
            background-color:  	#dcf3ff; 
            
            height: 100vh;
            
            
        }
    
        .test{
            background-color: #257ca3;
            
            padding: 1%;
            border-radius: 0px;
            color: white;
            
        }
        .ozadje{
            background-image: url(water2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            margin-top: 1%;
            #background-color: #F0F8FF;
            background-color: #396d7c;
            padding: 1%;
            border-radius: 10px;
            text-align: center;
            
            
        }
        .knof{
           padding: 1%;
            border-radius: 5px;
            text-align: center; 
            background-color: #6799ff;
            border-style: solid;
            border-color:   #4D62BF;
            color: white;
            
            
        }
        .ozadjebarva{
            background-color: #F0F8FF;
            border-radius: 5px;
        }
        .neki{
            #background-color: #B7BBBF;
            background-color: #a2d2df;
            
        }
        
        .logo{
            height: 35vh;
            width: 35vh;
            #padding-top: 10%;
            margin: 10%;
            
            
        }
        a{
            
            color:white;
        }
        .login{
            text-align: center;
            padding-top: 1%;
        }
    
    
    </style>
<body class="neki">

<div class="container main">
     <div class="row test">
         <div class="col-xl-1"></div>
        <div class="col-xl-3 ime"><p>Poraba vode</p></div>
         <div class="col-xl-3">
            <?php
             echo '<a href="' .base_url().'index.php">Prijava</a>';
             
             ?>
             
         </div>
        
     
    </div>
   
    
    
     <div class="row">
         <div class="col-xl-4"></div>
        <div class="col-xl-4 login">
       

            <?php

            form_open();

            echo form_open('registracija/registriraj');
            echo "Vnesite ime: ".form_input('uporabnik','');
            echo "<br>";
            echo "Vnesite geslo: ".form_input('geslo','');

            echo "<br>";
            echo "Vnesite naslov: ".form_input('naslov','');

            echo "<br>";
            echo "Vnesite obcino: ".form_input('obcina','');
            echo form_submit('poslji','poslji!');
            #echo '<a href="' .base_url.'registracija">sdgsdg</a>';
                ?>

         
         </div>
        
     
    </div>
    
    <div class="row">
    <div class="col-xl-3"></div>
    <div class="col-xl-4  ">
            
            <img class="logo" src="../../img/logo.PNG">
         </div>
    
    </div>
   
        
    
        
        
        
        
    </div>
<img src="<?php echo base_url(); ?>img/logotip.png"> 
