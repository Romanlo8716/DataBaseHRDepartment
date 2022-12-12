<?php
include '../../Connect/connect.php';
$id = $_GET["id"];

if(isset($id)){
    $workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
    $militaryCon = mysqli_query($link, "select * from military_ticket join people_table on military_ticket.employees_code = people_table.id where military_ticket.employees_code ='$id' order by record_id desc");
    $militaryConLast = mysqli_query($link, "select * from military_ticket join people_table on military_ticket.employees_code = people_table.id where military_ticket.employees_code ='$id' order by record_id desc limit 1");

    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Военный билет</title>
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

<form action="addMilitaryReportWorker.php?id=<?=$id?>" method="POST">
<?php while($worker = mysqli_fetch_array( $workerCon)){ ?>
<div style="text-align:center; margin-top:20px;">
<h2 style="font-weight: normal;">Звание: &emsp;&emsp; <input type="text" name="title" size="30" value="<?=$worker['military_title']?>"></h2><br>
<h2 style="font-weight: normal;">Категория годности: <select name="shelf_life"><option value="<?=$worker["shelf_life"]?>">Введена: <?=$worker["shelf_life"]?></option> <option value="А">А</option><option value="Б">Б</option><option value="В">В</option><option value="Г">Г</option><option value="Д">Д</option><select></h2>
</div>
<?php } ?>

<h1 style="text-align:center; margin-top:30px">Добавление новой записи</h1>
<div style="text-align:center; margin-top:30px">
<h2 style="font-weight: normal;">Дата начала сборов: &emsp;&nbsp; <input type="date" name="date_start" size="30" ></h2><br>
<h2 style="font-weight: normal;">Дата окончания сборов: <input type="date" name="date_end" size="30" ></h2><br>
<h2 style="font-weight: normal;">Описание: &nbsp;&nbsp;&nbsp;<input type="text" name="condition" size="30" ></h2><br>
</div>

</div>
<div style="text-align:center; margin-top:40px"><input class="button_add" type="submit"name="submit"value="Добавить"></div>
</form>

<h1 class="logo_med">Удаление записей</h1>

<div class="medData_block">
<?php while($resultMilitary = mysqli_fetch_array( $militaryCon)){?>

    <a href="deleteMilitaryReportWorker.php?idMil=<?=$resultMilitary["record_id"]?>&idEmp=<?=$id?>" style="text-decoration:none; color:black">
         <div class="block-worker" >
            <h4>Дата начала сборов: _____________<span class="med_info" style="font-weight: normal"> <?=$resultMilitary['date_start_condition']?></span>______________________________________</h4><br>
            <h4>Дата окончания сборов: _____________<span class="med_info" style="font-weight: normal"> <?=$resultMilitary['date_end_condition']?></span>___________________________________</h4><br>
            <h4>Состояние: _____<span class="med_info" style="font-weight: normal"> <?=convertWordWrap($resultMilitary['military_condition'])?></span>______________________________________________________<br><br>______________________________________________________________________</h4><br>
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

