<?php
	session_start();
	include 'db.php';

	$Cname = $_POST['Cname'];
	$fio = $_POST['fio'];
	//echo $name;
	//$pass = md5($_POST['pass']);
	$email = $_POST['email'];
	$address = $_POST['address'];
	$site = $_POST['site'];
	$phone = $_POST['phone'];
	$Cname_eng = translit($Cname);
	$password = generateCode();
	
	
	$checkEmail = mysql_fetch_array(mysql_query("SELECT `email` FROM `companies` WHERE `email`='$email'"));
	if ($checkEmail['email'] != null ) {
		echo 1;
	}
	else
	{
		echo 2;
		if (mysql_query("INSERT INTO companies (compname_rus, compname_eng, fio, address, email, password, telephone, site, activation) VALUES ('" .$Cname. "','" .$Cname_eng. "','" .$fio. "', '" .$address. "','" .$email. "','" .$password. "', '" .$phone. "','" .$site. "', '0')")) //пишем данные в БД и авторизовываем пользователя
		{
				//setcookie ("login", $pass, time() + 50000, '/');
				//setcookie ("password", md5($login.$password), time() + 50000, '/');
				//$rez = mysql_query("SELECT * FROM users WHERE pass=".$pass);
				//@$row = mysql_fetch_assoc($rez);
				//$_SESSION['id'] = $row['id'];
				//$regged = true;
				//include ("template/registration.php"); //подключаем шаблон*/
				echo "go";

		} else echo "mimo";
	}

function translit($str) 
    {
        $translit = array(
            "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
            "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
            "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
            "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
            "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
            "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
            "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
            "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
            "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
            "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
            "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
            "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
            "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya"
        );
        return strtr($str,$translit);
    }
function generateCode($length = 6)
		{
		   $chars = 'abdefhiknrstyz1234567890';
		   $numChars = strlen($chars);
		   $string = '';
		   for ($i = 0; $i < $length; $i++)
		   {
		      $string .= substr($chars, rand(1, $numChars) - 1, 1);
		   }
		   return $string;
		}
//////////////////////////////////////
	/*$date=time();
	
	//Добавляем данные во временную таблицу

	$q=@mysql_query("INSERT into `validate_temp` VALUES('','".$email."','".$date."')");

	if(@mysql_error($conn_id)!='') {
   		 die("Ошибка в запросе к БД !");
    }
*/
//Сообщение зарегистрированному пользователю

	$message="Вы получили это письмотак как, зарешистрировались на Improvy.ru.
	Для подтверждения регистрации наш менеджер свяжется с вами в течение нескольких часов
	Если вы не регистрировались на нашем сайте, то попросту удалите данное письмо.

	
	-----------------------------

	С уважением администрация Improvy.ru";

	//Посылаем сообщение пользователю

	@mail($email,"Уведомление",$message,"Content-Type: text/html; 
	charset=windows-1251","From: root@simprovy.ru");

	@mysql_close();
///////////////////////////////////
