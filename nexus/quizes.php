<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "my_ltcode";


  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


	$stmt = $conn->prepare("SELECT question, first_answer, second_answer,third_answer,fourth_answer,answer FROM questions WHERE ID=1");
	$stmt->execute();

	if($stmt->rowCount() > 0){
	    // get retrieved row
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
	    // create array
	    $user_arr=array(
	        "question" => $row['question'],
	        "first_answer" => $row['first_answer'],
	        "second_answer" => $row['second_answer'],
	        "third_answer" => $row['third_answer'],
	        "fourth_answer" => $row['fourth_answer'],
	        "answer" => $row['answer']
	    );
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
					<h1>Quiz</h1>
				</div>

			</header>


<!--      here is the text     -->

<div class="text-center"> <br><br>

        <div id="message">
        </div>

      <form class="myForm" action="obrada3.php" method="post">
				<?php

				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

				$sql = "SELECT ID,question,first_answer,second_answer,third_answer,fourth_answer,answer FROM quiz WHERE ID<=10;" ;
				// prepare query statement
				$stmt = $conn->prepare($sql);

				$stmt->execute();

				//first i fetch the data from database and then i make radio inputs so that one quiz has onlyu one possible answer(using for loop)
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					for ($i=0; $i <=10 ; $i++) {
						// code...
					}
			?>


			<?php
			echo $row['question']; ?>
			<br>

			<input type='radio' name='<?php echo $i; ?>'><?php echo $row['first_answer'] ;?></input><br>
			<input type='radio' name='<?php echo $i; ?>'><?php echo $row['second_answer'] ;?></input><br>
			<input type='radio' name='<?php echo $i; ?>'><?php echo $row['third_answer']; ?></input><br>
			<input type='radio' name='<?php echo $i; ?>'><?php echo $row['fourth_answer']; ?></input><br>
			<hr>

					<?php
				}
				?>
				<button type="submit" name="submit" class="btn btn-success">Submit</button>
      </form>
</div>

<br/><br/><br/>

<br><br><br>


	     <?php include 'footer.php'; ?>

		</div><!-- /container -->

    <script>


    	$(document).ready(function() {
    		$(".myForm").submit(function(e) {
    			$("#message").empty();
    				e.preventDefault();

    				$.ajax({
    					url: 'obrada3.php',
    					type : 'POST',
    					data: $(".myForm").serialize(),

    					success: function(data){
    						//console.log(data);

    						let obj = JSON.parse(data);
    						if(obj.status==true) {
    							$("#message").append("<div class='alert alert-success'>" + obj.message+"</div>");

    						} else {
    							$("#message").append("<div class='alert alert-danger'>" + obj.message+"</div>");
    						}
    					}
    				})
    				})

    	})

    </script>
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
