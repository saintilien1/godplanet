<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
		<title>God planet for Haiti</title>
        

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
           
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
            <link rel="stylesheet" href="css/grid-gallery.css">
        <style>
            .but{
                margin-top: -40%;
                margin-bottom: 35%;
            }
        </style>
		</head>
		<body>
			<!-- Start Header Area -->
<?php
include 'header.php';
?>
   			<!-- start banner Area -->
             
    
       <section class="masthead" id="home"> 
         
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/p4.JPG" alt="First slide">
                 <div class="carousel-caption d-none d-md-block">
                 <h4>God planet for Haiti</h4>
                 <p>Make a donation now you will may change lives forever.</p>
          </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/p5.JPG" alt="Second slide">
                 <div class="carousel-caption d-none d-md-block">
                   <h4>God planet for Haiti</h4>
                 <p>Education for brighter future.</p>
          </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/p6.JPG" alt="Third slide">
                 <div class="carousel-caption d-none d-md-block">
                  <h4>God planet for Haiti</h4>
                 <p>Help the one who need your help.</p>
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
 
<!--slide end--> 
  
 
			</section  >
			<!-- End banner Area -->

			<!-- Start callto Area -->
				<section class="callto-area relative but d-block w-100">
					<div class="container">
						<div class="row d-flex callto-wrap justify-content-between pt-10 pb-10">
							<h4 class="text-white">Please Help them and Donate now</h4>
							<a href="#donate" class="head-btn head-btn2 btn text-uppercase">Donate Now</a>
						</div>
					</div>
				</section>
			<!-- End callto Area --> 
			<!-- Start project Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>What we do</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row"> 
                        <?php     
                                 include"data/Connection.php";
                                     $description =  "";
                                     $title       =  "";
                                     $file        =  "";

                                  try{
                                    
                                    $stmt = $pdo->query("SELECT * FROM image_tb ORDER BY id DESC LIMIT 3");
                                    while ($row = $stmt->fetch()) {     
                                     $description =  $row["description"];
                                     $title       =  $row["title"];
                                     $file        =  $row["file"]; 
                                        if(strlen($description)>200 ){
                                           $description = substr_replace($row["description"], "...<a class=\"text-uppercase\" href=\"#\">read more</a>", 200);
                                        }else{
                                           $description= $row["description"];
                                        }
                                        
                                   ?>     
                            <div class="col-lg-4 col-md-4 project-wrap">
							<div class="single-project">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
                                        <?php  
                                        echo '<img width=945px heigth=720px class="content-image img-fluid d-block mx-auto" src="data:image/jpeg;base64,'.base64_encode(stripslashes($file)).'"/>';
                                        ?>
								  		  
								      	<div class="content-details fadeIn-bottom">
								      		<a href="#donate" class="head-btn btn text-uppercase">Donate Now</a>
								      	</div>
								    </a>
								 </div>
							</div>
							<div class="details">
								<a href="#"><h2><?php echo $title ?></h2></a>
                                 <?php echo $description ?>
						  		
							</div>
						</div>                            
                                <?php           
                                    }  
                                  }catch(PDOException $e){
                                    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
                                }
                              // Close connection
                                unset($pdo);
                                
                                //Output : Lorem Ipsum is simply dum [readmore...][1]
                                ?> 
					</div>
				</div>
			</section>
			<!-- End project Area -->

			<!-- Start about Area -->
			<section class="about-area" id="about">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right">
							<h1>A very Lovely Welcome <br>
							to our Company</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<button class="primary-btn mt-20 text-uppercase ">learn more<span class="lnr lnr-arrow-right"></span></button>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start volunteer Area --> 	 
            <?php
            include'grid/grid-gallery.php';
            ?> 
			<!-- End volunteer Area -->
            
			<!-- Start donate Area -->
			<section class="donate-area relative section-gap" id="contact"> 
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text">
							<h1>Contact us</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
								<h4>Divided Evenly</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
							<div class="single-info">
								<h4>Transperancy All the Way</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
							<div class="single-info">
								<h4>Trustworthy</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
						</div> 
						<div class="col-lg-6 contact-right">
							<form class="booking-form"  action="sendMail.php" method="post">
								 	<div class="row">  
                                        <div class="col-lg-12 d-flex flex-column">
											<input name="sujet" placeholder="The subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'"   class="form-control mt-20" required="" type="text"> 
										</div>   
							 			<div class="col-lg-6 d-flex flex-column">
											<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
										</div>
										<div class="col-lg-6 d-flex flex-column">
											<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email address'" class="form-control mt-20" required="" type="email">
										</div>
                                        <div class="col-lg-12 d-flex flex-column">
											<input name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'"   class="form-control mt-20" required="" type="text"> 
										</div> 
										<div class="col-lg-12 d-flex flex-column"> 
											<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div> 
										<div class="col-lg-12 d-flex  justify-content-end send-btn" >
											<input class="submit-btn primary-btn mt-20 text-uppercase lnr lnr-arrow-right" value="Send Message" type="submit">
										</div>
                                        
										<div class="alert-msg"></div>
									</div>
					  		</form>               
						</div>
					</div>
				</div>  
			</section>
			<!-- End donate Area --> 
         		<!-- Start donate Area -->
			<section class="relative section-gap" id="donate"> 
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text">
							<h1>Donate now</h1>
							<p>
								Be a part of the break through and make someones dream come true.
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
								<h4>Divided Evenly</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
							<div class="single-info">
								<h4>Transperancy All the Way</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
							<div class="single-info">
								<h4>Trustworthy</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
						</div> 
						<div class="col-lg-6 contact-right">
							<form class="booking-form" action="https://www.paypal.com/cgi-bin/webscr"  method="post">
								 	<div class="row">  
                                        <div class="col-lg-12 d-flex flex-column">
											  <!-- Identify your business so that you can collect the payments. -->
                                              <input type="hidden" name="business" value="Kervinsbeaujole@gmail.com">
										</div>   
							 			<div class="col-lg-6 d-flex flex-column">
											 <!-- Specify a Donate button. -->
                                               <input type="hidden" name="cmd" value="_donations">
										</div>
										<div class="col-lg-6 d-flex flex-column">
											  <!-- Specify details about the contribution -->
                                                  <input type="hidden" name="item_name" value="donate for the children">
                                                  <input type="hidden" name="currency_code" value="USD">
										</div> 	  
									   </div>
                                     <!-- Display the payment button. -->
                                          <input type="image" name="submit"
                                          src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"
                                         alt="Donate">
                                         <img alt="" width="1" height="1"
                                          src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
					  		</form>  
                             <p class="payment-method">
					     <img src="img/payment.png" alt="">           
				       </p>
						</div>  
					</div>
				</div> 
		</section>
              <?php
               include'footer.php';
                ?>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>

