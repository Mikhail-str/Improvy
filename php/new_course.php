<?php

include 'db.php';
$name = $_POST['name_newcourse'];
$description = $_POST['description_new_course'];
$type = $_POST['type_new_course'];
$image_link = $_POST['image_new_course_link'];
$image_local = $_POST['image_new_course_local'];
//start
//�������� ����������� �� ������� �������� � ������ ������ �����  
if($_FILES["filename"]["size"] > 1024*3*1024)
{
    echo ("������ ����� ��������� ��� ���������");
    exit;
}
// ��������� �������� �� ����
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
     // ���� ���� �������� �������, ���������� ���
     // �� ��������� ���������� � ��������
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
} 
else {
     echo("������ �������� �����");
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
//�������� ����������� �� ������� �������� � ������ ������ �����
//end

mysql_query("   INSERT INTO courses (name,description,pass) 
                VALUES ('" .$name. "','" .$description. "','" .$pass. "')
            ");