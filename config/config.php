<?php

$dbHost = 'localhost'; 
$dbName = 'du-an-mau'; 
$dbPass = 'root'; 
$dbUser = 'root';


try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    
    
// Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Now you can use the $pdo object for database operations
    
 
echo "Connected to the database successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>




    
       