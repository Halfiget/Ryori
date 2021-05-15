<?php
    require_once('../dbconnect.php');
$nameFile=$_FILES["file"]["name"];
$path=$_FILES["file"]["tmp_name"];
$name=$_POST["name"];
$category=$_POST["category"];
$deskription=$_POST["deskription"];
$price=$_POST["price"];
$rand=rand();
$filenamefull=$rand.$nameFile;
$filePath='../Images/'.$filenamefull;
  if(file_exists($filePath)){
    move_uploaded_file($path, $filePath.$filenamefull);
    $resut=$dbh->prepare("INSERT INTO food (category_id,name,deskription, price, img) VALUES ('$category','$name','$deskription','$price','$filePath')");
    $resut->execute();
    header("location: ../Admin.php");

    }
    
    // $_FILES[ИмяПоляФайл][Атрибут]
    // name = Имя файла
    // tmp_name = Путь к файлу
    // Создаем переменную с путем куда сохранить
    // Создаем рандомную часть для имени rand()
    // Склеиваем путь файла.рандомнаячасть.имяфайла
    // ИСпользуем функцию move_uploaded_file(Путь файла,куда отправить)
  
?>