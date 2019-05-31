<?php

require 'database.php';

if(!empty($_POST['id']))
{

	$records = $conn->prepare('DELETE FROM song WHERE id = :id');
	$records->bindParam(':id', $_POST['id']);
  if($records->execute())
  echo "Gata";
  else
  echo "Nu a mers boss";
	}



 ?>
