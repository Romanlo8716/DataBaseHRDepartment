<?php
include '../Connect/connect.php';
$id = $_GET["id"];

if(isset($id)){
    $workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
    $medCon = mysqli_query($link, "select * from medical_book join people_table on medical_book.employees_code = people_table.id where medical_book.employees_code ='$id'");
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
                <a href="../index.php" class="menu_item" style="text-decoration: none">Главная страница</a>
                <a href="../workers.php" class="menu_item" style="text-decoration: none">Сотрудники</a>
                <a href="../departments.php" class="menu_item" style="text-decoration: none">Отделы</a>
                <a href="../Reports/reports.php" class="menu_item" style="text-decoration: none">Отчёты</a>
                   
</nav>
</div>

<div class="panel-admin">
Для сотрудников отдела кадров, <a href="enterAdmin.php" class="open-admin" style="text-decoration: none" href>войти</a>
</div>

</div>

<div class="middle">

<h1 class="logo_med">История прохождения медицинских обследований</h1>

<?php while($workers = mysqli_fetch_array( $workerCon)){
    $show_img = base64_encode($workers['image']);?>
 <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
    <?php } ?>

<?php while($resultMed = mysqli_fetch_array( $medCon)){?>

    
         <div class="block-worker" >
            <div class="hospital"> <?=$resultMed['place_of_examination']?></div>
           <div class="date_examination"> <?=$resultMed['date_examination']?> </div><br> 
           <div class="conclusion"> <?=$resultMed['conclusion']?> </div><br> 
        </div>
      
         <?php } ?>




</div>

<footer class="footer">

    <div class="block3"></div>

    <div class="we">

      <div class="updates">
        
        <div class="updates_name">Работа с программой:</div>
        <div class="desc_updates">
            <br><br> В случае сбоев работы с программой<br>
            обращайтесь к администратору
        </div>
        <nav class="menu_updates" >
            <a href="suggestions.html" class="menu_updates_item" style="text-decoration: none">Наши предложения</a>
            <a href="news.html" class="menu_updates_item" style="text-decoration: none">Новости</a>
            <a href="#images" class="menu_updates_item" style="text-decoration: none">Фотогалерея</a>
            <a href="#contacts" class="menu_updates_item" style="text-decoration: none">Контакты</a>     
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