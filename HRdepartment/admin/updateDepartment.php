<?php

include '../Connect/connect.php';



if(!empty($_POST["title"]) && !empty($_POST["phone"]) && !empty($_POST["adress"]) ){

    $title = $_POST["title"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];

    $id = $_GET["id"];
    if(isset($id)){
    $result = mysqli_query($link, "CALL updateDepartment('$id','$title', '$phone', '$adress')");
    }
    else {
        echo "Ошибка в изменении данных!!! Данного отдела не существует";
    }

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Отдел успешно изменен!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка изменения отдела!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=Admin.php" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}

mysqli_close($link);

?>
