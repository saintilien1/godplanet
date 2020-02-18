<?php
include"Connection.php";

if(!empty($_POST["sujet"])|| !empty($_POST["message"])||!empty($_POST["autor"])){
    // Attempt insert query execution
try{
    // Create prepared statement
    $sql  = "INSERT INTO post_tb (title,body,autor, date) VALUES (:title, :body,:autor, now())";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':title', $_REQUEST['sujet']);
    $stmt->bindParam(':body', $_REQUEST['message']);
    $stmt->bindParam(':autor', $_REQUEST['autor']);    
    // Execute the prepared statement
    $stmt->execute();
     header('location:../blog/blog_admin/post/post.php');
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}   
    
}else{
    echo "Have some empty field";
}

// Close connection
unset($pdo);
