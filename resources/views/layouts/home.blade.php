<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ATKO.UZ</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://crm-atko.uz/online/css/animate.css">
		<link rel="stylesheet" href="https://crm-atko.uz/online/css/owl.carousel.min.css">
		<link rel="stylesheet" href="https://crm-atko.uz/online/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://crm-atko.uz/online/css/magnific-popup.css">
		<link rel="stylesheet" href="https://crm-atko.uz/online/css/flaticon.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
		<link rel="stylesheet" href="https://crm-atko.uz/online/css/style.css">
		
	</head>
<body>

  	<div class="container-fluid px-md-5  pt-4 pt-md-5">
		<div class="row justify-content-between">
			<div class="col-md-8 order-md-last">
				<div class="row">
					<div class="col-md-6 text-center">
						<a class="navbar-brand" href="{{ route('index') }}"><span>ATKO</span> KOREYS  <small>Til markazi</small></a>
					</div>
					<div class="col-md-6 d-md-flex justify-content-center d-lg-block d-none">
						<div style=" text-align:right">
							<p class="mb-0 pt-2 text-danger">
								<span class="fa fa-phone text-primary"><i class="sr-only">Telegram</i></span>
								91 950 1101
								<span class="fa fa-envelope text-primary"><i class="sr-only">Telegram</i></span>
								atkoteams@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ">
				<div class="social-media">
					<p class="mb-0 d-flex">
						<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-telegram text-primary"><i class="sr-only">Telegram</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook text-primary"><i class="sr-only">Facebook</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram text-primary"><i class="sr-only">Instagram</i></span></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Bosh sahifa</a></li>
					<li class="nav-item"><a href="cours.html" class="nav-link">Online kurslar</a></li>
					<li class="nav-item"><a href="book.html" class="nav-link">Kitoblar</a></li>
					<li class="nav-item"><a href="author.html" class="nav-link">O'qituvchilar</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Bog'lanish</a></li>
					@guest
						<li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><i class="bi bi-person"></i>Kirish</a></li>
					@else
						<li class="nav-item"><a href="{{ route('profel') }}" class="nav-link"><i class="bi bi-person-add"></i>kabinet</a></li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
    


	@yield('content')



    <footer class="ftco-footer p-0 m-0">
		<div class="container-fluid px-0 py-5 bg-black text-center">
			ATKO koreys tili markazi &copy;<script>document.write(new Date().getFullYear());</script>
		</div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="https://crm-atko.uz/online/js/jquery.min.js"></script>
  <script src="https://crm-atko.uz/online/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="https://crm-atko.uz/online/js/popper.min.js"></script>
  <script src="https://crm-atko.uz/online/js/bootstrap.min.js"></script>
  <script src="https://crm-atko.uz/online/js/jquery.easing.1.3.js"></script>
  <script src="https://crm-atko.uz/online/js/jquery.waypoints.min.js"></script>
  <script src="https://crm-atko.uz/online/js/jquery.stellar.min.js"></script>
  <script src="https://crm-atko.uz/online/js/owl.carousel.min.js"></script>
  <script src="https://crm-atko.uz/online/js/jquery.magnific-popup.min.js"></script>
  <script src="https://crm-atko.uz/online/js/jquery.animateNumber.min.js"></script>
  <script src="https://crm-atko.uz/online/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="https://crm-atko.uz/online/js/google-map.js"></script>
  <script src="https://crm-atko.uz/online/js/main.js"></script>
    
  </body>
</html>