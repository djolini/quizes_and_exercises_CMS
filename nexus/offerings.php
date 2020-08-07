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
    <style media="screen">
    @import url("http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");

.panel-pricing {
-moz-transition: all .3s ease;
-o-transition: all .3s ease;
-webkit-transition: all .3s ease;
}
.panel-pricing:hover {
box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
}
.panel-pricing .panel-heading {
padding: 20px 10px;
}
.panel-pricing .panel-heading .fa {
margin-top: 10px;
font-size: 58px;
}
.panel-pricing .list-group-item {
color: #777777;
border-bottom: 1px solid rgba(250, 250, 250, 0.5);
}
.panel-pricing .list-group-item:last-child {
border-bottom-right-radius: 0px;
border-bottom-left-radius: 0px;
}
.panel-pricing .list-group-item:first-child {
border-top-right-radius: 0px;
border-top-left-radius: 0px;
}
.panel-pricing .panel-body {
background-color: #f0f0f0;
font-size: 40px;
color: #777777;
padding: 20px;
margin: 0px;
}
section {
	background-color: #efe;
  margin-bottom: 50px;
	border-radius: 20px;
	box-shadow: 200px;
	padding: 9px;
}
    </style>
	</head>
	<body>
		<div class="container">
		      <?php include 'navigation.php'; ?>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li><a href="quizes.php">Quiz</a></li>
				<li><a href="exercises.php">Exercises</a></li>
				<li style="border:1px dashed red;"><a href="recommendations.php">Free recommendations</a></li>
			</ul>
			<header>
          <h1>Our offerings are the best ever!</h1>
			</header>



<!-- Plans -->
<section id="plans">
    <div class="container">
        <div class="row">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
            <!-- item -->
            <div class="col-md-4 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <h3>Plan 1</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>Free</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> All categories of questions</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
                    </div>
                </div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!-- /item -->

            <!-- item -->
            <div class="col-md-4 text-center">
                <div class="panel panel-warning panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <h3>Plan 2</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$200 / Month</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-warning" href="#">BUY NOW!</a>
                    </div>
                </div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!-- /item -->

            <!-- item -->
            <div class="col-md-4 text-center">
                <div class="panel panel-success panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <h3>Plan 3</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$300 / Month</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
                    </div>
                </div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!-- /item -->

        </div>
    </div>
</section>
<!-- /Plans -->

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
