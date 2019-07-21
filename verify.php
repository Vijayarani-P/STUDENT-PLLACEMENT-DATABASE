<?php
session_start();
$servername = "localhost";
$username="root";
$db="vcet";
$link=mysqli_connect($servername,$username,"",$db);
if($link==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
$_SESSION['uname']=mysqli_real_escape_string($link,$_REQUEST['userid']);
$y=$_SESSION['uname'];
$pass=mysqli_real_escape_string($link,$_REQUEST['password']);
$sql="SELECT * FROM register WHERE userid='".$y."'";
$result=mysqli_query($link,$sql);

if($result->num_rows >0){
$row= mysqli_fetch_assoc($result);
    if ($y==$row['userid']) {
        if($pass==$row['password']) {
        $view="SELECT * FROM data WHERE userid='".$y."'";
        $ans=mysqli_query($link,$view);
        
       if($ans->num_rows >0){
          header('Location:read.php');
       } 
        else
        {   header('Location:data1.php');
        }
       }
        else
{ 
           echo " Please try again";
 }
  }
}
else
{
echo "Please go back and SIGNUP";
}
mysqli_close($link);
?>