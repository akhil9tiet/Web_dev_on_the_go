<?php
if (isset($_GET['day']) && isset($_GET['date']) && $_GET['YEAR']){
    
    $day= $_GET['day'];
    $date= $_GET['date'];
    $year= $_GET['year'];
    if (!empty($day) && !empty($date) && !empty($year)){
        echo "Ok!";
    }
    else{
        echo "Fill all the fields!";
    }
}
?>

<form action="./php_dev_akhil/3.get_function_form_fill/index.php" method= "GET">
    Day: <br><input type="text" name= "day"><br>
    Date: <br><input type="text" name= "datq"><br>
    Year: <br><input type="text" name= "year"><br>
    <input type= "submit" value= "Submit">
    
</form>
