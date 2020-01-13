
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="../css/style.css">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Nothing+You+Could+Do|Poppins&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  	<script src='https://kit.fontawesome.com/a076d05399.js'></script>


<style>
	

	.paragraph{
		margin: 70px auto;
	}
	.discription{
		font-size: 25px;
    	text-align: center;
    	font-family: poppins,Arial,sans-serif;
	}
	.img img{
		width: 100%;
	}
	.img{
		margin-top: 80px;
	}
	.img_title{
		font-size: 19px;
		margin-top: 30px;
	}
	.img_discription{
		font-family: poppins,Arial,sans-serif;
	}
	.bold{
		font-size: 20px;

	}
	.img_container{
		margin-bottom: 70px;
	}
	.link_p2{
		margin-top: 20px;
		font-size: 18px;
	}
	.link_p2 a{
		color: black;
    	text-decoration: none;
	}

	@media only screen and (max-width: 767px){
		.img_discription{
			margin-top: 20px;
		}
	}
</style>
</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark">
	<div class="container">

		<a class="navbar-brand" href="../index.php">
			<!-- <p>SARA BEN TEMESSEK</p> -->
			<img src="../images/logo.png">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
	    	<ul class="navbar-nav ml-auto">
	    		<li class="nav-item">
	        		<a class="nav-link" href="../index.php">Home</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="../index.php#about">About Me</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="../index.php#work">Portfolio</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="../index.php#contact">Contact Me</a>
	      		</li>   
	      		<li class="nav-item">
	        		<a class="nav-link" href="../cv.php">CV</a>
	      		</li> 
	    	</ul>
	  	</div>  
	</div>
</nav>
<div class="container paragraph">

	<div class="row">
		<div class="col-md-12">
			<p class="discription">Using Processing, I created a generated pattern from five basic shapes. I then proceeded to play with the grid and create specific layouts with those random generated colored shapes.</p>
		</div>		
	</div>
	
</div>
<div class="container img_container">
	<div class="row">

		<div class="col-md-6 img">
			<img src="../images/GenerativeArt2.png">

		</div>
		<div class="col-md-6 img bold">
			<p>After generating a simple grid of 18 by 18,<br> I experimented more with the layout</p>

			<p class="link_p2"><a href="https://github.com/Spadinuh/Grid">https://github.com/Spadinuh/Grid</a></p>
		</div>



		<div class="col-md-6 img">
			<img src="../images/GenerativeArt4.png">
			<div class="img_title img_discription"><p>This kind of layout would be perfect for a quilt.</p></div>

			<p class="link_p2"><a href="https://github.com/Spadinuh/Quilt">https://github.com/Spadinuh/Quilt</a></p>
		</div>
		<div class="col-md-6 img">
			<img src="../images/GenerativeArt5.png">
			<div class="img_title img_discription"><p>By tracing the shape of a ballerina on Illustrator and with the rest of the image being transparent, once I imported that file in Processing the shapes were only able to place themselves randomly on the ballerina shape.</p></div>
		</div>

		<div class="col-md-6 img">
		</div>
		<div class="col-md-6 img">
			<img src="../images/GenerativeArt3.png">
			<div class="img_title img_discription"><p>From my basic grid I imported it into Illustrator and played with it to use it for a skateboard  design.</p></div>
		</div>
		<div class="col-md-6 img">
			<img src="../images/GenerativeArt1.png">
			<div class="img_title img_discription"><p>I made a poster with the ballerina shape for a dance show.</p></div>

			<p class="link_p2"><a href="https://github.com/Spadinuh/Dancer"> https://github.com/Spadinuh/Dancer</a></p>
		</div>
		
	</div>
</div>






<div class="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-5">
				<div class="footer_1_text_conatiner">
					<h1>ABOUT ME</h1>
					<p>As an avid learner and active member in my communities, I am interested in the pluridisciplinarity of art and technology. The creativity side of this program entices me with its concrete application in the real world through science.</p>
				</div>
				<div class="row icon_row">
					<div class="col-md-4">
						<a href="https://www.linkedin.com/in/sara-b-1397ba106/" target="_blank">
							<div class="icon_container">
								<i class='fab fa-linkedin-in'></i>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="https://www.facebook.com/sara.bentemessek" target="_blank">
							<div class="icon_container">
								<i class='fab fa-facebook-f'></i>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="https://www.instagram.com/shams.bt/" target="_blank">
							<div class="icon_container">
								<i class='fab fa-instagram'></i>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-2 service">
				<div class="footer_2_text_conatiner">
					
				</div>
			</div>
			<div class="col-md-5 ">
				<div class="footer_3_text_conatiner">
					<h1>HAVE A QUESTION?</h1>
					<ul>
						<li>
							<i class='fas fa-map-marker-alt'></i><span>481 andras, Montreal, Quebec, Canada</span>
						</li>
						<li>
							<i class='fas fa-phone'></i><span>514-550-6234</span>
						</li>
						<li>
							<i class="material-icons">email</i><span class="mail_text">Sara.btemessek@gmail.com</span>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-12 copyright">
				<p>©2020 by Sara Ben Temessek.</p>
			</div>
		</div>


	</div>
	
</div> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>


</body>
</html>