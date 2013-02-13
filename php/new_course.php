<?php
session_start();
include 'db.php';
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


$company_new_course = $_SESSION['id'];

$name_new_course = $_POST['name_new_course'];
$name_eng = translit($name_new_course);
$description = $_POST['description_new_course'];
$venues_checked = $_POST['venues_checked'];
$price_new_course = $_POST['price_new_course'];
$minprice_new_course = $_POST['minprice_new_course'];
$timetable_new_course = $_POST['timetable_new_course'];
$type_new_course = $_POST['type_new_course'];
$subtype_new_course = $_POST['subtype_new_course'];
$image_link = $_POST['image_new_course_link'];
$image_local = $_POST['image_new_course_local'];


foreach ($venues_checked as $key => $value) {

$result = mysql_query("
                        INSERT INTO  `improvy`.`courses` (
                        `id_course` ,
                        `id_venue` ,
                        `coursename_rus` ,
                        `coursename_eng` ,
                        `type` ,
                        `subtype` ,
                        `description` ,
                        `price` ,
                        `minprice` ,
                        `timetable` ,
                        `time_start` ,
                        `time_end` ,
                        `activation`
                        )
                        VALUES (
                        NULL ,  
                        '$value',  
                        '$name_new_course',  
                        '$name_eng',  
                        '$type_new_course',
                        '$subtype_new_course',  
                        '$description',  
                        '$price_new_course',
                        '$minprice_new_course',
                        '$timetable_new_course',  
                        '2013-02-26',  
                        '2013-02-22',  
                        '1'
                        );
");
}
/*
//Проверка изображения на наличие скриптов и всякой другой 
if($_FILES["filename"]["size"] > 1024*3*1024)
{
    echo ("Размер файла превышает три мегабайта");
    exit;
}
// Проверяем загружен ли файл
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
} 
else {
     echo("Ошибка загрузки файла");
}
$imageinfo = getimagesize($_FILES['userfile']['tmp_name']);
if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') 
{
    echo "Sorry, we only accept GIF and JPEG images\n";
    exit;
}

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
echo "File is valid, and was successfully uploaded.\n";
} else {
echo "File uploading failed.\n";
}
//Проверка изображения на наличие скриптов и всякой другой хуйни
//end

mysql_query("   INSERT INTO courses (name,description,pass) 
                VALUES ('" .$name. "','" .$description. "','" .$pass. "') "); 
//echo $_SESSION['compname'];                
//header("location: http://improvy.ru/$_SESSION['compname']");
//exit();
*/
