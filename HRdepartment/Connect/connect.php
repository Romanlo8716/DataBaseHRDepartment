<?php 

$link = mysqli_connect("localhost", "root", "", "hrdepartment");

if($link== False){
    echo "Соединение не удалось";
}
else{

$connectionWorkers = mysqli_query($link, "select * from `people_table`");
$connectionDepartments = mysqli_query($link, "select * from `department`");

}

function convertWordWrap(string $text){
    $consul = wordwrap($text, 90, "\n \n", 1);
    $consul = htmlentities($consul);
    $consul = nl2br($consul);
    return $consul;
   }

function numberEmployeesForDepartment($query){
    
    $row = mysqli_fetch_assoc($query);
    $count = $row['count'];
    return $count;
}

function checkTheLetter($text){
    for ($i=0;$i<mb_strlen($text); $i++)
    
    if (is_numeric($text[$i])){
        echo "Ошибка!!! Проверьте на правильность вводимых БУКВЕННЫХ данных";
        exit();
    }
    
    }

?>