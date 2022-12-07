<?php

function convertWordWrap(string $text){
    $consul = wordwrap($text, 90, "\n \n", 1);
    $consul = htmlentities($consul);
    $consul = nl2br($consul);
    return $consul;
   }

$link = mysqli_connect("localhost", "root", "", "hrdepartment");

if($link== False){
    echo "Соединение не удалось";
}
else{

$id = $_GET["id"];

if(isset($id)){
    $workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
    $medCon = mysqli_query($link, "select * from medical_book join people_table on medical_book.employees_code = people_table.id where medical_book.employees_code ='$id' order by record_id desc");
    $medConLast = mysqli_query($link, "select * from medical_book join people_table on medical_book.employees_code = people_table.id where medical_book.employees_code ='$id' order by record_id desc limit 1");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Медицинские данные</title>
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
Добро пожаловать, <?= $_COOKIE['cokkie']?>. <a href="../../admin/Admin.php" class="open-admin" style="text-decoration: none" href>(Изменение данных)</a>
<?php } else {?>
    Для сотрудников отдела кадров, <a href="../enterAdmin.php" class="open-admin" style="text-decoration: none" href>войти</a>
    <?php }?>
</div>

</div>

<div class="middle">
<h1 class="logo_med">Добавление медицинского обследования </h1>

<div class="person_block">

<form method="POST" action="addMedReportWorker.php?id=<?=$id?>">

<div style="text-align:center; margin-top:60px">
<h2>Место прохождения осмотра: <input type="text" name="place"></h2><br>
<h2>Дата осмотра: <input type="date" name="date"></h2><br>
<h2>Заключение осмотра: <input type="textbox" name="conclusion"></h2>

</div>
</div>

<div style="text-align:center; margin-top:40px"><input class="button_add" type="submit"name="submit"value="Добавить запись"></div>

</form>

</div>

<h1 class="logo_med">Удаление медицинских обследований</h1>

<div class="medData_block">
<?php while($resultMed = mysqli_fetch_array( $medCon)){?>

        <a href="deleteMedReportWorker.php?idMed=<?=$resultMed["record_id"]?>&idEmp=<?=$id?>" style="text-decoration:none; color:black">
         <div class="block-worker" >
            <h4>Место прохождения: _____________<span class="med_info" style="font-weight: normal"> <?=$resultMed['place_of_examination']?></span>______________________________________</h4><br>
            <h4>Дата прохождения: _____________<span class="med_info" style="font-weight: normal"> <?=$resultMed['date_examination']?></span>_______________________________________</h4><br>
            <h4>Заключение: _____<span class="med_info" style="font-weight: normal"> <?=convertWordWrap($resultMed['conclusion'])?></span>_____________________________________________________<br><br>______________________________________________________________________</h4><br>
        </div>
        <a>
      
         <?php } ?>
</div>



</div>
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