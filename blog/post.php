
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>God planet for Haiti</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
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
  <div class="collapse navbar-collapse" id="navbar1" class="float-sm-left">
    <ul class="navbar-nav d-flex flex-row-reverse bg-light"> 
         <li >
             <a href="../index.php">Home</a>
             <a href="indexb.php">Blog</a> 
             
              <a href="../index.php">Home</a>
			 <a href="indexb.php#project">Projects</a>
             <a href="blog/indexb.php">Blog</a>
			 <a href="indexb.php#about">About</a>
             <a href="indexb.php#donate">Donate</a>
			 <a href="#indexb.phpcontact">Contact Us</a>     
         </li>
    </ul>
  </div>
</nav>  

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg1.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <?php
                    include"../data/Connection.php";  
                       $id    = $_GET["id"];
                       $corps = "";
                       $titre = "";
                       $autor ="";
                       $date  =""; 
                      try{
                        $stmt = $pdo->query("SELECT * FROM post_tb WHERE id=".$id);  
                        while ($row  = $stmt->fetch()) { 
                             $titre  = $row["title"]; 
                             $corps  = $row["body"];  
                             $autor  =$row["autor"];
                             $date   =$row["date"];     
                        }     
                      }catch(PDOException $e){
                        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
                    }
                  // Close connection
                    unset($pdo); 
                  ?>
            <h1 class="text-light"><?php echo $titre ?></h1>
            <h2 class="subheading text-light"> </h2>
            <span class="meta">Posted by
              <a href="#"><?php echo $autor ?></a>
              on <?php echo $date ?></span>
          </div>
        </div>
      </div>
    </div>
  </header> 
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php
            echo $corps;
           ?>

          <p>Placeholder text by
            <a href="http://spaceipsum.com/">GOD PLANET FOR HAITI</a>. Photographs by
            <a href="https://www.flickr.com/photos/nasacommons/">GOD PLANET FOR HAITI</a>.</p>
        </div>
      </div>
    </div>
  </article> 
  <hr> 
  <!-- Footer -->
<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row d-flex flex-column justify-content-center">
						<ul class="footer-menu"> 
							<li><a href="#home">Home</a></li>
							<li><a href="#project">Projects</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#donate">Donate</a></li>
                            <li><a href="#contact">Contact Us</a></li>
						</ul>
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
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
