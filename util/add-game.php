<?php 
	require_once("db_util.php");

	$sox_date = $_POST['sox_date'];
	$sox_home_away = $_POST['home_away'];
	$sox_opponent = $_POST['sox_opponent'];
	$sox_win_loss = $_POST['win_loss'];
	$sox_score = $_POST['sox_score'];
	$sox_pitcher = $_POST['sox_pitcher'];
	$sox_opposing_pitcher = $_POST['sox_opposing_pitcher'];
	$game_notes = $_POST['game_notes'];

	//connect to database
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
							`opposing_pitcher`, text,
							`game_notes`, text,
							PRIMARY KEY (`game_id`)
						)';
	if(!$result = $db->query($create_table_sql)){
		die('There was an error running the add table query [' . $db->error . ']');
	}

	//add the game to the games database
	$sql =	"INSERT INTO `games`(`date`, `home_away` , `opponent`, `win_loss`, `score`, `sox_pitcher`, `opposing_pitcher`, `game_notes`) VALUES ('" .
		$sox_date . "', '" .
		$sox_home_away . "', '" .
		$sox_opponent . "', '" .
		$sox_win_loss . "', '" .
		$sox_score . "', '" .
		$sox_pitcher . "', '" .
		$sox_opposing_pitcher . "', '" .
		$game_notes .
		"')";

	//echo $sql;
	if(!$result = $db->query($sql)){
		die('There was an error running the query in add_project [' . $db->error . ']');
	}
	echo "<p>game on $sox_date vs. $sox_opponent added to the games database</p>";

	// 	// create the table
	// 	$sql = "CREATE TABLE " . $new_project . " (description TEXT, hrs DECIMAL(5,1), paid INT)";
	// 	if(!$result = $db->query($sql)){
	// 		die('There was an error running the query in add_project [' . $db->error . ']');
	// 	}
	// 	echo "<p>table $new_project created</p>";

	dbclose($result, $db);
	
?>