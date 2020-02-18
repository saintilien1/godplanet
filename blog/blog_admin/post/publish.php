<?php
include'../../../data/Connection.php';
    session_start();
    $id      =  $_SESSION['id'];
    echo $id;

 
try{
    // Create prepared statement
    $sql  = "UPDATE `post_tb` SET `publish` = 'yes' WHERE `post_tb`.`id` ='$id'"; 
    $stmt = $pdo->prepare($sql); 
    // Execute the prepared statement
    $stmt->execute();
    echo $stmt->rowCount() ." records UPDATED successfully"; 
     header('location:../admin.php');
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}   
 
// Close connection
unset($pdo); 	 
?>