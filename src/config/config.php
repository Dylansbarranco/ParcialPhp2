
<?php
 $host = "ls-0c5db1423e0dbba514993056a87c3c7c6d665a3e.cheuyamauz9x.us-east-1.rds.amazonaws.com";
 $db = "AdminCine";
 $user = "dbmasteruser";
 $pass = "1&kc]p#6}L{ZeyFIf](l-_ubBSggaAs.";
 $port = "3306";

 try {
     $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
 }
?>
