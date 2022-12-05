<?php
include '../../Connect/connect.php';

$idEduc = $_GET["idEduc"];
$idEmp = $_GET["idEmp"];

$result = mysqli_query($link, "delete from education where record_id = $idEduc and employees_id = $idEmp ");

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
<meta http-equiv="refresh" content="0;url=updateEducationReportWorker.php?id=<?=$idEmp?>" />