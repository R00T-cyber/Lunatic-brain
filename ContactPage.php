
<?php

include_once 'Header.php';

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>contact us</title>
	<link rel="stylesheet" type="text/css" href="ContactPage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
<div class="container container-fluid">


	<h3></h3>
	<div>
		

		<div>
			

		</div>
		<div>
			<p></p>
			<p></p>
			<p></p>
		</div>
	
		<div>
			
		</div>

	</div>
</div>


<section class="contact-page-section">
      <div class="container">
          <div class="sec-title">
              <div class="title">Contact Us</div>
                <h2>Let's Get in Touch.</h2>
            </div>
            <div class="inner-container">
              <div class="row clearfix">
                
                  <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                      <div class="inner-column">
                          
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                       
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="email" name="email" value="" placeholder="EMAIL" required>
                                        </div>
                                       
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <textarea name="message" placeholder="type your massage here"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <button type="submit" class="theme-btn btn-style-one">Send Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form-->
                            
                        </div>
                    </div>
                    
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                      <div class="inner-column">
                          <h2>Contact Info</h2>
                            <ul class="list-info">
                              <li><i class="fas fa-globe"></i>LunaticBrain.Inc</li>
                                <li><i class="far fa-envelope"></i>Lunaticbrainsa@gmail.com</li>
                                <li><i class="fas fa-phone"></i>+27 72 365 7579 <br> +27 84 825 5484</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow Us On: </li>
                                <li><a href="https://www.facebook.com/LunaticBrainClothing/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://mobile.twitter.com/therealtakatso"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/lunatic_brain_clothing/?hl=en"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


<?php

include_once 'Footer.php';

?>
    
</body>
</html>

