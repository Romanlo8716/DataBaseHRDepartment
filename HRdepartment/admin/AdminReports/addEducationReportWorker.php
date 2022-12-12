<?php

include '../../Connect/connect.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(!empty($_POST["series"]) && !empty($_POST["number"]) && !empty($_POST["spec"]) && !empty($_POST["date_end"])){

$series = $_POST["series"];
$number = $_POST["number"];
$spec = $_POST["spec"];
$date_end = $_POST["date_end"];


$resultAddEducation = mysqli_query($link, "CALL addEducationReportWorker('$id','$series','$number ', '$spec ', '$date_end')");

    
    

    if(!empty($resultAddEducation)){?>
        <h1 style="text-align:center; margin-top: 80px">Запись успешно добавлена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления записи!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=updateEducationReportWorker.php?id=<?=$id?>" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}


mysqli_close($link);

?>
