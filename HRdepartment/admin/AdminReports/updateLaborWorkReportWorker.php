<?php
include '../../Connect/connect.php';
$id = $_GET["id"];

if(isset($id)){
    $workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
    $laborCon = mysqli_query($link, "select * from labor_book join people_table on labor_book.employees_code = people_table.id where labor_book.employees_code ='$id' order by record_id desc");
    $laborConLast = mysqli_query($link, "select * from labor_book join people_table on labor_book.employees_code = people_table.id where labor_book.employees_code ='$id' order by record_id desc limit 1");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Трудовая книга</title>
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

<form action="addLaborReportWorker.php?id=<?=$id?>" method="POST">
<div style="text-align:center; margin-top:20px;">
<?php while($worker = mysqli_fetch_array($workerCon)){?>
<h2 style="font-weight: normal;">Номер трудовой книги: <input type="number" name="number_book" value="<?=$worker["number_labor_book"]?>"></h2><br>
<?php } ?>
<br>
<h2>Добавление записи в трудовую книгу</h2><br>
<h2 style="font-weight: normal;">Дата: <input type="date" name="date"> Название работы: <input type="text" name="title_work"></h2><br>
<h2 style="font-weight: normal;">Сведения о работе: <input type="text" name="info" size="15">
<span style="gray;">Стаж при увольнении: <input type="text" name="experience" size="10"></span></h2><br>
<h2 style="font-weight: normal;">Название документа: <input type="text" name="title_document">
Дата документа: <input type="date" name="date_document"></h2><br>
<h2 style="font-weight: normal;">Номер документа: <input type="number" name="number_document"></h2><br>
</div>

</div>
<div style="text-align:center; margin-top:40px"><input class="button_add" type="submit"name="submit"value="Добавить"></div>
</form>
<h1 class="logo_med">Сведения о работе</h1>

<div class="medData_block">
<?php while($resultLabor = mysqli_fetch_array($laborCon)){?>

    <a href="deleteLaborReportWorker.php?idLab=<?=$resultLabor["record_id"]?>&idEmp=<?=$id?>" style="text-decoration:none; color:black">
         <div class="block-worker_Labor" >
         <div style="text-align:center"><h4>Наименование работы: __<span class="med_info" style="font-weight: normal"> <?=$resultLabor['title_work']?></span>_______________________________</h4></div><br>
            <h4>Дата: _____________<span class="med_info" style="font-weight: normal"> <?=$resultLabor['date_information']?></span>__________________ Стаж:___________<span class="med_info" style="font-weight: normal"> <?=$resultLabor['experience']?> лет</span>___________________</h4><br>
            <h4>Сведения: _____<span class="med_info" style="font-weight: normal"> <?=convertWordWrap($resultLabor['information_work'])?></span>__________________________________________________________<br><br>_________________________________________________________________________</h4><br>
            <h4>Наименование документа: _<span class="med_info" style="font-weight: normal"> <?=$resultLabor['title_document']?></span>_______________________________________________ </h4><br>
            <div style="text-align:center"><h4> Номер: _<span class="med_info" style="font-weight: normal"> <?=$resultLabor['number_document']?></span>______ &nbsp Дата документа: _<span class="med_info" style="font-weight: normal"> <?=$resultLabor['date_document']?></span>__________ </h4></div><br>
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