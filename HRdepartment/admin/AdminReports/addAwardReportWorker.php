<?php

include '../../Connect/connect.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(!empty($_POST["award"])){

    $award = $_POST["award"];


    $resultAddAward = mysqli_query($link, "INSERT INTO awards(employees_code, award) VALUES('$id', '$award')");

    
    

    if(!empty($resultAddAward)){?>
        <h1 style="text-align:center; margin-top: 80px">Награда сотрудника успешно добавлена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления награды сотрудника!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=updateEducationReportWorker.php?id=<?=$id?>" />
    <?php
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}

?>
