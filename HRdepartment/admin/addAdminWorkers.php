<?php
include '../Connect/connect.php';
$allPost =  mysqli_query($link, "select * from post");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отделы</title>
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

<h1 class="logo_worker">Добавление личных данных сотрудника </h1>

<div class="passport_block"> 
<form action="addWorker.php" method="POST" enctype='multipart/form-data'>
    
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
    <span id="file-name" class="file-box" ></span>
    
  </label>

</div>

<script>
function uploadFile(target) {
    document.getElementById("file-name").innerHTML = target.files[0].name;
}
  </script>

<div class="fio_block">
   
<h3>Фамилия: <input type="text" name="surename"/></h3><br>
<h3>Имя: &emsp;&emsp;&nbsp;<input type="text" name="name"/></h3><br>
<h3 style="color:gray;">Отчество: <input type="text" name="middlename"/></h3><br>
<h3>Пол: <select name="gender"> <option value="0">Выберите пол</option> <option value="1">М</option> <option value="2">Ж</option>  </select> &emsp;&emsp;&nbsp;&nbsp; Дата рождения: <input type="date" name="birthday"></h3><br>
<h3>Серия паспорта:<input type="text" size= "5" onkeypress='validate(event)' name="series_pas"/> Номер паспорта: <input type="text" size= "10" onkeypress='validate(event)' name="number_pas"/></h3><br>
</div>
<br><br>
<h3 class="adress_block">Место прописки: Субъект: <input type="text" size="17" name="subject"> &emsp;&nbsp;&nbsp; Город: <input type="text" size= "19" name="city">  <br><br><div style="margin-left: 150px;">Улица: <input type="text" size="16px" name="street"> Дом: <input type="text" size="5" name="house"> Квартира: <input type="text" size="5" name="flat"> </div> </h3>

<br><h3 class="adress_block " style="color:gray;">Должность: <select name="post"><option>Выберите должность</option><?php while($post = mysqli_fetch_array($allPost)){?> <option value=<?=$post["post_code"]?>><?=$post["title"]?></option> <?php } ?>  </select> </h3>

</div>
<div style="text-align:center">Обязательно введите все поля! <br> *(Все необязательные поля выделены СЕРЫМ цветом).<div>
<div style="text-align:center; margin-top:30px">
<input class="button_add" type="submit"name="submit"value="Добавить работника">
<div>
</form>





</middle>

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