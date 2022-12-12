<?php
include '../Connect/connect.php';



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
                <a href="../index.php" class="menu_item" style="text-decoration: none">Главная страница</a>
                <a href="../workers.php" class="menu_item" style="text-decoration: none">Сотрудники</a>
                <a href="../departments.php" class="menu_item" style="text-decoration: none">Отделы</a>
                <a href="../reports.php" class="menu_item" style="text-decoration: none">Отчёты</a>
                   
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
        <div style="text-align:center; margin-top:40px"><input class="button-search" type="submit"name="submit"value="поиск"></div>
        </div >
     </form>
</div>



<div class="block-workers" id="display">
    <h1 style="text-align:center">Отчет по местам работы сотрудника</h1>
<?php

if (empty($_POST["name"]) && empty($_POST["surname"]) && empty($_POST["middlename"])) {
    $connectionWorkersNoDissmis = mysqli_query($link, "select * from `people_table` where dismiss IS NULL OR dismiss = ''");
}
else if(!empty($_POST["name"]) || !empty($_POST["surname"]) || !empty($_POST["middlename"])){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $middlename = $_POST["middlename"];

    $connectionWorkersNoDissmis = mysqli_query($link, "select * from `people_table` where (name = '$name' or surname= '$surname' or middlename= '$middlename')  and  dismiss IS NULL OR dismiss = ''");
}

    while($workers = mysqli_fetch_array($connectionWorkersNoDissmis))
    {
        $id = $workers["id"];
        if($workers['image'] != null){
            $show_img = base64_encode($workers['image']);
            }

            $departmentCon = mysqli_query($link, "select title from department JOIN departments_of_the_employee ON departments_of_the_employee.department_id=department.number_department where departments_of_the_employee.employee_id = '$id'");
            $vacationCon = mysqli_query($link, "select * from vacation_order where employees_report_card = '$id' order by order_number_vacation desc limit 1");
        $dateNow = date("Y-m-d");

    
        ?>
         <a href="reportOneWorker.php?id=<?=$workers["id"]?>"  style="text-decoration: none">
    
         <div class="block-worker" >
            <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
           <div class="fio"> <h3>Фамилия Имя Отчество</h3> <?=$workers["surname"]?> <?=$workers["name"]?> <?=$workers["middlename"]?> </div><br> 
           
          
           
            <div class="type-desc"><h3>Отдел</h3><?php while($departmentWorkers =  mysqli_fetch_array( $departmentCon)){ $department = $departmentWorkers['title']; echo "$department | "; }?> </div><br>
         

            
           
           <div class="type-desc"><h3>Состояние  </h3> 
           <?php  
           
           $row = mysqli_num_rows($vacationCon);
           if ($row == 0)
           {
            echo "Работает";
           }
          
               
                while ($vacation = mysqli_fetch_array( $vacationCon)){
                    
                 if($vacation["vacation_end_date"] >=  $dateNow = date("Y-m-d")) {?>
                   <div> <?=$vacation['type_of_vacation']?> С <?=$vacation['vacation_start_date']?> до <?=$vacation['vacation_end_date']?></div>
                 <?php }
                 else 
                 echo "Работает";
                }

           
           
          
         
            ?>
</div><br>
           
        </div>
         </a>
         <?php
    
    }
   ?>
  
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
<?php
mysqli_close($link);
?>