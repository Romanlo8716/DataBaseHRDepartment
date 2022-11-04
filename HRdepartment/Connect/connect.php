<?php 

$link = mysqli_connect("localhost", "root", "", "hrdepartment");

if($link== False){
    echo "Соединение не удалось";
}
else{

$connection = mysqli_query($link, "select * from `people_table`");


}
?>