<?php

include '../../Connect/connect.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(!empty($_POST["award"]) && !empty($_POST["document_name"]) && !empty($_POST["document_number"]) && !empty($_POST["document_date"])){

    $award = $_POST["award"];
    $document_name = $_POST["document_name"];
    $document_number = $_POST["document_number"];
    $document_date= $_POST["document_date"];


    $resultAddAward = mysqli_query($link, "INSERT INTO awards(employees_code, award, document_name, document_number, document_date) VALUES('$id', '$award', '$document_name', '$document_number', '$document_date' )");

    
    

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

mysqli_close($link);

?>
