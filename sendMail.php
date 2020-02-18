<?php
//send the data to the database
include'data/Connection.php';

 
// Attempt insert query execution
try{
    // Create prepared statement
    $sql  = "INSERT INTO email_tb (sujet,name, email, phone,message) VALUES (:sujet, :name, :email, :phone,:message)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':sujet', $_REQUEST['sujet']);
    $stmt->bindParam(':name', $_REQUEST['name']);  
    $stmt->bindParam(':email', $_REQUEST['email']); 
    $stmt->bindParam(':phone', $_REQUEST['phone']);
    $stmt->bindParam(':message', $_REQUEST['message']);
    
    // Execute the prepared statement
    $stmt->execute();
    echo'<script> alert("Actualite save")</script>';
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
// Check for empty fields
if(empty($_POST['name'])      ||  
   empty($_POST['email'])     ||
   empty($_POST['sujet'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
      echo "No arguments Provided!";
      return false;
   }
   
$sujet = strip_tags(htmlspecialchars($_POST['sujet']));
$name  = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'saintilien49@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name\nAbout: $sujet";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@godplanetforhaiti.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
header('location:index.php');
return true; 
?>
