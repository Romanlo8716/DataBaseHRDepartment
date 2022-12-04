<?php

include '../Connect/connect.php';



if(!empty($_POST["title"]) && !empty($_POST["salary"]) ){
$title = $_POST["title"];
$salary = $_POST["salary"];


$result = mysqli_query($link, "CALL addPost('$title','$salary')");
    
    

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Должность успешно добавлена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления должности!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=Admin.php" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}
?>
