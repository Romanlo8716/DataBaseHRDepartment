<?php
include '../../Connect/connect.php';

$id = $_GET["id"];

if(isset($id)){
    $workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о семьи</title>
    <link rel="stylesheet" href="/Style/StyleReportWorker.css"/>
</head>
<body>
<div class="header">
<div class="logo-block">
    HR<br>
    Department
</div>


<div class="menu-block">
<nav class="menu" >
                <a href="../../index.php" class="menu_item" style="text-decoration: none">Главная страница</a>
                <a href="../../workers.php" class="menu_item" style="text-decoration: none">Сотрудники</a>
                <a href="../../departments.php" class="menu_item" style="text-decoration: none">Отделы</a>
                <a href="../../Reports/reports.php" class="menu_item" style="text-decoration: none">Отчёты</a>
                   
</nav>
</div>

<div class="panel-admin">
    <?php if(isset($_COOKIE['cokkie'])) { ?>
Добро пожаловать, <?= $_COOKIE['cokkie']?>. <a href="../Admin.php" class="open-admin" style="text-decoration: none" href>(Изменение данных)</a>
<?php } else {?>
    Для сотрудников отдела кадров, <a href="../../enterAdmin.php" class="open-admin" style="text-decoration: none" href>войти</a>
    <?php }?>
</div>

</div>

<middle>

<h1 class="logo_med">Личная карточка сотрудника </h1>

<div class="person_block">

<form action="addFamilyReportWorker.php?id=<?=$id?>" method="POST">
<?php while($worker = mysqli_fetch_array( $workerCon)){ ?>
<h2 style="text-align:center;margin-top:80px">Семейное положение: 

<select name="position"><option value="0">Выберите положение</option><option value="0">Не женат(Не замужем)</option><option value="0">Женат(Замужем)</option></select> </h2><br>

<h2 style="text-align:center">Количество детей: &emsp;&nbsp; <input type="number" name="children" value="<?= $worker["children"]?>"> </h2>
<?php } ?>
</div>
</div>
<div style="text-align:center; margin-top:40px"><input class="button_add" type="submit"name="submit"value="Добавить данные"></div>
</form>
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
            <a href="../../index.php" class="menu_updates_item" style="text-decoration: none">Главная страница</a>
            <a href="../../workers.php" class="menu_updates_item" style="text-decoration: none">Сотрудники</a>
            <a href="../../departments.php" class="menu_updates_item" style="text-decoration: none">Отделы</a>
            <a href="../../Reports/reports.php" class="menu_updates_item" style="text-decoration: none">Отчеты</a>     
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