<html>
<head>
	<title>SoxKeeper</title>

	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="container">
	
	<h1>SoxKeeper</h1>
	<div class="game-list">
		<?php include("util/game-list.php"); ?>
	</div>
	
		<form action="util/add-game.php" method="post">
			<input type="date" name="sox_date" value="<?php echo date('Y-m-d'); ?>"></input>
			<fieldset>
				<input type="radio" name="home_away" value="1" id="sox_home"><label for="sox_home">H</label>
				<input type="radio" name="home_away" value="0" id="sox_away"><label for="sox_away">A</label>
			</fieldset>
			<input type="text" name="sox_opponent" placeholder="opponenet"><br>

			<fieldset>
				<input type="radio" name="win_loss" value="1" id="sox_win"><label for="sox_win">W</label>
				<input type="radio" name="win_loss" value="0" id="sox_loss"><label for="sox_loss">L</label>
			</fieldset>
			<input type="text" name="sox_score" placeholder="score" size="5"><br>
			
			<input type="text" name="sox_pitcher" placeholder="Red Sox pitcher">
			<input type="text" name="sox_opposing_pitcher" placeholder="opposing pitcher"><br>
			<input type="submit" value="Submit"></input>
		</form>

		<div class="success-text"></div>
</div>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
	            }, 10000);
	            $(".game-list").load("util/game-list.php");
	        }
	    });

		$('form input[type=text]').val('');

	});
</script>

</body>
</html>
