<?php
/*
Author: Ben Hill
Assigment : WE4.0 PHP Web App Assigment, Digital Skills Academy
  Student Id = D11128483
  Date : 20016/04/22
Ref: http://www.codingcage.com/
*/
	session_start();
	unset($_SESSION['user_session']);
	
	if(session_destroy())
	{
		header("Location: login.php");
	}
?>