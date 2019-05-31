<?php

require 'database.php';

if(!empty($_POST['artist']) && !empty($_POST['track']) && !empty($_POST['link']))
{

  $sql = $conn->prepare('INSERT INTO song VALUES (id, :artist, :track, :link)');
  $sql->bindParam(':artist', $_POST['artist']);
  $sql->bindParam(':track', $_POST['track']);
  $sql->bindParam(':link', $_POST['link']);


	if( $sql->execute())
		$message = 'Ai reusit ba';
	else
		$message = 'Mai incearca boss';
  echo $message;
}

 ?>
