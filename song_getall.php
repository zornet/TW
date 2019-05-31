<?php

require 'database.php';

	$records = $conn->prepare('SELECT * FROM song');
	$records->execute();
	$results = $records->fetchALL(PDO::FETCH_ASSOC);

foreach ($results as $songs)
{

	echo json_encode($songs["id"]);
	echo " ";
	echo json_encode($songs["artist"]);
	echo " ";
	echo json_encode($songs["track"]);
	echo " ";
	echo json_encode($songs["link"]);
	echo "</br>";
}



 ?>
