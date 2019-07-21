<?php
$server="localhost";
$user="root";
$db="vcet";
$link=mysqli_connect($server,$user,"",$db);
if($link==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
$mysql= "CREATE TABLE data (userid varchar(30)primary key,fname varchar(30),lname varchar(30),regno bigint(30)unique,dob date,gender varchar(10),faname varchar(30),faocc varchar(30),momname varchar(30),momocc varchar(30),comm varchar(10),mg varchar(30),rur varchar(30),dept varchar(10),phone bigint(10),panum bigint(10),landline bigint(10),
email varchar(50),mail varchar(50),addr varchar(255),gpa1 varchar(5),gpa2 varchar(5),gpa3 decimal(5,3),gpa4 decimal(5,3),gpa5 decimal(5,3),gpa6 decimal(5,3),gpa7 decimal(5,3),gpa8 decimal(5,3),cgpa decimal(5,3),noar int(10),hisarr varchar(30),gap int(10),ypass int(10),stsarr varchar(10),
ete varchar(10),xpass int(5),xsch varchar(30),xboard varchar(30),xmark decimal(5,3),xiipass varchar(5),xiisch varchar(30),xiiboard varchar(30),xiimark varchar(5),cutoff varchar(5),et varchar(10),dippass varchar(5),diplomo varchar(20),dipclg varchar(50),dipper varchar(5),branch varchar(20),pgclg varchar(50),
pgper varchar(5),interest varchar(10),offer1 varchar(30),offer2 varchar(30),offer3 varchar(30),offer4 varchar(30),offer5 varchar(30),opted varchar(30),aadhar varchar(30),pan varchar(30),pas varchar(30),sknum varchar(30),dunm varchar(30),skv varchar(30),becgra varchar(30) )";

if(mysqli_query($link, $mysql)){
    echo "table created";
} else{
    echo 'ERROR'. $link->error;
}
 
mysqli_close($link);
?>
