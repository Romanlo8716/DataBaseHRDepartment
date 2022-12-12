<?php
include 'Connect/connect.php';
$id = $_GET["id"];

if(isset($id)){
    $departmentCon = mysqli_query($link, "select * from `department` where number_department='$id'");
    $adressDepartmentCon = mysqli_query($link, "select * from department join department_adress on department.adress_id = department_adress.adress_id where department.number_department = '$id' ");
$connectionWorkersInDepartment = mysqli_query($link, "select * from people_table join departments_of_the_employee on people_table.id = departments_of_the_employee.employee_id where departments_of_the_employee.department_id = '$id' and people_table.dismiss IS NULL OR dismiss = ''");
while($departments = mysqli_fetch_array($connectionDepartments)) { 
    $numberDepartment = mysqli_query($link, "select count(*) as `count` from departments_of_the_employee where department_id = '$id'");
 }
}
else{
  echo "Переменная не инициализированна";
}

while($resultDepartment =  mysqli_fetch_array($departmentCon)){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$resultDepartment["title"] ?></title>
    <link rel="stylesheet" href="/Style/StyleOneDepartment.css"/>
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
<div class="name_department"><?=$resultDepartment["title"]?></div>

<div class="number_department">Сотрудники (Общее количество: <?=numberEmployeesForDepartment($numberDepartment)?>)</div>

<div class="block-workers" >
    <?php

    while($workers = mysqli_fetch_array($connectionWorkersInDepartment))
    {
        $idWorker = $workers["id"];
        $show_img = base64_encode($workers['image']);
        $vacationCon = mysqli_query($link, "select * from vacation_order where employees_report_card = '$idWorker' order by order_number_vacation desc limit 1");
    
        $dateNow = date("Y-m-d");

    
        ?>
         <a href="worker.php?id=<?=$workers["id"]?>"  style="text-decoration: none">
    
         <div class="block-worker" >
            <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
           <div class="fio"> <h3>Фамилия Имя Отчество</h3> <?=$workers["surname"]?> <?=$workers["name"]?> <?=$workers["middlename"]?> </div><br> 
           
           <div class="type-desc"><h3>Состояние</h3> 

           
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

           
           
            </div>
        </div>
         </a>
   <?php
    }
   ?>

</div>


<div class="block_contact">
<div class="logo_contact"> Контактные данные </div>

    <h3 class="about_department">Рабочий телефон: <span style="font-weight: normal;"><?=$resultDepartment["telephone"]?></span></h3>
    <?php while($adressDepartment = mysqli_fetch_array($adressDepartmentCon)) { ?>
          <h4 class="about_department">Адрес отдела: <span style="font-weight: normal;">Город: <?=$adressDepartment["city"]?>,</span> <span style="font-weight: normal;">Улица: <?=$adressDepartment["street"]?>,</span> <span style="font-weight: normal;"> Дом: <?=$adressDepartment["house"]?>.</span> </h4><br>
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
<?php
      }
    ?>
</body>
</html>
<?php
mysqli_close($link);
?>
