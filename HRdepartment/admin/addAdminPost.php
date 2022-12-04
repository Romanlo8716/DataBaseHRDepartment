<?php
include '../Connect/connect.php';
$postCon =  mysqli_query($link, "select * from post");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление должности</title>
    <link rel="stylesheet" href="/Style/StyleAddAdminWorkers.css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="live_search.js"></script>
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
    Для сотрудников отдела кадров, <a href="../enterAdmin.php" class="open-admin" style="text-decoration: none" href>войти</a>
    <?php }?>
</div>

</div>

<middle>

<h1 class="logo_worker">Добавление данных по должности </h1>

<div class="passport_block"> 
<form action="addPost.php" method="POST" enctype='multipart/form-data'>
    <div style="text-align:center; margin-top:100px">
<h2>Наименование должности:&nbsp; &nbsp;&emsp;<input type="text" name="title" size="25"><h2><br>

<h2>Зарплата для данной должности: <input type="text" name="salary"><h2>
</div>
</div>
<div style="text-align:center">Обязательно введите все поля! <br> *(Все необязательные поля выделены СЕРЫМ цветом).<div>
<div style="text-align:center; margin-top:30px">
<input class="button_add" type="submit"name="submit"value="Добавить должность">
<div>
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