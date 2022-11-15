<?php 

$link = mysqli_connect("localhost", "root", "", "hrdepartment");

if($link== False){
    echo "Соединение не удалось";
}
else{

$connection = mysqli_query($link, "select * from `people_table`");


}

function convertWordWrap(string $text){
    $consul = wordwrap($text, 90, "\n \n", 1);
    $consul = htmlentities($consul);
    $consul = nl2br($consul);
    return $consul;
   }
?>