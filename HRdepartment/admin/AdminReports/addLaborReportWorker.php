<?php

include '../../Connect/connect.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(!empty($_POST["number_book"]) && !empty($_POST["date"]) && !empty($_POST["title_work"]) && !empty($_POST["info"]) && !empty($_POST["title_document"]) && !empty($_POST["date_document"]) && !empty($_POST["number_document"])){
$number_book = $_POST["number_book"];
$date = $_POST["date"];
$title_work = $_POST["title_work"];
$info = $_POST["info"];
$title_document = $_POST["title_document"];
$date_document = $_POST["date_document"];
$number_document = $_POST["number_document"];

if($_POST["experience"] == null)
{
    $experience = 0;
}
else{
    $experience = $_POST["experience"];
}

$result = mysqli_query($link, "CALL addLaborReportWorker('$id','$number_book','$date','$title_work', '$info', '$experience', '$title_document', '$date_document', '$number_document')");

    
    

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Запись успешно добавлена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления записи!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=updateLaborWorkReportWorker.php?id=<?=$id?>" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}
?>
