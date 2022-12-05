<?php

include '../../Connect/connect.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(!empty($_POST["title"]) && !empty($_POST["shelf_life"]) && !empty($_POST["date_start"]) && !empty($_POST["date_end"]) && !empty($_POST["condition"])){
$title = $_POST["title"];
$shelf_life = $_POST["shelf_life"];
$date_start = $_POST["date_start"];
$date_end = $_POST["date_end"];
$condition = $_POST["condition"];

$result = mysqli_query($link, "CALL addMilitaryReportWorker('$id','$title','$shelf_life ', '$date_start', '$date_end', '$condition')");

    
    

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Запись успешно добавлена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления записи!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=updateMilitaryReportWorker.php?id=<?=$id?>" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}
?>
