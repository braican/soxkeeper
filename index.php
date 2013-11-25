<html>
<head>
	<title>SoxKeeper</title>
	
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

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
			
			<select name="sox_opponent" id="opponent" data-placeholder="opponent">
				<option value=""></option>
				<option value="Arizona Diamondbacks">Arizona Diamondbacks</option>
				<option value="Atlanta Braves">Atlanta Braves</option>
				<option value="Baltimore Orioles">Baltimore Orioles</option>
				<option value="Chicago Cubs">Chicago Cubs</option>
				<option value="Chicago White Sox">Chicago White Sox</option>
				<option value="Cincinnati Reds">Cincinnati Reds</option>
				<option value="Cleveland Indians">Cleveland Indians</option>
				<option value="Colorado Rockies">Colorado Rockies</option>
				<option value="Detroit Tigers">Detroit Tigers</option>
				<option value="Houston Astros">Houston Astros</option>
				<option value="Kansas City Royals">Kansas City Royals</option>
				<option value="Los Angeles Angels of Anaheim">Los Angeles Angels of Anaheim</option>
				<option value="Los Angeles Dodgers">Los Angeles Dodgers</option>
				<option value="Miami Marlins">Miami Marlins</option>
				<option value="Milwaukee Brewers">Milwaukee Brewers</option>
				<option value="Minnesota Twins">Minnesota Twins</option>
				<option value="New York Mets">New York Mets</option>
				<option value="New York Yankees">New York Yankees</option>
				<option value="Oakland Athletics">Oakland Athletics</option>
				<option value="Philadelphia Phillies">Philadelphia Phillies</option>
				<option value="Pittsburgh Pirates">Pittsburgh Pirates</option>
				<option value="San Diego Padres">San Diego Padres</option>
				<option value="San Francisco Giants">San Francisco Giants</option>
				<option value="Seattle Mariners">Seattle Mariners</option>
				<option value="St. Louis Cardinals">St. Louis Cardinals</option>
				<option value="Tampa Bay Rays">Tampa Bay Rays</option>
				<option value="Texas Rangers">Texas Rangers</option>
				<option value="Toronto Blue Jays">Toronto Blue Jays</option>
				<option value="Washington Nationals">Washington Nationals</option>
					
			</select>
			<!-- <input type="text" name="sox_opponent" placeholder="opponent"><br> -->


			<fieldset>
				<input type="radio" name="win_loss" value="1" id="sox_win"><label for="sox_win">W</label>
				<input type="radio" name="win_loss" value="0" id="sox_loss"><label for="sox_loss">L</label>
			</fieldset>
			<input type="text" name="sox_score" placeholder="score" size="5"><br>
			
			<input type="text" name="sox_pitcher" placeholder="Red Sox pitcher">
			<input type="text" name="sox_opposing_pitcher" placeholder="opposing pitcher"><br>

			<textarea name="game_notes" id="" cols="30" rows="10"></textarea>
			<input type="submit" value="Submit"></input>
		</form>

		<div class="success-text"></div>
</div>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/soxkeeper.js"></script>

</body>
</html>
