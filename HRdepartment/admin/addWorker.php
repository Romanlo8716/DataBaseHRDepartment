<?php

include '../Connect/connect.php';



if(!empty($_POST["surename"]) && ($_POST["gender"] != 0) && !empty($_POST["name"]) && !empty($_POST["birthday"]) && !empty($_POST["series_pas"]) && !empty($_POST["number_pas"]) && !empty($_POST["subject"]) && !empty($_POST["city"]) && !empty($_POST["street"])&& !empty($_POST["house"]) && !empty($_POST["flat"])){
$surename = $_POST["surename"]; 
checkTheLetter($surename);
$name = $_POST["name"];
checkTheLetter($name);
$middlename = $_POST["middlename"];
checkTheLetter($middlename);
$birthday = $_POST["birthday"];
$series_pas = $_POST["series_pas"];
$number_pas = $_POST["number_pas"];
$subject = $_POST["subject"];
checkTheLetter($subject);
$city = $_POST["city"];
checkTheLetter($city);
$street = $_POST["street"];
checkTheLetter($street);
$house = $_POST["house"];
$flat = $_POST["flat"];
$date_start = date("Y-m-d");

if(!empty($_FILES["image"]["tmp_name"]))
$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
else
$image = null;

    if($_POST["gender"]==1){
        $gender = "М";
    }
    if($_POST["gender"]==2){
        $gender = "Ж";
    }

    $allowed = array('png', 'jpg');
    $image1 = $_FILES['image']['name'];
    $ext = pathinfo($image1, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed) && $image1!=null) {?>
        <h1 style="text-align:center; margin-top:50px">Ошибка!!! Убедитесь в правильности типа загружаемого изображения(png, jpg)</h1>
       <?php
    }
    else{
        $result = mysqli_query($link, "CALL addWorker('$image','$surename','$name','$middlename','$gender','$birthday','$series_pas','$number_pas','$subject','$city','$street','$house','$flat', '$date_start')");
    
    

        if(!empty($result)){?>
            <h1 style="text-align:center; margin-top: 80px">Работник успешно добавлен!<br> (Вы будете возвращены на страницу через 2 секунды)</h1>
            <?php
        }
        else 
        {?>
              <h1 style="text-align:center; margin-top: 80px">Ошибка добавления сотрудника!</h1>
           
           <?php
        }?>
        <meta http-equiv="refresh" content="0;url=Admin.php" />
    


   
    <?php
    }
}
else {
echo "Ошибка!!! Введены не все обязательные данные в поля!!! <br> (Вернитесь назад и заполните все ОБЯЗАТЕЛЬНЫЕ поля)";
}

mysqli_close($link);

?>
