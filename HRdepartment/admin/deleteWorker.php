<?php
include '../Connect/connect.php';

$id = $_GET["id"];

$result = mysqli_query($link, "CALL deleteWorker($id)");

if(!empty($result)){?>
    <h1 style="text-align:center; margin-top: 80px">Пользователь успешно удален!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
    <?php
}
else 
{
    echo "Ошибка удаления пользователя";
}

?>
<meta http-equiv="refresh" content="2;url=deleteAdminWorkers.php" />