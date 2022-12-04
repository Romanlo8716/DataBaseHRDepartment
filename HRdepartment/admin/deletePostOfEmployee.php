<?php
include '../Connect/connect.php';

$idPost = $_GET["idPost"];
$idEmp = $_GET["idEmp"];

$result = mysqli_query($link, "delete from post_of_the_employee where table_number = $idEmp and post_Code = $idPost ");

if(!empty($result)){?>
    <h1 style="text-align:center; margin-top: 80px">Должность сотрудника успешно удалена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
    <?php
}
else 
{?>
    <h1 style="text-align:center; margin-top: 80px">Ошибка удаления данных сотрудника</h1>
 
 <?php
}

?>
<meta http-equiv="refresh" content="0;url=updateAdminOneWorker.php?id=<?=$idEmp?>" />