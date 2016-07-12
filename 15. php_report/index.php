<?php

require 'connect.inc.php';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>World Development Indicators</title>
		<meta name="description" content="Countries data using SQL and PHP" />
		        
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-border.css" />
	</head>
    <body style ="padding:10px;">
    <div class="container">
    <header class="codrops-header">
        <h1><span>UN DATA's</span> World Development Indicators</h1><span>Beta</span>
    </header>
<form action="index.php" method="GET">
    <section>
    
    <select class="cs-select cs-skin-border" name="year">
        <option value="" disabled selected>Choose a Year</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        
    </select>
    <br><br>
    
    <select class="cs-select cs-skin-border" name= "table">
        <option value="" disabled selected>Choose a indicator</option>
        <option value="co2 emissions metric tonnes per capita">CO2 emissions </option>
        <option value="forest area in square km">Forest area </option>
        <option value="gdp growth annual percent">GDP growth annual percent</option>
        <option value="gdp in usd">GDP in USD</option>
        <option value="total population">Total Population</option>
        <option value="population growth">Population Growth</option>
        <option value="surface area in square km">Surface Area </option>
    </select>
    </section>
    <br><br>
   <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['year']) && !empty($_GET['year']) && isset($_GET['table']) && !empty($_GET['table'])){
    $year=$_GET['year'];
    $table = $_GET['table'];
    if($year== 2016 || $year== 2015 || $year== 2014 ||$year== 2013 || $year== 2012 || $year== 2011 || $year== 2010 || $year== 2009 || $year== 2008 || $year== 2007 || $year== 2006 || $year== 2005 || $year== 2004 || $year== 2003 ||$year== 2002 || $year== 2001 || $year== 2000 || $table="co2 emissions metric tonnes per capita" || $table="forest area in square km" || $table="gdp growth annual percent" || $table="gdp in USD" || $table="population_total" || $table="population_growth" || $table="surface area in square km"){
       
        $query= "SELECT `Country or Area`, `Value` FROM `$table` WHERE `Year`= $year";// the final query

        if($query_run=mysql_query($query)){
            if (mysql_num_rows($query_run)==NULL){
                echo "No results found";
            }else{
                echo "<div class='component'><h3>Year= ".$year."</h3><table><thead><tr><th>COUNTRY OR AREA</th><th>".strtoupper($table)."</th></tr></thead><tbody>";
                while($query_row= mysql_fetch_assoc($query_run)){
                    $country= $query_row['Country or Area'];//associative array
                    $value=$query_row['Value'];//associative arrray
        
                   // echo $country."'s ".$table." is ". $value." in ".$year."<br>";
                    table_values($country, $value);
                };
                echo "</tbody></table></div>";
            }
        }else{
            echo mysql_error($query_run);//return specific error
        }
    }else{
        echo 'Year must be a value';
    }
    
}

function table_values($country, $value){
    echo "<tr><td class ='user-name'>".$country."</td><td class = 'user-name'>".$value."</td></tr>";
}

?>
</div>
<footer style ="background-color: #2ea879; margin-top: 400px; padding: 30px; color: #ffffff">This project was built using PHP and SQL. Data is collected from UNData website. HTML and CSS inspired from Tympanus.com<br><br>Project by Ahil Gupta.</footer>
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>
<script>
    (function() {
        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
            new SelectFx(el);
        } );
    })();
</script>
</body>
</html>