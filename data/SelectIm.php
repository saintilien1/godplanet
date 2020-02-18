<?php
include"Connection.php";

 
try{
    // Create prepared statement
    $sql  = "SELECT file FROM image_tb";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
     foreach ($stmt as $row){
     echo "<img src=\"$row['image']\">";
   }
    $stmt->execute();
    
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}   
    
 
// Close connection
unset($pdo);
