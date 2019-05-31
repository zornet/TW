<?php

require 'database.php';

if(!empty($_GET['id']))
{

	$records = $conn->prepare('SELECT * FROM song WHERE id = :id');
	$records->bindParam(':id', $_GET['id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
  if ($results!=null)
  echo (json_encode($results));
  else {
    echo "Nu ai introdus un ID valid";
  }
	}



 ?>
