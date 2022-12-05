<?php
include '../../Connect/connect.php';

$idMil = $_GET["idMil"];
$idEmp = $_GET["idEmp"];

$result = mysqli_query($link, "delete from military_ticket where record_id = $idMil and employees_code = $idEmp ");

if(!empty($result)){?>
    <h1 style="text-align:center; margin-top: 80px">Запись успешно удалена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
    <?php
}
else 
{?>
    <h1 style="text-align:center; margin-top: 80px">Ошибка удаления записи</h1>
 
 <?php
}

?>
<meta http-equiv="refresh" content="0;url=updateMilitaryReportWorker.php?id=<?=$idEmp?>" />