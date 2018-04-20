<html>
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
    .ime {
            color:white;
            
        }
         .graf{
             text-align: center;
             align-items: center;
            padding-top: 1%;
             
             
         }
    
    
    </style>
  <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      
      
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
          var data1 = new google.visualization.DataTable();
        var datahladna= <?php echo json_encode($podatki[0]); ?>;
        
       
        console.log(datahladna);
        datahladna = JSON.stringify(datahladna);
          datahladna = datahladna.split(",");
          console.log(datahladna.length);
          var hladna = [];
          
          for (j = 0; j < datahladna.length; j++) {
              //console.log(datahladna[j]);
              hladna.push(datahladna[j].split(":"));
             // console.log(hladna);
            }
          
          
        var datatopla= <?php echo json_encode($podatki[1]); ?>;
        var datatop = JSON.stringify(datatopla);
         datatop = datatop.split(",");
          var topla= [];
          for (i = 0; i < datatop.length; i++) {
              topla.push(datatop[i].split(":"));
            }
          
          
         // var neki = neki[0].split(":");
    console.log(topla [0][1]);
          console.log(topla [1][1]);
          console.log(topla [2][1]);
          console.log(topla [3][1]);
          console.log(topla [4][1]);
    
    
    
        data.addColumn('string', 'Mesci');
        data.addColumn('number', 'Litri');
        data.addRows([
          ['Januar',parseInt(topla[0][1]) ],
          ['Februar',parseInt(topla [1][1])],
          ['MArec', parseInt(topla [2][1])],
          ['April', parseInt(topla [3][1])],
          ['Maj',parseInt(topla [4][1])],
          ['Junij',parseInt(topla[5][1]) ],
          ['Julij',parseInt(topla [6][1])],
          ['Avgust', parseInt(topla [7][1])],
          ['September', parseInt(topla [8][1])],
          ['Oktober',parseInt(topla [9][1])],
          ['November', parseInt(topla [10][1])],
          ['December',parseInt(topla [11][1])],
        ]);

        // Set chart options
        var options = {'title':'Poraba Tople vode',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
          
          
          
          data1.addColumn('string', 'Mesci');
        data1.addColumn('number', 'Litri');
        data1.addRows([
          ['Januar',parseInt(hladna[0][1]) ],
          ['Februar',parseInt(hladna [1][1])],
          ['MArec', parseInt(hladna [2][1])],
          ['April', parseInt(hladna [3][1])],
          ['Maj',parseInt(hladna [4][1])],
          ['Junij',parseInt(hladna[5][1]) ],
          ['Julij',parseInt(hladna [6][1])],
          ['Avgust', parseInt(hladna [7][1])],
          ['September', parseInt(hladna [8][1])],
          ['Oktober',parseInt(hladna [9][1])],
          ['November', parseInt(hladna [10][1])],
          ['December',parseInt(hladna [11][1])],
        ]);

        // Set chart options
        var options1 = {'title':'Poraba Hladne vode',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart1 = new google.visualization.BarChart(document.getElementById('chart_div1'));
        chart1.draw(data1, options1);
      
      
      
      
      }
        
    </script>
  </head>
    
   

  <body class="neki">
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
     
    </div
          
          
          <div class="row">
              <div class="col-xl-3"></div>
        <!--Div that will hold the pie chart-->
        <div id="chart_div" class="col-xl-6 graf"></div>
         
              </div>
          
          <div class="row">
              <div class="col-xl-3"></div>
        <!--Div that will hold the pie chart-->
        <div id="chart_div1" class="col-xl-6 graf"></div>
          
              </div>
          
          
          
          
      </div>
          
          </body>
</html>
    
    <!-- p>https://jpgraph.net/features/src/show-example.php?target=new_bar6.php</p>
https://www.sitepoint.com/4-best-chart-generation-options-php-components/
!-->




