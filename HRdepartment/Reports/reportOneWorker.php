<?php
include '../Connect/connect.php';
$id = $_GET["id"];
if(isset($id)){
$workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
$postCon = mysqli_query($link, "select title from post JOIN post_of_the_employee ON post_of_the_employee.post_Code=post.post_code  where post_of_the_employee.table_number='$id' and (post_of_the_employee.date_end IS NULL)");
$postConAll = mysqli_query($link, "select * from post JOIN post_of_the_employee ON post_of_the_employee.post_Code=post.post_code  where post_of_the_employee.table_number='$id'");

}
else{
  echo "Переменная не инициализированна";
}

while($resultWorker =  mysqli_fetch_array( $workerCon)){
  $show_img = base64_encode($resultWorker['image']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/StyleOneWorker.css"/>
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

<div class="middle">
<h1 class="logo_worker"> Личные данные сотрудника </h1>

<div class="passport_block"> 

<div class="photo_block">
<?php if($resultWorker["image"]== null){ echo"<br><br><br>No photo"; } else{?><img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""><?php }?>
</div>

<div class="fio_block">
<h3>Фамилия:__________<span class="pass_info" style="font-weight: normal"><?=$resultWorker['surname']?></span>____________________________</h3><br>
<h3>Имя:_______________<span class="pass_info" style="font-weight: normal"><?=$resultWorker['name']?></span>____________________________</h3><br>
<h3>Отчество:__________<span class="pass_info" style="font-weight: normal"><?=$resultWorker['middlename']?></span>_____________________________</h3><br>
<h3>Пол:_<span class="pass_info" style="font-weight: normal"><?=$resultWorker['gender']?></span>______ Дата рождения:___<span class="pass_info" style="font-weight: normal"><?=$resultWorker['birthday']?></span>___________________</h3><br>
<h3>Серия паспорта:_<span class="pass_info" style="font-weight: normal"><?=$resultWorker['passport_series']?></span>_____ Номер паспорта:__<span class="pass_info" style="font-weight: normal"><?=$resultWorker['passport_number']?></span>_________</h3><br>
</div>
<br>
<h3 class="adress_block">Место прописки:____<span class="pass_info" style="font-weight: normal"> <?=$resultWorker['region']?> &nbsp; &nbsp; &nbsp;г. <?=$resultWorker['city']?>  </span>_______________________________________________ <br><br>__________________<span class="pass_info" style="font-weight: normal">ул. <?=$resultWorker['street']?> д. <?=$resultWorker['house']?> кв. <?=$resultWorker['apartment_number']?></span>_________________________________________________ </h3>

<br><h3 class="adress_block" >Действующая должность:____<span class="pass_info" style="font-weight: normal"><?php while($resultPost =  mysqli_fetch_array( $postCon)){ $post = $resultPost['title']; echo "$post | "; }?></span>________________________________________</h3>
</div>


<h1 class="logo_worker2"> Все места работы (должности) сотрудника </h1>

<div class="block-workers" id="display">
    <br>
<hr style="width:700px;margin-left:-30px;background-color:black" size="3">
<div class="search_post"><h2 style="text-align:center">Поиск за заданный период<h2>

<form action="reportOneWorker.php?id=<?=$id?>" method="POST">
<div style="margin-top:13px;text-align:center;word-spacing: 5px;font-size:20px">С <input type="date" name="date_start"> - До <input type="date" name="date_end"> <input class="button_add"  type="submit"name="submit"value="Найти" size="20"></div>

</form>

</div>
<br>
<hr style="width:700px;margin-left:-30px;background-color:black" size="3">
<?php
    if(!isset($_POST['date_start'])){
    while($postAll = mysqli_fetch_array($postConAll))
    {
        $idPost = $postAll["post_Code"];
        $postOfEmployeeCon = mysqli_query($link, "select * from post_of_the_employee where table_number = '$id' and post_Code='$idPost'");
        ?>
         
    
         <div class="block-worker">
            
           <h3>Название должности:__________<span class="pass_infoLast" style="font-weight: normal;"><?=$postAll["title"]?></span>_______________________________</h3><br>
           <?php while($postOfEmployee = mysqli_fetch_array($postOfEmployeeCon)) { ?>
           <h3>Дата поступления на должность:____<span class="pass_infoLast" style="font-weight: normal;"><?=$postOfEmployee["date_start"]?></span>___________________________</h3><br>
           <h3>Дата выхода из должности:_______<span class="pass_infoLast" style="font-weight: normal;"><?php if($postOfEmployee["date_end"]===null) echo "Занимает данную должность"; else echo $postOfEmployee["date_end"];?></span>_____________________________</h3><br>
                <?php } ?>
        </div>
         
         <?php
    
    }
    }
    else if(!empty($_POST['date_start']) && !empty($_POST['date_end'])){
        $dateStart = $_POST['date_start'];
        $dateEnd = $_POST['date_end'];
        $postConSearch = mysqli_query($link, "select * from post JOIN post_of_the_employee ON post_of_the_employee.post_Code=post.post_code  where post_of_the_employee.table_number='$id' and (post_of_the_employee.date_start >=  '$dateStart' &&  post_of_the_employee.date_start <= '$dateEnd')");
        while($postSearch = mysqli_fetch_array($postConSearch))
    {
        $idPost = $postSearch["post_Code"];
        $postOfEmployeeCon = mysqli_query($link, "select * from post_of_the_employee where table_number = '$id' and post_Code='$idPost'");
        ?>
         
    
         <div class="block-worker">
            
           <h3>Название должности:__________<span class="pass_infoLast" style="font-weight: normal;"><?=$postSearch["title"]?></span>_______________________________</h3><br>
           <?php while($postOfEmployee = mysqli_fetch_array($postOfEmployeeCon)) { ?>
           <h3>Дата поступления на должность:____<span class="pass_infoLast" style="font-weight: normal;"><?=$postOfEmployee["date_start"]?></span>___________________________</h3><br>
           <h3>Дата выхода из должности:_______<span class="pass_infoLast" style="font-weight: normal;"><?php if($postOfEmployee["date_end"]===null) echo "Занимает данную должность"; else echo $postOfEmployee["date_end"];?></span>_____________________________</h3><br>
                <?php } ?>
        </div>
         
         <?php
    
    }
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
      }
      
mysqli_close($link);

    ?>