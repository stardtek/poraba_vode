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
        .sredina{
            
            text-align: center;
            padding-top: 1%;
        }
    
    
    
    </style>
<body class="neki">

<div class="container main">
     <div class="row test">
         
        <div class="col-xl-2 ime"><p>Poraba vode</p></div>
     
       
         <div class="col-xl-2"><a href="
            <?php echo base_url(); 
             ?>index.php/brisanje/naloz">Brisanje uporabnikov</a></div>
         <div class="col-xl-3"><a href="
            <?php echo base_url(); 
             ?>index.php/spremeni/naloz">Spreminjanje uporabnikov</a></div>
         <div class="col-xl-2"><a href="
            <?php echo base_url(); 
             ?>index.php/">Dodajanje uporabnikov</a></div>
         
         <div class="col-xl-2"><a href="
            <?php echo base_url(); 
             ?>index.php/povp/naloz">Povprečna poraba</a></div>
     
    </div>
   
    
    
     <div class="row">
        <div class="col-xl-12 sredina">
         <?php
            echo form_open('povp/povpr'); #<form action="https.../prijava/vstop.php" method="post">
            
            
            echo ' <select name="naslov">';
                for($i=0;$i<count($podatki);$i++){
                    //echo ($podatki[$i]);
                    
           echo' <option value="'.$podatki[$i].'">'.$podatki[$i].'</option>';
                    
                }
          
       
                
                
            
            
            
           
            echo "<br>";
            echo "<br>";
            
            
    
            echo "<br>";
            echo form_submit('poslji','poslji!'); 
            ?>
         
         </div>
    </div>
         <div class="row">
        <div class="col-xl-12 sredina ">
            
            <img class="logo" src="../../img/logo.PNG">
         </div>
     
         
         </div>
   
        
    
        
        
        
        
    </div>
</body>
</html>