<?php

require 'database.php';

if(!empty($_POST['id']) && !empty($_POST['artist']) && !empty($_POST['track']) && !empty($_POST['link']))
{
  $sql = $conn->prepare('UPDATE song SET artist=:artist,track=:track,link=:link where id=:id');
  $sql->bindParam(':id', $_POST['id']);
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
