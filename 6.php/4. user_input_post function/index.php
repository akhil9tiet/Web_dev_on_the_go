
<form action="/php_dev_akhil/user_input/index.php" method= "POST">
    <textarea name ="user_input" rows="6" cols="30"></textarea> <br><br>
    <input type="submit" vale "Submit">
    </form>

<hr>

<?php
if (isset($_POST['user_input']) && !empty($_POST['user_input'])){
    echo "<p>$_POST[user_input]</p>";
    $_POST[user_input]= null;
}
?>