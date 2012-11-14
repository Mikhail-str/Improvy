<?php
include '/php/db.php';

session_start();

if (isset($_COOKIE['login'])) {
	$ckID = $_COOKIE['login'];
	$result = mysql_query("SELECT `email`,`password`,`compname_rus`, `id_company` FROM `companies` WHERE `id_company`='$ckID'");

	if (isset($_SESSION['id'])) {
	
	}else{
			if(mysql_num_rows($result) > 0) {
       	 		while($row = mysql_fetch_array($result)) {
       	 			$val = md5($row['password'].md5($row['compname_rus']));
       	 			if (isset($_COOKIE['sesid'])) {       	 				
					if ($_COOKIE['sesid']==$val) {				
						$_SESSION['id'] = $row['id_company'];
						} 
       	 			}
			}
		}	
}
}

			