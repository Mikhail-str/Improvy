<?php
	include 'db.php';
	//echo $name;
	$password = md5($_POST['password']);
	$email = $_POST['email'];

	$result = mysql_query("SELECT `email`,`password`,`compname_rus`,`id_company` FROM `companies` WHERE `email`='$email'");
	if ($result!=0) {
		
	
	if(mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_array($result)) {
        	$val = md5($row['password'].md5($row['compname_rus']));
        	setcookie ("sesid", $val,time() + 50000,'/');
        	setcookie ("login", $row['id_company'],time() + 50000,'/');
        	//$rez = mysql_query("SELECT * FROM `users` WHERE `pass`='$pass'");
				session_start();
				$_SESSION['id'] = $row['id_company'];
        }
    }
    }else echo 1;
?>