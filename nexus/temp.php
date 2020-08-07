<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Nexus</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
		      <?php include 'navigation.php'; ?>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="#">Quiz</a></li>
				<li><a href="#">Exercises</a></li>
				<li><a href="#">Free recommendations</a></li>
			</ul>
			<header>
				<div class="text-center">
					<img class="shrink" src="e6a008538cc5231e547d683a596c2f4f.jpg" width="100" height="100" alt="">
				<h1>Become 10x better programmer<span>This is 21 century folks,you can learn anything for free </h1>
					<div class="button-container">
							<button class="glow-on-hover" type="button">Find out more</button>
							<i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>
					</div>

				</div>
				<hr>
			</header>


<!--      here is the text     -->


	     <?php include 'footer.php'; ?>

		</div><!-- /container -->

		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		<script>
		$('.quotes').slick({
dots: true,
infinite: true,
autoplay: true,
autoplaySpeed: 6000,
speed: 800,
slidesToShow: 1,
adaptiveHeight: true
});


/*
To prevent the flashing of unstyled content (FOUC) I created a class ".no-fouc"
which hides the slider.  When everything is ready to roll, I simply remove the
.no-fouc class from the slider section using the script below.  I placed the CSS snippet in the head of the HTML
page so that it's loaded before other things for obvious reasons.  What about folks with JS turned off?
Well, I don't worry about them too much anymore.  Oh my.  I feel the heat from the flames already.  :)
*/

$( document ).ready(function() {
$('.no-fouc').removeClass('no-fouc');
});
		</script>
	</body>
</html>
