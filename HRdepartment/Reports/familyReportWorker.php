<?php
include '../Connect/connect.php';

$id = $_GET["id"];
$workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
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

<h1 class="logo_med">Личная карточка сотрудника </h1>

<div class="person_block">

<?php while($workers = mysqli_fetch_array( $workerCon)){
    $show_img = base64_encode($workers['image']);?>
 <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
 <div class="fio_block">
<h3>Фамилия:__________<span class="pass_info" style="font-weight: normal"><?=$workers['surname']?></span>_____________________________</h3><br>
<h3>Имя:_______________<span class="pass_info" style="font-weight: normal"><?=$workers['name']?></span>____________________________</h3><br>
<h3>Отчество:__________<span class="pass_info" style="font-weight: normal"><?=$workers['middlename']?></span>_____________________________<br></h3><br>
</div>

<div class="lastMed">
    
    <h3>Семейное положение:__________<span class="pass_infoLast" style="font-weight: normal;"><?php if($workers['family_position'] == 1) echo "Женат(Замужем)"; else echo "Не женат(Не замужем)"?></span>________________________________</h3><br>
    <h3>Наличие детей:____<span class="pass_infoLast" style="font-weight: normal;"><?php if($workers['children'] == 0) echo "Нет"; else echo "Есть"?></span>___________ Количество детей:____<span class="pass_infoLast" style="font-weight: normal;"><?=$workers['children']?></span>____________</h3><br>
    <?php } ?>
</div>
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