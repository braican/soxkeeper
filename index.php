<html>
<head>
	<title>SoxKeeper</title>

	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
	
	<h1>SoxKeeper</h1>
	<div class="project-list">
		
	</div>

		<form action="util/add_game.php" method="post">
			<input type="date" name="sox_date" value="2011-09-26"></input>
			<fieldset>
				<label for="sox_home">Home</label><input type="radio" name="home_away" value="home" id="sox_home">
				<label for="sox_away">Away</label><input type="radio" name="home_away" value="away" id="sox_away">
			</fieldset>
			<input type="text" name="sox_opponent" placeholder="opponenet">
			<fieldset>
				<label for="sox_win">Win</label><input type="radio" name="win_loss" value="win" id="sox_home">
				<label for="sox_loss">Loss</label><input type="radio" name="win_loss" value="loss" id="sox_loss">
			</fieldset>
			<input type="text" name="sox_score" placeholder="score">
			<input type="text" name="sox_pitcher" placeholder="Red Sox pitcher">
			<input type="text" name="sox_opponent_pitcher" placeholder="opponent pitcher">
			<input type="submit" value="Submit"></input>
		</form>

		<div class="success-text"></div>
</div>
<script type="text/javascript">
	$('form').on('submit', function(e){
	    e.preventDefault();
	    $.ajax({
	        type     : "POST",
	        cache    : false,
	        url      : $(this).attr('action'),
	        data	 : $(this).serialize(),
	        success  : function(data) {
	        	console.log(data);

	            $(".success-text").empty().html(data).animate({opacity:1});
	            setTimeout(function(){
	            	$(".success-text").animate({opacity:0});
	            }, 5000);
	            $(".project-list").load("util/project-list.php");
	        }
	    });

		$('form input[type=text]').val('');
	});
</script>

</body>
</html>
