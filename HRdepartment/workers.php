<?php
include 'Connect/connect.php';


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сотрудники</title>
    <link rel="stylesheet" href="/Style/StyleWorkers.css"/>
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
                <a href="index.php" class="menu_item" style="text-decoration: none">Главная страница</a>
                <a href="workers.php" class="menu_item" style="text-decoration: none">Сотрудники</a>
                <a href="departments.php" class="menu_item" style="text-decoration: none">Отделы</a>
                <a href="reports.php" class="menu_item" style="text-decoration: none">Отчёты</a>
                   
</nav>
</div>

<div class="panel-admin">
Для сотрудников отдела кадров, <a href="enterAdmin.php" class="open-admin" style="text-decoration: none" href>войти</a>
</div>

</div>

<div class="middle">

<div class="searchPanel">
   <h2> Поиск сотрудников</h2>
</div> 

<div class="panel-menu">
        <form method="POST">
            <br>
        <div class="field">
        <label>Имя:</label> <input type="text" name="name" id="searchName"  /><p><br>
        </div >
        <div  class="field">
        <label> Фамилия:</label> <input type="text" name="surname" id="searchSurname"  /><p><br>
        </div >
        <div  class="field">
        <label>Отчество:</label> <input type="text" name="middlename" id="searchMiddlename"  /><p><br>
        </div >
     </form>
</div>



<div class="block-workers" id="display">
<?php

    while($workers = mysqli_fetch_array($connection))
    {
        $id = $workers["id"];
        $show_img = base64_encode($workers['image']);
        $departmentCon = mysqli_query($link, "select title from department JOIN departments_of_the_employee ON departments_of_the_employee.department_id=department.number_department where departments_of_the_employee.employee_id = '$id'");
        $vacationCon = mysqli_query($link, "select type_of_vacation from vacation_order where employees_report_card = '$id'");
        ?>
         <a href="worker.php?id=<?=$workers["id"]?>"  style="text-decoration: none">
    
         <div class="block-worker" >
            <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
           <div class="fio"> <h3>Фамилия Имя Отчество</h3> <?=$workers["name"]?> <?=$workers["surname"]?> <?=$workers["middlename"]?> </div><br> 
           
           <?php  while($departmentWorkers = mysqli_fetch_array($departmentCon)){ ?>
           
            <div class="type-desc"><h3>Отдел</h3> <?=$departmentWorkers['title']?></div><br>
            <?php
              }
             ?>

            <?php  while($vacationWorkers = mysqli_fetch_array($vacationCon)){ ?>
           
           <div class="type-desc"><h3>Состояние</h3> <?=$vacationWorkers['type_of_vacation']?></div><br>
           <?php
             }
            ?>

           
        </div>
         </a>
         <?php
    
    }
   ?>

</div>


</div>

<div class="foother">
fgbgfb
</div>

</body>
</html>