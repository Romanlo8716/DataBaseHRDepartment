<?php
include '../Connect/connect.php';

$idDep = $_GET["idDep"];
$idEmp = $_GET["idEmp"];

$result = mysqli_query($link, "delete from departments_of_the_employee where employee_id = $idEmp and department_id = $idDep ");

if(!empty($result)){?>
    <h1 style="text-align:center; margin-top: 80px">Отдел сотрудника успешно удалена!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
    <?php
}
else 
{?>
    <h1 style="text-align:center; margin-top: 80px">Ошибка удаления данных сотрудника</h1>
 
 <?php
}

?>
<meta http-equiv="refresh" content="0;url=updateAdminOneWorker.php?id=<?=$idEmp?>" />
<?php
mysqli_close($link);
?>