<?php
include'../Connection.php';
session_start();
$id      =  $_SESSION['id'];


if(!empty($_POST["description"])|| !empty($_POST["file"])|| !empty($_POST["title"])){
    
    $check = getimagesize($_FILES["file"]["tmp_name"]);
     
    if($check !==false){ 
        $imgContent = addslashes(file_get_contents($_FILES['file']['tmp_name']));
        $description= $_REQUEST['description'];
        $title      = $_REQUEST['title'];
         // Attempt insert query execution
        try{
            // Create prepared statement
            $sql  = "UPDATE image_tb SET description='$description',title='$title',file='$imgContent' WHERE image_tb.id='$id'";
            $stmt = $pdo->prepare($sql);

             
            // Execute the prepared statement
            $stmt->execute();
            echo '<script>alert("Image inserted successfully.")</script>';
             header('location:../../blog/blog_admin/image/image.php');
        } catch(PDOException $e){
            die("ERROR: Could not able to execute $sql." . $e->getMessage());
        }   
    }else{
         echo "File is not an image - " . $check["mime"] . ".";
        $uploadOk = 0;
    }
   
    
}else{
    echo "Have some empty field";
}

// Close connection
unset($pdo);
