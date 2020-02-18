<?php
include'../Connection.php';
    session_start();
    $id      =  $_SESSION['id'];
    echo $id;

if(!empty($_POST["nom"])|| !empty($_POST["prenom"])||!empty($_POST["role"])||!empty($_POST["password"])){
    // Attempt insert query execution
    $nom   = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $role   = $_POST["role"];
    $password   = $_POST["password"];
    
try{
    // Create prepared statement
    $sql  = "UPDATE user_tb SET nom='$nom', prenom='$prenom', role='$role', password='$password' WHERE id='$id'";
    $stmt = $pdo->prepare($sql); 
    // Execute the prepared statement
    $stmt->execute();
    echo $stmt->rowCount() ." records UPDATED successfully"; 
     header('location:../../blog/blog_admin/user/user.php');
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}   
    
}else{
    echo "Have some empty field";
}

// Close connection
unset($pdo); 	 
?>