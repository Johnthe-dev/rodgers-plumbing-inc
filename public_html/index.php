<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
			integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>

	<!-- LINK YOUR CSS FILES DOWN HERE -->
<link rel="stylesheet" href="styles.css">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
			  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
			  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
			  crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
			  crossorigin="anonymous"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="public_html/js/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!--title-->
	<title>Rodgers Plumbing and Heating</title>
</head>
<body class="pb-3">
<!--for desktop/tablets-->
<div class="container-fluid d-none d-md-block" id="top">
	<div class="row" id="box-search">
		<div class="thumbnail text-center">
			<img src="../pictures/Photo-2.jpg" alt="picture of front of Rodgers Plumbing and Heating's building in the South Valley" class="img-responsive">
			<div class="caption">
				<h1>Rodgers Plumbing and Heating</h1>
				<em>Serving New Mexico's Plumbing Needs Since 1973</em>
			</div>
		</div>
	</div>
</div>


<!--todo make navbar sticky move to header?-->
<nav class="navbar navbar-expand-lg navbar-light justify-content-between sticky-top" id="navBar">
	<a class="navbar-brand" href="#top">
		<img src="http://rphi.biz/images/rphi001002.png" alt="logo for Rodgers Plumbing and Heating">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="#about">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#services">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact">Contact</a>
			</li>
		</ul>
	</div>
</nav>
<!-- for mobile-->
<div class="container-fluid d-md-none" id="top">
	<div class="row" id="box-search">
		<div class="thumbnail text-center">
			<h1 id="title">Rodgers Plumbing and Heating</h1>
			<img src="../pictures/Photo-2.jpg" alt="picture of front of Rodgers Plumbing and Heating's building in the South Valley" class="img-responsive">
			<em>Serving New Mexico's Plumbing Needs Since 1973</em>
		</div>
	</div>
</div>

<div class="container d-flex" id="about">
	<div class="row align-items-center py-5">
		<div class="col-md-6 pb-2">
			<img src="../pictures/picture-of-jay.jpg" alt="Picture of co-owner of Rodgers Plumbing and Heating, Jay Rodgers" class="img-responsive mw-100">
		</div>
		<div class="col-md-6">
			<p>We are a locally owned and operated plumbing and heating company serving Albuquerque, Santa Fe and the rest
				of the great state of New Mexico. We complete projects ranging from small home repair to large hospital
				construction sites. Consider using Rodgers Plumbing and Heating for your next Plumbing project, large or
				small.</p>
		</div>
	</div>
</div>
<div class="container d-flex">
	<div class="row align-items-center py-5">
		<div class="col d-md-none pb-2">
			<img src="../pictures/jamar-penny-ZgmGq_eFmUs-unsplash.jpg" alt="picture of Excavator" class="img-responsive mw-100">
		</div>
		<div class="col-md-6">
			<p>Rodgers Plumbing and Heating was founded in 1973 by life-long Albuquerque native Jim Rodgers. Since then,
				Rodgers Plumbing and Heating has grown as a diverse, community oriented plumbing company. We participate in
				many local apprenticeship programs and train our workers to be professional, safe, and hard working. We have
				proudly served New Mexico with high quality, competitively priced plumbing services for over forty years and
				hope to continue to do so for many more.</p>
		</div>
		<div class="d-none d-md-block col-md-6 pb-2">
			<img src="../pictures/jamar-penny-ZgmGq_eFmUs-unsplash.jpg" alt="picture of Excavator" class="img-responsive mw-100">
		</div>
	</div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	</ol>
	<div class="carousel-inner" id="services">
		<div class="carousel-item active">
			<img class="d-block w-100" src="../pictures/randy-fath-ymf4_9Y9S_A-unsplash.jpg" alt="First slide" class="img-responsive">
			<div class="carousel-caption d-none d-lg-block" id="caption">
				<h5>Services We Provide</h5>
				<p>Rodgers Plumbing and Heating offers a variety of services to our customers.</p>
			</div>
			<div class="d-lg-none" id="caption-md">
				<h5>Services We Provide</h5>
				<p>Rodgers Plumbing and Heating offers a variety of services to our customers.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="../pictures/leo-fosdal-TgWWeaTAXCM-unsplash.jpg" alt="Second slide" class="img-responsive">
			<div class="carousel-caption d-none d-lg-block" id="caption">
				<h5>Utility Piping</h5>
				<p>We offer installation services for gas piping, water piping, and sewer piping. We are licensed to work
					on utility lines from the street to your home or business.</p>
			</div>
			<div class="d-lg-none" id="caption-md">
				<h5>Utility Piping</h5>
				<p>We offer installation services for gas piping, water piping, and sewer piping. We are licensed to work
					on utility lines from the street to your home or business.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="../pictures/sasikan-ulevik-8jQC5RHWuSE-unsplash.jpg" alt="Third slide" class="img-responsive">
			<div class="carousel-caption d-none d-lg-block" id="caption">
				<h5>Fixture Installation/Repair</h5>
				<p>We install toilets, sinks, bathtubs, garbage disposals, radiant heating, swamp coolers... If you need
					it installed and it requires gas or water we will probably have you covered!</p>
			</div>
			<div class="d-lg-none" id="caption-md">
				<h5>Fixture Installation/Repair</h5>
				<p>We install toilets, sinks, bathtubs, garbage disposals, radiant heating, swamp coolers... If you need
					it installed and it requires gas or water we will probably have you covered!</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="../pictures/daniel-mccullough-HtBlQdxfG9k-unsplash.jpg" alt="Fourth slide" class="img-responsive">
			<div class="carousel-caption d-none d-lg-block" id="caption">
				<h5>Large Construction</h5>
				<p>We do ground up construction work from Santa Fe to Las Cruces. We have worked hard over tha last forty
					years to become one of the most competitive plumbing subcontractors around. contact us if you need a
					price from our estimators for your next construction project!</p>
			</div>
			<div class="d-lg-none" id="caption-md">
				<h5>Large Construction</h5>
				<p>We do ground up construction work from Santa Fe to Las Cruces. We have worked hard over tha last forty
					years to become one of the most competitive plumbing subcontractors around. contact us if you need a
					price from our estimators for your next construction project!</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="../pictures/henry-co-3coKbdfnAFg-unsplash.jpg" alt="Fifth slide" class="img-responsive">
			<div class="carousel-caption d-none d-lg-block" id="caption">
				<h5>Service Work</h5>
				<p>We also have commercial and residential repair and troubleshooting available! Call us for scheduling
					and pricing information!</p>
			</div>
			<div class="d-lg-none" id="caption-md">
				<h5>Service Work</h5>
				<p>We also have commercial and residential repair and troubleshooting available! Call us for scheduling
					and pricing information!</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev d-none d-md-block" href="#carouselExampleIndicators" role="button" data-slide="prev" id="previous">
		<span class="carousel-control-prev-icon rounded" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next d-none d-md-block" href="#carouselExampleIndicators" role="button" data-slide="next" id="next">
		<span class="carousel-control-next-icon rounded" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- add in bootstrap form-->
<footer class="container-fluid " id="contact">
	<div class="row py-5 d-flex justify-content-around">


		<div class="col-md-6">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.043400548775!2d-106.66014908466121!3d35.005618680357344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87220e998260bb93%3A0xa22064ae417f851f!2s5105%20William%20St%20SE%2C%20Albuquerque%2C%20NM%2087105!5e0!3m2!1sen!2sus!4v1573443477953!5m2!1sen!2sus"
				width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col-md-5 py-4">
			<form id="johns-form" name="johns-form" action="../php/" method="post">
				<div class="form-group">
					<label for="name">Name <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email Address<span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject"
								 placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message"
									 placeholder="(2000 characters max)"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6LewKsIUAAAAAEurxqpHO3Cyt0nDVEZXG3wwV4Sx"></div>

				<button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>
		</div>
		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
