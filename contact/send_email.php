<?php

    require_once "connection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stm = $pdo->prepare('INSERT INTO companies_contact (name,email,message) VALUES (:name,:email,:message)');
	$stm->bindValue(':name', $name);
	$stm->bindValue(':email', $email);
	$stm->bindValue(':message', $message);
	$stm->execute();

    if($stm->rowCount()>=1){
		echo ('Data inserted succesfully');
	}else{
		echo ('Failed inserting data');
	}
    $pdo = null;