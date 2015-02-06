<html>
<head>
	<title>Whackamole</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {	
			background-image: url(/img/pink_background.jpg);
			background-size: 1500px;
			cursor: url(/img/flower_pink_orchid.png),default;
		}

		.h2 {
			color: #7C00A6;
		}

		.button_color {
			color: white;
			background-color: #9900CC;
		}

		.score_box {
			height: 100px;
			width: 100px;
			border: 2px solid white;
			color: white;
			font-family: fantasy;
			font-size: 75px;
			text-align: center;
		}

		.container_color {
			height: 700px; 
			margin:10px;
			border: 2px solid black;
			background-color: #009999;
		}

		.container1 {
			width: 10%; 
			float:left;
		}

		.container2 {
			width: 85%; 
			float:right;
		}

		.box_size {
			height: 175px;
			width: 175px;
			margin: 5px;
			border: 2px solid black;
			padding: 10px;
		}

		.box_color {
			margin-left: 90px;
			background-color: #9900CC;
			float: left;
			color: white;
		}

		.flower {
			background-color: #CC0000;
			background-image: url("/img/red_flower.jpg");
			background-size: 195px;
			background-repeat: no-repeat;
		}
	</style>
</head>

<body> 

	<div class = "container_color container1">
		<button class = "button_color">Your Score:</button>
		<div class = "score_box">0</div>
		<h1 class = "h2">Click the flower and score points.</h1>
	</div>
	<!-- Adding sound -->
	<audio>
		<source src = ""></source>
	</audio>

	<div id = "container" class = "container_color container2">		
		<!--1-->
		<div class = "box_size box_color">
			<h1>Psychotria Elatra</h1>
		</div>

		<!--2-->
		<div class = "box_size box_color">
			<p>This weird plant might look like the work of photo editing software, but I can assure you those kissable lips are all natural.</p>
		</div>

		<!--3-->
		<div class = "box_size box_color">
			<p>Found in the tropical rain forests of Central and South American countries like Colombia, Costa Rica, <strong>Panama</strong> and Ecuador.</p>
		</div>

		<!--4-->
		<div class = "box_size box_color">
			<p>The <strong>Psychotria Elatra</strong> plant has apparently evolved into its current shape to attract pollinators including hummingbirds and butterflies.</p>
		</div>

		<!--5-->
		<div class = "box_size box_color">
			<h1>Psychotria Elatra</h1>
		</div>

		<!--6-->
		<div class = "box_size box_color">
			<p>This extraordinary flower has unfortunately become endangered due to uncontrolled deforestation in the above-mentioned countries. </p>
		</div>

		<!--7-->
		<div class = "box_size box_color">
			<p>So if you’ve ever wanted to plant a kiss on Mother Nature, find yourself a Hot Lips plant and do it while you still can. </p>
		</div>

		<!--8-->
		<div class = "box_size box_color">
			<p>The bracts are only kissable for a short while, before they spread open to reveal the plant’s flowers.</p>
		</div>

		<!--9-->
		<div class = "box_size box_color">
			<h1>Psychotria Elatra</h1>
		</div>
	</div>


	<script src="/jquery/jquery.min.js"></script>
	<script type = "text/javascript">
		$('document').ready(function() {
			var counter = 0;
			$(".box_size").click(function(event) {				
	        	event.preventDefault();	        	
	            var addPoint = $(this).hasClass('flower');
	            $(this).removeClass('flower');
				if (addPoint) {
				counter++;
				$('.score_box').text(counter);
				}
				var audio = $('')[0];
				audio.play();
	        });
	    });
    	function getRandomInt() {
		  return Math.floor(Math.random() * (9));
		}
		
		setInterval (function () {
			var random = getRandomInt();
			var array = $("#container").children();
			$(array[random]).addClass('flower');
			setInterval (function () {
				$(array[random]).removeClass('flower');
			},3000);

		},1000);
    </script>
    <script src = "/js/moment.js"></script>
</body>
</html>