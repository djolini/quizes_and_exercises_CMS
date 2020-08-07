<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "my_ltcode";


  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$stmt = $conn->prepare("SELECT ID,question,text_infront,text_behind,answer FROM exercises WHERE ID<10");
	$stmt->execute();

	if($stmt->rowCount() > 0){
	    // get retrieved row
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
	    // create array
	    $user_arr=array(
					"ID" => $row['ID'],
	        "question" => $row['question'],
	        "text_infront" => $row['text_infront'],
	        "text_behind" => $row['text_behind'],
	        "answer" => $row['answer']
	    );
			$answer = strlen($row['answer']);
	}else {
		echo "no results for this exercise search";
	}

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
				<div class="text-center">
					<h1>Exercises</h1>
				</div>
			</header>

<!--      here is the text     -->

<?php

?>

<!--   -->
<div class="text-center"> <br><br>
	 <div><span id="time"></span></div> <br>
        <div id="message">
        </div>

      <form class="myForm" action="../admin/exercises_results.php" method="post">
				<?php

					$stmt = $conn->prepare("SELECT * FROM exercises WHERE ID<20");
					$stmt->execute();

					//gets the size of answer so the user will know..2
					$answer = strlen($row['answer']);


				//first i fetch the data from database and then i make radio inputs so that one quiz has onlyu one possible answer(using for loop)
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					echo "QN:<b> ". "".$row['ID']."</b>"." ".$row['question']."<br><br>";
					echo $row['text_infront']."<input type='text'></input>". $row['text_behind'] ."<br>";
					echo "<hr>";
					?>


				<?php } ?>
        <button id="btn" type="submit" class="btn btn-success" name="submit">Submit answer</button>  <br><br>

      </form>
</div>


	     <?php include 'footer.php'; ?>

		</div><!-- /container -->



		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		<script type="text/javascript">
		function startTimer(duration, display) {
	var start = Date.now(),
			diff,
			minutes,
			seconds;
	function timer() {
			// get the number of seconds that have elapsed since
			// startTimer() was called
			diff = duration - (((Date.now() - start) / 1000) | 0);

			// does the same job as parseInt truncates the float
			minutes = (diff / 60) | 0;
			seconds = (diff % 60) | 0;

			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.textContent = minutes + ":" + seconds;

			if (diff <= 0) {
					// add one second so that the count down starts at the full duration
					// example 05:00 not 04:59
					start = Date.now() + 1000;
			}
	};
	// we don't want to wait a full second before the timer starts
	timer();
	setInterval(timer, 1000);
}

window.onload = function () {
	var fiveMinutes = 60 * 5,
			display = document.querySelector('#time');
	startTimer(fiveMinutes, display);
};
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
