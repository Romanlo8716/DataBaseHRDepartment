<?php
include '../../Connect/connect.php';
$id = $_GET["id"];
$dateNow = date("Y-m-d");

if(isset($id)){
   
    $vacationCon = mysqli_query($link, "select * from vacation_order join people_table on vacation_order.employees_report_card = people_table.id where vacation_order.employees_report_card ='$id' order by order_number_vacation desc");
   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Состояние сотрудника</title>
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
                <a href="../index.php" class="menu_item" style="text-decoration: none">Главная страница</a>
                <a href="../workers.php" class="menu_item" style="text-decoration: none">Сотрудники</a>
                <a href="../departments.php" class="menu_item" style="text-decoration: none">Отделы</a>
                <a href="../Reports/reports.php" class="menu_item" style="text-decoration: none">Отчёты</a>
                   
</nav>
</div>

<div class="panel-admin">
    <?php if(isset($_COOKIE['cokkie'])) { ?>
Добро пожаловать, <?= $_COOKIE['cokkie']?>. <a href="../../admin/Admin.php" class="open-admin" style="text-decoration: none" href>(Изменение данных)</a>
<?php } else {?>
    Для сотрудников отдела кадров, <a href="../../enterAdmin.php" class="open-admin" style="text-decoration: none" href>войти</a>
    <?php }?>
</div>

</div>

<middle>

<h1 class="logo_med">Добавление данных о состояний сотрудника </h1>



<div class="person_block">

<form action="addStatsReportWorker.php?id=<?=$id?>" method="POST">

<h2 style="text-align:center;margin-top:60px">Дата начала: &emsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date_start"></h2><br>
<h2 style="text-align:center;">Дата окончания: <input type="date" name="date_end"></h2><br>
<h2 style="text-align:center;">Состояние:&nbsp;&nbsp; <input type="text" name="stats"></h2>
</div>
</div>
<div style="text-align:center; margin-top:40px"><input class="button_add" type="submit"name="submit"value="Добавить"></div>
</form>
<h1 class="logo_med">Удаление состояний сотрудника</h1>

<div class="medData_block">
<?php while($resultVacation = mysqli_fetch_array( $vacationCon)){?>

    <a href="deleteStatsReportWorker.php?idStats=<?=$resultVacation["order_number_vacation"]?>&idEmp=<?=$id?>" style="text-decoration:none; color:black">
         <div class="block-worker" >
            <h4>Дата начала: _____________<span class="med_info" style="font-weight: normal"> <?=$resultVacation['vacation_start_date']?></span>____________________________________________</h4><br>
            <h4>Дата окончания: _____________<span class="med_info" style="font-weight: normal"> <?=$resultVacation['vacation_end_date']?></span>_________________________________________</h4><br>
            <h4>Состояние: _____<span class="med_info" style="font-weight: normal"> <?=convertWordWrap($resultVacation['type_of_vacation'])?></span>______________________________________________________<br><br>______________________________________________________________________</h4><br>
        </div>
    </a>
      
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