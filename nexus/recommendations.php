<?php

$servername = "localhost";
$username = "root";
$dbname = "my_ltcode";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM categories" ;
// prepare query statement
$stmt = $conn->prepare($sql);
//executes the statement
$stmt->execute();

 ?>

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
      main {
        background-color: #eee;
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
	       <h1>Our recommendations</h1>
			</header>

<!--      here is the text     -->
  <main style="padding:8px;">

    <div class="form-group">
			<label for="exampleFormControlSelect1">Select category</label>
			<select class="form-control" id="exampleFormControlSelect1">
					<?php
						 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
							 echo "<option>". $row["category"] . "</option>";
								}
						?>
		 </select> <br><br><br>
     <?php

     $sql = "SELECT * FROM recommendations";

     $stmt = $conn->prepare($sql);
     $stmt->execute();

     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $title= $row['title'];
        $content = $row['content'];
        echo "<h1>". $row['title'] ."</h1>";
        echo "<p>". $row['content'] ."</p>";
        echo "<hr>";
     }

      ?>

  </main>

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
