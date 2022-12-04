<?php

include '../../Connect/connect.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(!empty($_POST["place"]) && !empty($_POST["date"]) && !empty($_POST["conclusion"])){
$place = $_POST["place"];
$date = $_POST["date"];
$conclusion = $_POST["conclusion"];


$result = mysqli_query($link, "CALL addMedReportWorker('$id','$place','$date', '$conclusion')");
    
    

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Запись успешно добавлена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления записи!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=updateMedReportWorker.php?id=<?=$id?>" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}
?>
