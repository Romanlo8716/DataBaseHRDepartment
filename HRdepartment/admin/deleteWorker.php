<?php
include '../Connect/connect.php';

$id = $_GET["id"];

$result = mysqli_query($link, "CALL deleteWorker($id)");

if(!empty($result)){?>
    <h1 style="text-align:center; margin-top: 80px">Данные сотрудника успешно удалены!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
    <?php
}
else 
{?>
    <h1 style="text-align:center; margin-top: 80px">Ошибка удаления данных сотрудника</h1>
 
 <?php
}

mysqli_close($link);

?>
<meta http-equiv="refresh" content="0;url=deleteAdminWorkers.php" />