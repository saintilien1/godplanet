<?php
include"Connection.php";

if(!empty($_POST["nom"])|| !empty($_POST["role"])|| !empty($_POST["password"])|| !empty($_POST["prenom"])|| !empty($_POST["email"])){
    // Attempt insert query execution
try{
    // Create prepared statement
    $sql  = "INSERT INTO user_tb(nom,prenom,role,email, password) VALUES (:nom,:prenom,:role,:email,:password)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':nom', $_REQUEST['nom']);
    $stmt->bindParam(':prenom', $_REQUEST['prenom']); 
    $stmt->bindParam(':role', $_REQUEST['role']); 
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':password', $_REQUEST['password']); 
    // Execute the prepared statement
    $stmt->execute();
   header('location:../blog/blog_admin/admin.php');
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}   
    
}else{
    echo "Have some empty field";
}

// Close connection
unset($pdo);
