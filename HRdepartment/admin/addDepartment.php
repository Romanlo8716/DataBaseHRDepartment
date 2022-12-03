<?php

include '../Connect/connect.php';



if(!empty($_POST["title"]) && !empty($_POST["phone"]) && !empty($_POST["adress"]) ){

    $title = $_POST["title"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];


    $result = mysqli_query($link, "CALL addDepartment('$title', '$phone', '$adress')");
    
    

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Отдел успешно добавлен!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления отдела!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="2;url=Admin.php" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}
?>
