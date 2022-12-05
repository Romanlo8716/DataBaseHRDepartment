<?php
include '../../Connect/connect.php';

$idStats = $_GET["idStats"];
$idEmp = $_GET["idEmp"];

$result = mysqli_query($link, "delete from vacation_order where order_number_vacation = $idStats and employees_report_card = $idEmp ");

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
<meta http-equiv="refresh" content="0;url=updateStatsReportWorker.php?id=<?=$idEmp?>" />