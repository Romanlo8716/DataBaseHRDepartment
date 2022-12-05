<?php

include '../../Connect/connect.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];



$position = $_POST["position"];
$children = $_POST["children"];



$result = mysqli_query($link, "UPDATE people_table SET family_position='$position', children='$children' where id='$id'");
    
    

    if(!empty($result)){?>
        <h1 style="text-align:center; margin-top: 80px">Данные о семье успешно добавлены!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
        <?php
    }
    else 
    {?>
          <h1 style="text-align:center; margin-top: 80px">Ошибка добавления данных!</h1>
       
       <?php
    }?>
    <meta http-equiv="refresh" content="0;url=updateFamilyReportWorker.php?id=<?=$id?>" />
    <?php

}
else{
    echo "Ошибка!!! Данного пользователя не существует";
}
?>
