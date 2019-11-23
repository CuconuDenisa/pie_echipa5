<?php  
 $connect = mysqli_connect("localhost", "root", "", "pie");  
 $query = "SELECT gen, count(*) as numar FROM pacient GROUP BY gen";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>DIAGRAMA</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Genul', 'Numarul'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gen"]."', ".$row["numar"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Procentajul genului masculin si feminin al pacientilor  ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head> 	  
      <body> 	  
          
           <div style="width:1000px;">  
                <h1 align="center">Procentajul pacientilor spitalului</h1>  
                <br />  
                <div id="piechart" style="width: 1000px; height: 500px; position:center"></div>  
           </div>
	<form action="pacientinserat.php" class="inline">
    <button class="float-left submit-button" style="background-color:gray;color:white;width:70px;">Inapoi</button>
	</form>		   
      </body>  
 </html>