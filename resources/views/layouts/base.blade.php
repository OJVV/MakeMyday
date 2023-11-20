

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MakeMyDay &mdash;SRC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TEMPLATE" />
	<meta name="keywords" content="TEMPLATE" />
	<meta name="author" content="ORLANDO" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('assets/css/superfish.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
	@stack('styles')


	<!-- Modernizr JS -->
	<script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<header id="fh5co-header" role="banner">
         <div class="flex flex-col justify-center items-center">
              <div id="fh5co-logo">
                <a href="{{Route('home')}}"><img src="assets/images/logo.png" alt="logo" class="bg-center"></a> 
            </div>
          <nav>
            <ul>
                <li><a href="{{Route('about')}}">Nosotros</a></li>       
                <li><a href="{{Route('work')}}">Galería</a></li>   
                <li><a href="{{Route('contact')}}">Contáctanos</a></li>     
                <li><a href="https://www.instagram.com/makemyday__hn/?igshid=MTk0NTkyODZkYg%3D%3D">Instagram</a></li>        
            </ul>   
          </nav>
        </div>
          
    </header>
		<!-- END #fh5co-header -->


		{{$slot}}
		<!-- END .container-fluid -->

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container-fluid">
				<div class="footer-content">
					<div class="copyright"><small>&copy;  All Rights Reserved.</small></div>
					<div class="social">
						<a href="https://wa.link/qfdz64" class="square w-6 h-6 fill-current">
							<i class="icon-whatsapp"></i>
						</a>
						<a href="https://www.instagram.com/makemyday__hn/?igshid=MTk0NTkyODZkYg%3D%3D"><i class="icon-instagram2"></i></a>
						
					</div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
		
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- masonry -->
	<script src="{{asset('assets/js/jquery.masonry.min.js')}}"></script>
	<!-- MAIN JS -->
	<script src="{{asset('assets/js/main.js')}}"></script>
    @livewireScripts
	@stack('scripts')

	</body>
</html>

