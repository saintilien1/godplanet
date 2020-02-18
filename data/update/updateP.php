<?php
include'../Connection.php';
    session_start();
    $id      =  $_SESSION['id'];
    echo $id;

if(!empty($_POST["sujet"])|| !empty($_POST["message"])||!empty($_POST["autor"])){
    // Attempt insert query execution
    $sujet   =$_POST["sujet"];
    $message = $_POST["message"];
    $autor   = $_POST["autor"];
    
try{
    // Create prepared statement
    $sql  = "UPDATE post_tb SET title='$sujet', body='$message', autor='$autor', date= now() WHERE id='$id'";
    $stmt = $pdo->prepare($sql); 
    // Execute the prepared statement
    $stmt->execute();
    echo $stmt->rowCount() ." records UPDATED successfully"; 
     header('location:../../blog/blog_admin/post/post.php');
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}   
    
}else{
    echo "Have some empty field";
}

// Close connection
unset($pdo); 	 
?>