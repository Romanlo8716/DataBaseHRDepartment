<?php 
include '../Connect/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование данных</title>
    <link rel="stylesheet" href="/Style/StyleAdminWorkers.css"/>
</head>
<body>
<div class="header">
<div class="logo-block">
    HR<br>
    Department
</div>


<div class="menu-block">
<nav class="menu" >
                <a href="../index.php" class="menu_item" style="text-decoration: none">Главная страница</a>
                <a href="../workers.php" class="menu_item" style="text-decoration: none">Сотрудники</a>
                <a href="../departments.php" class="menu_item" style="text-decoration: none">Отделы</a>
                <a href="../Reports/reports.php" class="menu_item" style="text-decoration: none">Отчёты</a>
                   
</nav>
</div>

<div class="panel-admin">
    <?php if(isset($_COOKIE['cokkie'])) { ?>
Добро пожаловать, <?= $_COOKIE['cokkie']?>. <a href="../admin/Admin.php" class="open-admin" style="text-decoration: none" href>(Изменение данных)</a>
<?php } else {?>
    Для сотрудников отдела кадров, <a href="enterAdmin.php" class="open-admin" style="text-decoration: none" href>войти</a>
    <?php }?>
</div>


</div>

<middle>

<h1 style="text-align: center; margin-top: 40px">Изменение данных</h1>
<h2 style="text-align: center; margin-top: 40px"> Для сотрудников </h2>
<div class="managment_employee">

<a href="deleteAdminWorkers.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Удаление сотрудников</h3> </div>
</a>
   

<a href="addAdminWorkers.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Добавление сотрудников</h3> </div>
</a>

<a href="updateAdminWorkers.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Изменение сотрудников</h3> </div>
</a>


</div>

<h2 style="text-align: center; margin-top: 40px" > Для отделов </h2>

<div class="managment_department">

<a href="deleteAdminDepartments.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Удаление отделов</h3> </div>
</a>
   

<a href="addAdminDepartments.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Добавление отделов</h3> </div>
</a>

<a href="updateAdminDepartments.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Изменение отделов</h3> </div>
</a>

</div>

<div class="managment_other">
<h1 style="text-align: center; margin-top: 40px">Прочая информация</h1>
<h2 style="text-align: center; margin-top: 40px"> Должности </h2>

<br><br>
<a href="deleteAdminPost.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Удаление должности</h3> </div>
</a>

<a href="addAdminPost.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Добавление должности</h3> </div>
</a>

<h2 style="text-align: center; margin-top: 40px"> Адрес отдела </h2>
<br><br>
<a href="deleteAdminAdress.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Удаление адреса</h3> </div>
</a>

<a href="addAdminAdress.php"  style="text-decoration: none">
<div class="upgrade_employee"><h3 style="margin-top: 70px"> Добавление адреса</h3> </div>
</a>

</div>

</middle>
<br><br><br><br>
<footer class="footer">

    <div class="block3"></div>

    <div class="we">

      <div class="updates">
        
        <div class="updates_name">Работа с программой:</div>
        <div class="desc_updates">
            <br><br> В случае сбоев работы с программой<br>
            обращайтесь к системному администратору
        </div>
        <nav class="menu_updates" >
            <a href="../index.php" class="menu_updates_item" style="text-decoration: none">Главная страница</a>
            <a href="../workers.php" class="menu_updates_item" style="text-decoration: none">Сотрудники</a>
            <a href="../departments.php" class="menu_updates_item" style="text-decoration: none">Отделы</a>
            <a href="../Reports/reports.php" class="menu_updates_item" style="text-decoration: none">Отчеты</a>     
        </nav>
   
      </div>


      <div class="contact">
          <div class="contact_name">Центральный офис:</div>
        <div class="adress">
           <br> Москва, ленинграский проспект,<br>
           д. 16, корп. В, офис 305<br><br>
           +7 (495) 987-65-43<br>
           <br><u>info@companyname.com</u>
        </div>
        <h1><div class="img_logocontact"> Insurance Company </div></h1>
          </div>
      </div>
    </div>
</footer>
</body>
</html>
<?php
mysqli_close($link);
?>