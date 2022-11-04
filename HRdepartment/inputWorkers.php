<?php
include 'Connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="live_search.js"></script>
    <link rel="stylesheet" href="/Style/StyleWorkers.css"/>
</head>
<body>

<?php

if (isset($_POST['searchName']) ) {

   
    // Помещаем поисковой запрос в переменной
    $name = $_POST['searchName'];

    // Запрос для выбора из базы данных
    $Query = "SELECT * FROM people_table WHERE name LIKE '%$name%'  LIMIT 5";

    //Производим поиск в базе данных
    $ExecQuery = mysqli_query($link, $Query);

    

    while($workers = mysqli_fetch_array($ExecQuery))
    {
        $show_img = base64_encode($workers['image']);
    
        ?>
         <a href="worker.php?id=<?=$workers["id"]?>"  style="text-decoration: none">
    
         <div class="block-worker" >
            <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
           <div class="fio"> <h3>Фамилия Имя Отчество</h3> <?=$workers["name"]?> <?=$workers["surname"]?> <?=$workers["middlename"]?> </div><br> 
       
           <div class="type-desc"><h3>Состояние</h3> <?=$workers["type"]?></div>
        </div>
         </a>
         <?php
    }
}
else if (isset($_POST['searchSurname']))
{
 $surname = $_POST['searchSurname'];
    
    // Запрос для выбора из базы данных
    $Query = "SELECT * FROM people_table WHERE surname LIKE '%$surname%'  LIMIT 5";

    //Производим поиск в базе данных
    $ExecQuery = mysqli_query($link, $Query);

    

    while($workers = mysqli_fetch_array($ExecQuery))
    {
        $show_img = base64_encode($workers['image']);
    
        ?>
         <a href="worker.php?id=<?=$workers["id"]?>"  style="text-decoration: none">
    
         <div class="block-worker" >
            <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
           <div class="fio"> <h3>Фамилия Имя Отчество</h3> <?=$workers["name"]?> <?=$workers["surname"]?> <?=$workers["middlename"]?> </div><br> 
           <div class="post-desc"> <h3>Должность</h3> <?=$workers["post"]?> </div><br>
           <div class="type-desc"><h3>Состояние</h3> <?=$workers["type"]?></div>
        </div>
         </a>
         <?php
    }
}
else if (isset($_POST['searchMiddlename']))
{
    $middlename = $_POST['searchMiddlename'];
    
    // Запрос для выбора из базы данных
    $Query = "SELECT * FROM people_table WHERE middlename LIKE '%$middlename%'  LIMIT 5";

    //Производим поиск в базе данных
    $ExecQuery = mysqli_query($link, $Query);

    

    while($workers = mysqli_fetch_array($ExecQuery))
    {
        $show_img = base64_encode($workers['image']);
    
        ?>
         <a href="worker.php?id=<?=$workers["id"]?>"  style="text-decoration: none">
    
         <div class="block-worker" >
            <div class="image-worker"><?php if($workers["image"]== null){ echo"<br><br><br>No photo"; } else{?> <img class="photo_worker" src="data:image/jpeg;base64,<?=$show_img?>" alt=""> <?php }?></div>
           <div class="fio"> <h3>Фамилия Имя Отчество</h3> <?=$workers["name"]?> <?=$workers["surname"]?> <?=$workers["middlename"]?> </div><br> 
           <div class="post-desc"> <h3>Должность</h3> <?=$workers["post"]?> </div><br>
           <div class="type-desc"><h3>Состояние</h3> <?=$workers["type"]?></div>
        </div>
         </a>
         <?php
    }
}
?>

</body>
</html>