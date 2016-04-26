<?php
/*Author: Ben Hill
Assigment : WE4.0 PHP Web App Assigment, Digital Skills Academy
  Student Id = D11128483
  Date : 20016/04/22
Ref: http://www.codingcage.com/
*/
	
	require_once 'dbconfig.php';// db connection file using pdo

	if($_POST)
	{
		$user_name = $_POST['user_name'];// global vars from html form
		$user_email = $_POST['user_email'];
		$user_password = $_POST['password'];
		$joining_date =date('Y-m-d H:i:s');
		
		$password = md5($user_password);// password hash/ encryption uisng md5
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");// pdo object to connect
			$stmt->execute(array(":email"=>$user_email));
			$count = $stmt->rowCount();
			// check is user already in the database if no procced with sql insert
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO tbl_users(user_name,user_email,user_password,joining_date) VALUES(:uname, :email, :pass, :jdate)");
			$stmt->bindParam(":uname",$user_name);
			$stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":pass",$password);
			$stmt->bindParam(":jdate",$joining_date);
					
				if($stmt->execute())
				{
					echo "registered";// pass value back to call back in script
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>