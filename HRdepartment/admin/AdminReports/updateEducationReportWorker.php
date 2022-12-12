<?php
include '../../Connect/connect.php';
$id = $_GET["id"];

if(isset($id)){
    $workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
    $educationCon = mysqli_query($link, "select * from education join people_table on education.employees_id = people_table.id where education.employees_id ='$id' order by record_id desc");
    $awardsCon = mysqli_query($link, "select award from awards join people_table on awards.employees_code = people_table.id where awards.employees_code ='$id'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Образование</title>
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
Добро пожаловать, <?= $_COOKIE['cokkie']?>. <a href="../Admin.php" class="open-admin" style="text-decoration: none">(Изменение данных)</a>
<?php } else {?>
    Для сотрудников отдела кадров, <a href="../../enterAdmin.php" class="open-admin" style="text-decoration: none">войти</a>
    <?php }?>
</div>

</div>

<middle>
<h1 class="logo_med">Личная карточка сотрудника </h1>

<div class="person_block">

<form method="POST" action="addEducationReportWorker.php?id=<?=$id?>">

<h2 style="text-align:center; margin-top:60px">Добавление образований сотрудника</h2><br>
<h2 style="text-align:center;font-weight: normal;">Серия диплома: <input type="number" name="series">
Номер диплома: <input type="number" name="number"></h2>
<h2 style="text-align:center;font-weight: normal;margin-top:10px">Специальность: <input type="text" name="spec"></h2>
<h2 style="text-align:center;font-weight: normal;margin-top:10px">Год окончания: &nbsp;<input type="date" name="date_end"></h2>

</div>
</div>
<div style="text-align:center; margin-top:40px"><input class="button_add" type="submit"name="submit"value="Добавить запись"></div>
</form>

<form method="POST" action="addAwardReportWorker.php?id=<?=$id?>">
<h2 style="text-align:center; margin-top:20px">Добавление наград сотрудника</h2>
<br>
<h2 style="text-align:center;">Введите название награды: <input type="text" name="award"></h2><br>
<h2 style="text-align:center;font-weight: normal;">Введите название документа: <input type="text" name="document_name"></h2><br>
<h2 style="text-align:center;font-weight: normal;">Введите номер документа:&emsp;&nbsp; <input type="number" name="document_number"></h2><br>
<h2 style="text-align:center;font-weight: normal;">Введите дату документа:&emsp;&emsp; <input type="date" name="document_date"></h2><br>
<div style="text-align:center; margin-top:40px"><input class="button_add" type="submit"name="submit"value="Добавить награду"></div>
</form>

<h1 class="logo_med">Удаление образований сотрудника</h1>

<div class="medData_block">
<?php while($resultEducation = mysqli_fetch_array($educationCon)){?>

    <a href="deleteEducationReportWorker.php?idEduc=<?=$resultEducation["record_id"]?>&idEmp=<?=$id?>" style="text-decoration:none; color:black">
         <div class="block-worker" >
            <h4>Серия диплома: _______<span class="med_info" style="font-weight: normal"> <?=$resultEducation['series_diplom']?></span>____________ Номер диплома: _____<span class="med_info" style="font-weight: normal"> <?=$resultEducation['diploma_number']?></span>______________</h4><br>
            <h4>Специализация: __________<span class="med_info" style="font-weight: normal"> <?=$resultEducation['specialization']?></span>____________________________________________</h4><br>
            <h4>Год окончания: _________<span class="med_info" style="font-weight: normal"> <?=$resultEducation['year_references']?></span>______________________________________________ </h4><br>
        </div>
      
         <?php } ?>
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