<?php

class Model_Courses extends Model
{


    public function __construct(){

        //echo "<script type='text/javascript' src='/js/jquery.js'></script>";
        //include '/php/db.php';
        $localhost  = 'localhost'; // хост
        $dbuser     = 'root';      // имя пользователя
        $dbpassword = '1q2w3e';          // пароль
        $database   = 'improvy';      // база данных
    
         /*
            * Подключение к БД
        */
        $db = mysql_pconnect($localhost, $dbuser, $dbpassword) or die('В настоящий момент сервер базы данных не доступен.');  
        mysql_query("SET NAMES 'UTF8'");
        mysql_select_db($database, $db) or die ('В настоящий момент база данных не доступна.');
    }
	
	public function get_data($course)
	{	
        $data = mysql_query("SELECT `$course`.`name_rus` as s, `$course`.`price`, `companies`.`name_rus`
                            FROM $course JOIN venues on $course.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company");              
        return $data;
		
	}
    	
	}