<?php
    require_once('../dbconnect.php');
$name=$_FILES["file"]["name"];
$path=$_FILES["file"]["tmp_name"];
$title=$_POST["title"];
$rand=rand();
$filenamefull=$rand.$name;
$filePath='../Images/';
  if(file_exists($filePath)){
    move_uploaded_file($path, $filePath.$filenamefull);
    $resut=$dbh->prepare("INSERT INTO menu (img,name,title) VALUES ('$filePath','$filenamefull','$title')");
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
  }
?>