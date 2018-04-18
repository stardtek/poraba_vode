<!DOCTYPE html>
<html>
<head>
<title>Dodaj vodo</title>
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
        .ime {
            color:white;
            
        }
    
    
    
    </style>
<body class="neki">

<div class="container main">
     <div class="row test">
         <div class="col-xl-1"></div>
        <div class="col-xl-3 ime"><p>Poraba vode</p></div>
        <div class="col-xl-3 ime"><a class="ime" href="
            <?php echo base_url(); 
            
            ?>index.php/zgodovina/zgo">Zgodovina</a></div>
       
         <div class="col-xl-1 ime"><a class="ime" href="
            <?php echo base_url(); 
             ?>index.php/dodaj/naloz">Dodaj vodo</a></div>
     
    </div>
     <div class="row ">
        <div class="col-xl-4"></div>
        <div class="col-xl-4 ozadje">
            
            <?php 
            $mesc= date("m");
            if($mesc == 01){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
            <option value="januar">Januar</option>
            <option value="februar">Februar</option>
            <option value="marec">Marec</option>
            <option value="april">April</option>
            <option value="maj">Maj</option>
            <option value="junij">Junij</option>
            <option value="julij">Julij</option>
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            if($mesc == 02){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
            
            <option value="februar">Februar</option>
            <option value="marec">Marec</option>
            <option value="april">April</option>
            <option value="maj">Maj</option>
            <option value="junij">Junij</option>
            <option value="julij">Julij</option>
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            if($mesc == 03){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
            
            <option value="marec">Marec</option>
            <option value="april">April</option>
            <option value="maj">Maj</option>
            <option value="junij">Junij</option>
            <option value="julij">Julij</option>
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            
            
            if($mesc == 04){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
            
            <option value="april">April</option>
            <option value="maj">Maj</option>
            <option value="junij">Junij</option>
            <option value="julij">Julij</option>
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            
            
            if($mesc == 05){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
            
            <option value="maj">Maj</option>
            <option value="junij">Junij</option>
            <option value="julij">Julij</option>
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            
            
            if($mesc == 06){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
            
            <option value="junij">Junij</option>
            <option value="julij">Julij</option>
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            
            
            if($mesc == 07){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
       
            <option value="julij">Julij</option>
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            
            if($mesc == 08){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
       
            <option value="avgust">Avgust</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            if($mesc == 09){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
       
        
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            if($mesc == 10){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
       
            
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            if($mesc == 11){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
       
            
            <option value="november">November</option>
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            if($mesc == 12){
               echo form_open('dodaj/dod'); #<form action="https.../prijava/vstop.php" method="post">
            echo '<select name="mesec">
       
            <option value="december">December</option>
            </select>';
            
            echo ' <select name="vrsta">
            <option value="topla">Topla voda</option>
            <option value="hladna">Hladna voda</option>
            </select>'; 
                
                
            }
            
            
           
            echo "<br>";
            echo "<br>";
            
            
           
            
            echo '
            <p class="ozadjebarva">Količina porabljene vode v litrih:</p>
  <input type="number" min="0" name="st" size=4 required>
  ';
            echo "<br>";
            echo form_submit('poslji','poslji!'); 
            ?>
            
    
        
        </div>
     
    </div>
    
    </div>
    
</body>  
</html>