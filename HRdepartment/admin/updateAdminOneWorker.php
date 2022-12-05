<?php
include '../Connect/connect.php';
$allPost =  mysqli_query($link, "select * from post");
$allDepartment = mysqli_query($link, "select * from department");

$id = $_GET["id"];
if(isset($id)){
$workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
$postCon = mysqli_query($link, "select * from post JOIN post_of_the_employee ON post_of_the_employee.post_Code=post.post_code  where post_of_the_employee.table_number='$id'");
$departmentCon = mysqli_query($link, "select * from department JOIN departments_of_the_employee ON departments_of_the_employee.department_id=department.number_department where departments_of_the_employee.employee_id = '$id'");

}
if(!empty($workerCon))
while($resultWorker =  mysqli_fetch_array( $workerCon)){

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение сотрудника</title>
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

<h1 class="logo_worker">Изменение личных данных сотрудника </h1>

<div class="passport_block"> 

<form action="updateWorker.php?id=<?=$id?>" method="POST" enctype='multipart/form-data'>
    
<div class="photo_block">
  
    <div style="text-align:center;margin-top:5px;color:gray;">Фото сотрудника</div>
<br><br>
    <input type="file" name="image" id="file" accept="gif|jpg|jpeg|png" class="inputfile" onchange='uploadFile(this)'>
  <label for="file">
  <span class="file-button">
      <i class="fa fa-upload" aria-hidden="true"></i>
      Загрузить
    </span>
    <br>
    
    <span id="file-name" class="file-box" ><?php if($resultWorker["image"] != null) echo "Фото загружено"; else echo "Фото <br> не загружено";?></span>
    

    
   
  </label>

</div>

<script>
function uploadFile(target) {
    document.getElementById("file-name").innerHTML = target.files[0].name;
}
  </script>

<div class="fio_block">
   
<h3>Фамилия: <input type="text" name="surename" value="<?=$resultWorker["surname"]?>"/></h3><br>
<h3>Имя: &emsp;&emsp;&nbsp;<input type="text" name="name" value="<?=$resultWorker["name"]?>"/></h3><br>
<h3 style="color:gray;">Отчество: <input type="text" name="middlename" value="<?=$resultWorker["middlename"]?>"/></h3><br>
<h3>Пол: <select name="gender"><option value="0">Выберите пол</option><?php if($resultWorker["gender"] == "М"){?> <option value="1" selected>М</option> <option value="2">Ж</option> <?php } else if ($resultWorker["gender"] == "Ж") {?> <option value="1" selected>М</option> <option value="2">Ж</option> <?php } ?>  </select> &emsp;&emsp;&nbsp;&nbsp; Дата рождения: <input type="date" name="birthday" value="<?=$resultWorker["birthday"]?>"></h3><br>
<h3>Серия паспорта:<input type="text" size= "5" onkeypress='validate(event)' name="series_pas" value="<?=$resultWorker["passport_series"]?>"/> Номер паспорта: <input type="text" size= "10" onkeypress='validate(event)' name="number_pas" value="<?=$resultWorker["passport_number"]?>"/></h3><br>
</div>
<br><br>
<h3 class="adress_block">Место прописки: Субъект: <input type="text" size="17" name="subject" value="<?=$resultWorker["region"]?>"> &emsp;&nbsp;&nbsp; Город: <input type="text" size= "19" name="city" value="<?=$resultWorker["city"]?>">  <br><br><div style="margin-left: 150px;">Улица: <input type="text" size="16px" name="street" value="<?=$resultWorker["street"]?>"> Дом: <input type="text" size="5" name="house" value="<?=$resultWorker["house"]?>"> Квартира: <input type="text" size="5" name="flat" value="<?=$resultWorker["apartment_number"]?>"> </div> </h3>

<br><h3 class="adress_block " style="color:gray;">Должность: <select name="post" ><option value="0">Выберите должность</option><?php while($post = mysqli_fetch_array($allPost)){?> <option value=<?=$post["post_code"]?>><?=$post["title"]?></option> <?php } ?>   </select>
&emsp;&nbsp;&nbsp;Отдел: <select name="department" ><option value="0">Выберите отдел</option><?php while($department = mysqli_fetch_array($allDepartment)){?> <option value=<?=$department["number_department"]?>><?=$department["title"]?></option> <?php } ?>   </select>
</h3>

</div>
<div style="text-align:center">Обязательно введите все поля! <br> *(Все необязательные поля выделены СЕРЫМ цветом).<div>
<div style="text-align:center; margin-top:30px">
<input class="button_add" type="submit"name="submit"value="Изменить данные">
<div>
</form>

<h1 class="logo_worker2">Удаление должностей сотрудника </h1>
<br>
<div class="delete_info" style="font-weight: normal">
<?php while($resultPost =  mysqli_fetch_array( $postCon)){ ?>

  <a href="deletePostOfEmployee.php?idPost=<?=$resultPost["post_code"]?>&idEmp=<?=$id?>" style="text-decoration: none">
  <div class="block_post" ><div style="margin-top:30px;"><?=$resultPost['title'];?></div> </div>
  </a>
  <?php } ?>

</div>


<h1 class="logo_worker2">Удаление отделов сотрудника </h1>
<br>
<div class="delete_info" style="font-weight: normal">
<?php while($resultDepartment =  mysqli_fetch_array( $departmentCon)){ ?>

  <a href="deleteDepartmentOfEmployee.php?idDep=<?=$resultDepartment["number_department"]?>&idEmp=<?=$id?>" style="text-decoration: none">
  <div class="block_post"><div style="margin-top:30px"><?=$resultDepartment['title'];?></div> </div>
</a>
  <?php } ?>

</div>




<h1 class="logo_worker2">Изменение отчётов по сотруднику </h1>


<div class="med_block">
<a href="AdminReports/updateMedReportWorker.php?id=<?=$id?>" class="report_item" style="text-decoration: none">
<div class="img_block">
<img class="img_report" src="../image/med.png" alt="">
</div>
  <div class="desc_block">
Медицинские данные сотрудника
  </div>
  </a>
</div>



<div class="military_block">
<a href="AdminReports/updateMilitaryReportWorker.php?id=<?=$id?>" class="report_item" style="text-decoration: none">
<div class="img_block">
<img class="img_report" src="../image/military.png" alt="">
</div>
  <div class="desc_block">
Военный билет
</div>
</a> 
</div>



<div class="work_block">
<a href="AdminReports/updateLaborWorkReportWorker.php?id=<?=$id?>" class="report_item" style="text-decoration: none">
<div class="img_block">
<img class="img_report" src="../image/work.png" alt="">
</div>
  <div class="desc_block">
Трудовая книга
</div>
</a> 
</div>



<div class="education_block">
<a href="AdminReports/updateEducationReportWorker.php?id=<?=$id?>" class="report_item" style="text-decoration: none">
<div class="img_block">
<img class="img_report" src="../image/education.png" alt="">
</div>
  <div class="desc_block">
Информация об образовании
</div>
</a> 
</div>



<div class="family_block">
<a href="AdminReports/updateFamilyReportWorker.php?id=<?=$id?>" class="report_item" style="text-decoration: none">
<div class="img_block">
<img class="img_report" src="../image/family.png" alt="">
</div>
  <div class="desc_block">
Семейные данные
</div>
</a> 
</div>



<div class="stats_block">
<a href="AdminReports/updateStatsReportWorker.php?id=<?=$id?>" class="report_item" style="text-decoration: none">
<div class="img_block">
<img class="img_report" src="../image/stats.png" alt="">
</div>
  <div class="desc_block">
Информация о состоянии сотрудника
</div>
</a> 
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
<?php } ?>