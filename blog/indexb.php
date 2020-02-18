<?php
if(session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			 
			 
            <link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			 

</head>

<body>
              <!-- Navigation -->
 <nav class="navbar navbar-expand-xl|lg|md|sm navbar-light text-dark bg-light mx-auto">
	<a class="navbar-brand" href="#"><h2>God planet for Haiti</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav d-flex flex-row-reverse bg-light"> 
         <li>
             <a href="../index.php">Home</a>  
             <a href="../index.php#project">Projects</a>
             <a href="../index.php#blog/indexb.php">Blog</a>
             <a href="../index.php#about">About</a>
             <a href="../index.php#donate">Donate</a>
			 <a href="../index.php#contact">Contact Us</a>
         </li>
    </ul>
  </div>
</nav>
    
			<!-- End Header Area --> 
  <header class="masthead">
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/post-bg1.jpg" alt="First slide">
                 <div class="carousel-caption d-none d-md-block">
                 <h5>God Planet for Haiti</h5>
                 <p>God Planet for Haiti</p>
          </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/home-bg.jpg" alt="Second slide">
                 <div class="carousel-caption d-none d-md-block">
                 <h5>God Planet for Haiti</h5>
                 <p>God Planet for Haiti</p>
          </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/home-bg.jpg" alt="Third slide">
                 <div class="carousel-caption d-none d-md-block">
                 <h5>God Planet for Haiti</h5>
                 <p>God Planet for Haiti</p>
          </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  </header>
     

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.php"> 
               <?php
                    include"../data/Connection.php"; 
                      try{
                        $stmt = $pdo->query("SELECT * FROM post_tb");
                        while ($row = $stmt->fetch()) {
                           echo "<h2 class=\"post-title\">";
                           echo $row["title"];
                            $titre = $row["title"];
                           echo "</h2>";
                           echo "<h4 class=\"post-subtitle\">"; 
                            $corps = $row["body"]; 
                               if(strlen($corps) > 100 ){  
                                   $id =$row['id']; 
                                   $corps = substr_replace($corps, "... <a href=\"post.php?id=$id\">READ MORE</a> ", 100);     
                             } 
                           echo $corps;    
                           echo "</h4>";
                           echo "<p class=\"post-meta\">";
                           echo "Posted by ".$row["autor"]." on ". $row["date"];
                           echo "</p>";
                           echo "<hr>";        
                        }  
                      }catch(PDOException $e){
                        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
                    }
                  // Close connection
                    unset($pdo);
                  ?> 
          </a>
         
        </div> 
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div> 
  <hr> 
  <!-- Footer -->
 <!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row d-flex flex-column justify-content-center">
					  
						<p class="footer-text m-0">
							 
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <a href="https://www.jimbosoft.com" target="_blank">JimboSoft</a>
							 
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
