<?php
include'Connection.php';

<div class="col-lg-6 contact-right">
							<form class="booking-form" id="myForm" name="myForm" action="sendMail.php" method="post">
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
											<button class="submit-btn primary-btn mt-20 text-uppercase" type="submit">Send Message<span class="lnr lnr-arrow-right" ></span></button>
										</div>
                                        
										<div class="alert-msg"></div>
									</div>
					  		</form>               
						</div>
                   