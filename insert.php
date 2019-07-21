<?php
$server="localhost";
$user="root";
$db="vcet";
session_start();
$link=mysqli_connect("localhost","root","","vcet");
if($link==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
$_SESSION['uname']=mysqli_real_escape_string($link,$_REQUEST['userid']);
$y=$_SESSION['uname'];
$password=mysqli_real_escape_string($link,$_REQUEST['password']);
$sql="INSERT INTO register(userid,password) VALUES ( '$y','$password') ";
if(mysqli_query($link, $sql)){
    header('Location:data1.php',true);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
?>