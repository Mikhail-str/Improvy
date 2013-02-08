<?php
session_start();
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
include 'db.php';
$company_new_course = $_SESSION['id'];


$name_new_course = $_POST['name_new_course'];
$name_eng = translit($name_new_course);
$description = $_POST['description_new_course'];

$type_new_course = $_POST['type_new_course'];
$image_link = $_POST['image_new_course_link'];
$image_local = $_POST['image_new_course_local'];

if (!isset($_POST['name_new_course'])) 
{
   echo(" <script>alert('Добрый день')</script>");
}


$name_new_venue = $_POST['name_new_venue'];
$name_eng_new_venue = translit($name_new_venue);
$phone_new_venue = $_POST['phone_new_venue'];
$metro_new_venue = $_POST['metro_new_venue'];
$found_adress_new_venue = $_POST['found_adress_new_venue'];

$countre_adress_new_venue = $_POST['countre_adress_new_venue'];
$street_adress_new_venue = $_POST['street_adress_new_venue'];
$home_adress_new_venue = $_POST['home_adress_new_venue'];
$corpus_adress_new_venue = $_POST['corpus_adress_new_venue'];

//echo "Запрос к геокодеру по адресу: </br>";
$link_geocoder =    "город ".$countre_adress_new_venue.
                    " улица ".$street_adress_new_venue.
                    " дом ".$home_adress_new_venue.
                    " корпус ".$corpus_adress_new_venue ;       
$adress = $link_geocoder;
$key = "ACaQDlEBAAAADx8EBAIAVvmKSReS9YyV0-V0wOJcrlmSxgIAAAAAAAAAAABvYWqTFI1UJvu1H3wCMja4lQhHDA==";
$adress1=urlencode($adress);
$url="http://geocode-maps.yandex.ru/1.x/?geocode=".$adress1."&key=".$key;
$content=file_get_contents($url);
preg_match('/<pos>(.*?)<\/pos>/',$content,$point);
$coordinate=str_replace(' ',', ',trim(strip_tags($point[1])));
//echo "<br>".$coordinate;


$result_new_course = mysql_query("
               INSERT INTO  `improvy`.`venues` (
                `id_venue` ,
                `id_company` ,
                `venuename_eng` ,
                `venuename_rus` ,
                `telephone` ,
                `metro` ,
                `country` ,
                `street` ,
                `home` ,
                `how_found` ,
                `coordinate`
                )
                VALUES (
                    NULL , 
                    '$company_new_course', 
                    '$name_eng_new_venue',
                    '$name_new_venue',  
                    '$phone_new_venue',  
                    '$metro_new_venue',  
                    '$countre_adress_new_venue',  
                    '$street_adress_new_venue',  
                    '$home_adress_new_venue',  
                    '$corpus_adress_new_venue',
                    '$coordinate'
    );
");

$result = mysql_query("
                        INSERT INTO  `improvy`.`courses` (
                        `id_course` ,
                        `id_venue` ,
                        `coursename_eng` ,
                        `coursename_rus` ,
                        `type` ,
                        `description` ,
                        `price` ,
                        `time_start` ,
                        `time_end` ,
                        `activation`
                        )
                        VALUES (
                        NULL ,  
                        '1',  
                        '$name_new_course',  
                        '$name_eng',  
                        '$type_new_course',  
                        '$description',  
                        '123',  
                        '2013-02-26',  
                        '2013-02-22',  
                        '1'
                        );
");



/**
 * echo "
 *         <div id='ymaps-map-id_135272645449970217571' style='width: 210px; height: 300px;'></div>
 *         <script type='text/javascript'>
 *         function fid_135272645449970217571(ymaps) {
 *         var map = new ymaps.Map('ymaps-map-id_135272645449970217571', {center: [".$coordinate."], zoom: 13, type: 'yandex#map'});
 *         map.controls.add('zoomControl').add('mapTools').add(new ymaps.control.TypeSelector(['yandex#map', 'yandex#satellite', 'yandex#hybrid', 'yandex#publicMap']));
 *         map.geoObjects.add(new ymaps.Placemark([".$coordinate."], {balloonContent: '".$found_adress_new_venue." ".$phone_new_venue."', iconContent: '1'}, {preset: 'twirl#redIcon'}));
 *         };</script>";
 */





























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
                VALUES ('" .$name. "','" .$description. "','" .$pass. "') "); */
//echo $_SESSION['compname'];                
//header("location: http://improvy.ru/$_SESSION['compname']");
//exit();
