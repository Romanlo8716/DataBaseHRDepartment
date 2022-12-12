<?php
include '../Connect/connect.php';

$id = $_GET["id"];

$result = mysqli_query($link, "CALL deletePost($id)");

if(!empty($result)){?>
    <h1 style="text-align:center; margin-top: 80px">Данные должности успешно удалены!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
    <?php
}
else 
{?>
    <h1 style="text-align:center; margin-top: 80px">Ошибка удаления данных должности</h1>
 
 <?php
}

?>
<meta http-equiv="refresh" content="0;url=Admin.php" />
<?php
mysqli_close($link);
?>