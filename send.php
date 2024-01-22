<?php
$name=$_POST['name']
$pass=$_POST['pass']

$name=htmlspecialchars('name')
$pass=htmlspecialchars('pass')

$name=urldecode('name')
$pass=urldecode('pass')


	if (isset($_POST)) {
		print("Имя: " . $_POST['name']);
		print("Email: " . $_POST['pass']);
		
	}

?>