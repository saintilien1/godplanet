<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Admin-section Add Post</title>
        <script src="/ckfinder/ckfinder.js"></script>
        <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
 			<link rel="stylesheet" href="css/admin.css"> 
			<link rel="stylesheet" href="../../../css/linearicons.css">
			<link rel="stylesheet" href="../../../css/font-awesome.min.css">
			<link rel="stylesheet" href="../../../css/magnific-popup.css">
			<link rel="stylesheet" href="../../../css/nice-select.css">
			<link rel="stylesheet" href="../../../https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="../../../css/bootstrap.css"> 
		</head>
		<body>
			<!-- Start Header Area -->
              <!-- Navigation -->
 <nav class="navbar navbar-expand-xl|lg|md|sm navbar-light text-dark bg-light mx-auto">
	<a class="navbar-brand" href="#"><h2>God planet for Haiti</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbar1">  
    <ul class="navbar-nav d-flex flex-row-reverse bg-light"> 
         <li>    
             <a href="#post.php">
             <i class="fa fa-user"></i>       
          <?php 
            session_start();
            if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_name'] != "") {
              echo 'Welcome '.$_SESSION['sess_name'].' '.$_SESSION['sess_user_name'];
                $nom   =$_SESSION['sess_name'];
                $id    =$_SESSION['sess_user_id'];
                $prenom=$_SESSION['sess_user_name'];
                ?>    
             <i class="fa fa-chevron-down"></i>
             </a> 
             <ul>       
         <?php
              echo '<li><a href="../../../data/logout.php" class="logout">Logout</a></li>';
            } else { 
              header('location:../../data/admin.php');
            }
         ?>
             </ul>
         </li>
    </ul>
  </div>
</nav>
 <!-- End Header Area --> 
<!-- Start donate Area -->
			<section class="donate-area relative section-gap" id="contact">
       
				<div class="overlay overlay-bg"></div>
				<div class="container">
					 
					<div class="row d-flex justify-content-center">
						<div class="col-lg-2 contact-left">
							<div class="single-info">
                            <?php 
                                
                               $_SESSION['sess_user_id']   = $id;  
                               $_SESSION['sess_user_name'] = $prenom;
                               $_SESSION['sess_name']      = $nom; 
                              echo '<h6> <a href="post.php">Manage posts</a> </h6>';
                            ?> 
							</div> 
                            <div class="single-info">
                            <?php 
                               
                               $_SESSION['sess_user_id']   = $id;  
                               $_SESSION['sess_user_name'] = $prenom;
                               $_SESSION['sess_name']      = $nom; 
                              echo '<h6> <a href="../user/user.php">Manage user</a> </h6>';
                            ?> 	  
                            </div>
                            <div class="single-info">
                            <?php 
                               
                               $_SESSION['sess_user_id']   = $id;  
                               $_SESSION['sess_user_name'] = $prenom;
                               $_SESSION['sess_name']      = $nom; 
                              echo '<h6> <a href="../user/user.php">Manage Image</a> </h6>';
                            ?> 		  
                            </div> 	 
						</div>
                        
                        
						<div class="col-lg-10 contact-right"> 
                            <div role="group" class="btn-group"> 
                                 <button class="btn btn-default" type="button"><a href="post.php">Add Post</a></button>
                             </div> 
                            <div role="group" class="btn-group"> 
                                 <button class="btn btn-default" type="button"><a href="../admin.php">Manage post</a></button>
                            </div> 
                            <div class="row">
                                 <div class="container">
                                       <div class="col-lg-12 col-sm-12 pb-80 header-text">
                                       <h3>Manage post</h3>
                                      </div>
                                 </div>
                            </div>
              
								 	<div class="row">  
                                        <div class="col-lg-12 d-flex flex-column"> 
                                             <?php 
                                                 include"../../../data/Connection.php"; 
                                                 try{    
                                                         $id     =$_GET["id"];
                                                         $title  = "";
                                                         $autor  = "";
                                                         $date   = "";
                                                         $body   = "";
 
                                                     $_SESSION["id"]=$id;
                                                     $stmt = $pdo->query("SELECT * FROM post_tb WHERE id=".$id);  
                                                     while ($row = $stmt->fetch()) { 
                                                         $title  = $row["title"];
                                                         $autor  = $row["autor"];
                                                         $date   = $row["date"];
                                                         $body   = $row["body"];          
                                                        }
                                                            
                                                          }catch(PDOException $e){
                                                            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
                                                        }
                                                      // Close connection
                                                        unset($pdo); 
                                             
                                            ?>
                                            
                                            
                                            
                                            
<!--                                            action="../../../data/update/updateP.php"-->
				            <form class="booking-form"  action="../../../data/update/updateP.php" method="post"> 
								 	<div class="row">  
                                        <div class="col-lg-12 d-flex flex-column">
                                            <label for="tile">Title</label>
											<input name="sujet" id="title" placeholder="title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Title'" value="<?php echo $title  ?>"   class="form-control mt-20" required="" type="text"> 
										</div>   
										<div class="col-lg-12 d-flex flex-column"> 
                                            <label for="message">Body</label>
											<textarea class="form-control mt-20" id="message"  name="message" placeholder="Body" onfocus="this.placeholder = 'Title'" value="<?php    ?>" onblur="this.placeholder = 'Messege'" required=""><?php echo $body  ?></textarea>
                                            <script type="text/javascript"> CKEDITOR.replace( 'message', {
                                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                            filebrowserWindowWidth: '1000',
                                            filebrowserWindowHeight: '700'
                                        } );
                                        </script>
										</div> 
                                        <div class="col-lg-12 d-flex flex-column"> 
                                            <label for="autor">Autor</label>
											 <input name="autor" id="autor" placeholder="autor" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Title'" value="<?php echo $autor  ?>"   class="form-control mt-20" required=""  type="text" readonly> 
										</div>  
										<div class="col-lg-12 d-flex  justify-content-end send-btn" >
											<input class="btn btn-default primary-btn mt-20 text-uppercase lnr lnr-arrow-right" value="Update" type="submit">
										</div>  
										 
									</div>
					  		</form>             
							 </div> 
                            </div> 
                        </div> 
                    </div>
				</div> 
            </section>     
	        <script src="../../../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="../../../js/vendor/bootstrap.min.js"></script>
			<script src="../../../js/jquery.ajaxchimp.min.js"></script>
			<script src="../../../js/jquery.nice-select.min.js"></script>
			<script src="../../../js/jquery.sticky.js"></script>
			<script src="../../../js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="../../../js/jquery.magnific-popup.min.js"></script>
			<script src="../../../js/main.js"></script> 
            <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
		</body>
	</html>