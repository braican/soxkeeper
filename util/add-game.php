<?php 
	require_once("db_util.php");

	$sox_date = $_POST['sox_date'];
	$sox_home_away = $_POST['home_away'];
	$sox_opponent = $_POST['sox_opponent'];
	$sox_win_loss = $_POST['win_loss'];
	$sox_score = $_POST['sox_score'];
	$sox_pitcher = $_POST['sox_pitcher'];
	$sox_opposing_pitcher = $_POST['sox_opposing_pitcher'];

	//connect to database
	$db = dbconnect();

	// 	//clean up the input for mysql
	//  	$new_project = $db->real_escape_string($new_project);

	//  	// check if the potential project exists in the database
	//  	$sql = "SELECT COUNT( * ) FROM  `projects` WHERE  `project` =  '" . $new_project . "'";
	//  	//$sql = "SELECT * FROM  `projects`";
	//  	$result = $db->query($sql);
	// 	$row = $result->fetch_row();
	// 	if($row[0] > 0){
	// 		die('no dice, already a project with that name');
	// 	}

	//add the game to the games database
	$sql =	"INSERT INTO `games`(`date`, `home_away` , `opponent`, `win_loss`, `score`, `sox_pitcher`, `opposing_pitcher`) VALUES ('" .
		$sox_date . "', '" .
		$sox_home_away . "', '" .
		$sox_opponent . "', '" .
		$sox_win_loss . "', '" .
		$sox_score . "', '" .
		$sox_pitcher . "', '" .
		$sox_opposing_pitcher .
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