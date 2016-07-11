<?php

require 'connect.inc.php';
?>


<form action="index.php" method="GET">
    Choose a Year: 
    <select name="year">
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2013</option>
        <option value="2011">2013</option>
        <option value="2010">2013</option>
        <option value="2009">2013</option>
        <option value="2008">2013</option>
        <option value="2007">2013</option>
        <option value="2006">2013</option>
        <option value="2005">2013</option>
        <option value="2003">2013</option>
        <option value="2002">2013</option>
        <option value="2001">2013</option>
        <option value="2000">2013</option>
        
        <hr><br><br>
        
    </select>
            <input type="submit" value="Submit">

</form>

<?php
if (isset($_GET['year']) && !empty($_GET['year'])){
    $year=$_GET['year'];
    if($year== 2016 || $year== 2015 || $year== 2014 ||$year== 2013){
        $query= "SELECT `Country or Area`, `Value` FROM `population_total` WHERE `Year`= $year";


        if($query_run=mysql_query($query)){
            if (mysql_num_rows($query_run)==NULL){
                echo "No results found";
            }else{
                while($query_row= mysql_fetch_assoc($query_run)){
                    $country= $query_row['Country or Area'];//associative array
                    $value=$query_row['Value'];//associative arrray
        
                    echo $country."'s population is ". $value." in ".$year."<br>";
                };
            }
        }else{
            echo mysql_error($query_run);//return specific error
        }
    }else{
        echo 'Year must be a value';
    }
    
}

?>