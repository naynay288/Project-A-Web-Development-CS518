<?php

	//include database information and user information
  require 'login1.html';
	require 'authentication.php';

	//never forget to start the session
	session_start();
	$errorMessage = '';

	//are user ID and Password provided?
	if (isset($_POST['txtEmail']) && isset($_POST['txtPassword'])) {

		//get userID and Password
		$loginEmail = $_POST['txtEmail'];
		$loginPassword = $_POST['txtPassword'];

		//connect to the database
        $connection = new mysqli($server, $sqlUsername, $sqlPassword, $databaseName);

		// Authenticate the user
		if (authenticateUser($connection, $loginEmail, $loginPassword))
		{
			//the user id and password match,
			// set the session
			$_SESSION['db_is_logged_in'] = true;
			$_SESSION['userID'] = $loginEmail;

			// after login we move to the main page
			header('Location: main.php');
			exit;
		} else {
			$errorMessage = 'Sorry, wrong username / password';
		}
	}
?>
