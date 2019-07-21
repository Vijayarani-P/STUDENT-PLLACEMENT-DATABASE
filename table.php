<?php
$server="localhost";
$user="root";
$db="vcet";
$link=mysqli_connect($server,$user,"",$db);
if($link==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
$mysql = "CREATE TABLE register (userid varchar(30)primary key,password varchar(30))";
if(mysqli_query($link, $mysql)){
    echo "table created";
} else{
    echo 'ERROR'. $link->error;
}
 
mysqli_close($link);
?>