<?php 

	require_once("db_util.php");
	$db = dbconnect();

	// create the table
	$create_table_sql =	'CREATE TABLE IF NOT EXISTS `games`(
							`game_id` bigint(20) NOT NULL AUTO_INCREMENT,
							`date` date NOT NULL,
							`home_away` tinyint(1) NOT NULL,
							`opponent` text NOT NULL,
							`win_loss` tinyint(1) NOT NULL,
							`score` text NOT NULL,
							`sox_pitcher` text,
							`opposing_pitcher` text,
							`game_notes` text,
							PRIMARY KEY (`game_id`)
						)';
	if(!$result = $db->query($create_table_sql)){
		die('There was an error running the add table query in game-list [' . $db->error . ']');
	}

	
	$sql = "SELECT * FROM `games`";
	if(!$result = $db->query($sql)){
		die('There was an error running the query [' . $db->error . ']');
	}

	while($row = $result->fetch_assoc()){
		$date = $row['date'];
		$home_away = $row['home_away'] == 1 ? 'Home' : 'Away';
		$opponent = $row['opponent'];
		$win_loss = $row['win_loss'] == 1 ? 'W' : 'L';
		$score = $row['score'];
		$sox_pitcher = $row['sox_pitcher'];
		$opposing_pitcher = $row['opposing_pitcher'];
		
?>
	<div class="row clearfix">
		<div class="date"><?php echo $date; ?></div>
		<div class="home-away"><?php echo $home_away; ?></div>
		<div class="opponent"><?php echo $opponent; ?></div>
		<div class="win-loss"><?php echo $win_loss; ?></div>
		<div class="score"><?php echo $score; ?></div>
		<div class="sox-pitcher"><?php echo $sox_pitcher; ?></div>
		<div class="opposing-pitcher"><?php echo $opposing_pitcher; ?></div>
	</div>
	

<?php
	} 
	
	dbclose($result, $db);
?>