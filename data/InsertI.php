<?php
include"Connection.php";



if(!empty($_POST["description"])|| !empty($_POST["file"])|| !empty($_POST["title"])){
    
    $check = getimagesize($_FILES["file"]["tmp_name"]);
     
    if($check !==false){ 
        $imgContent = addslashes(file_get_contents($_FILES['file']['tmp_name']));
         
         // Attempt insert query execution
        try{
            // Create prepared statement
            $sql  = "INSERT INTO image_tb(description,title,file) VALUES (:description,:title,:file)";
            $stmt = $pdo->prepare($sql);

            // Bind parameters to statement
            $stmt->bindParam(':description', $_REQUEST['description']);
            $stmt->bindParam(':title', $_REQUEST['title']); 
            $stmt->bindParam(':file', $imgContent); 
            // Execute the prepared statement
            $stmt->execute();
//            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

            echo '<script>alert("Image inserted successfully.")</script>';
            header('location:../blog/blog_admin/image/addImage.php');
        } catch(PDOException $e){
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
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
