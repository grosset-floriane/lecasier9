<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "lecasier9";
    $dns = "mysql:host=" . $servername . ";dbname=" + $dbname;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
?>

connecion->exec('SELECT FROM')
