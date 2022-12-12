<?php

include '../Connect/connect.php';



if(!empty($_POST["city"]) && !empty($_POST["street"]) && !empty($_POST["house"])){
$city = $_POST["city"];
$street = $_POST["street"];
$house = $_POST["house"];


$result = mysqli_query($link, "CALL addAdress('$city','$street', '$house')");
    
    

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Адрес отделов успешно добавлен!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления адреса отделов!</h1>
       
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
