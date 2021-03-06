<?php
    require_once("utils.php");
    try{
        $link = mysqli_connect("127.0.0.1", "app", "donato", "donato");
        echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
        echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
        mysqli_close($link);
    }catch(Error){
        console_log("Error: Unable to connect to MySQL." . PHP_EOL);
    }
?>