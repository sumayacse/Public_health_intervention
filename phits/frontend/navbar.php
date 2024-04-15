<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHITS Homepage</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- font awesome -->
	 <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
	 <!-- Custom css-->
	 <link href="assets/navbar.css" rel="stylesheet">
</head>


<body>
	<!--navbar-->
	<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">PHITS</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="card.php">Intervention</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
</header>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="img/headerimage2.jpg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/headerimage2.jpg">
                <div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">Vaccination</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>

			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/headerimage2.jpg">
                <div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">Vaccination</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>
				
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
	
	<!--content-->
   <div class="content">
         <?php include('card.php')?> 
	</div>


	<!--footer-->
	<div class="footer">
         <?php include('footer.php')?> 
	</div>

	
	
	
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
</body>
</html>
