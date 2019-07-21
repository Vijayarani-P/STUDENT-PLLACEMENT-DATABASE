<?php
$server="localhost";
$user="root";
$db="vcet";
$link=mysqli_connect($server,$user,"",$db);
if($link==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
error_reporting(E_ALL ^ E_NOTICE); 
$userid=$_POST['userid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$regno=$_POST['regno'];
$dob =$_POST['dob'];
$gender=$_POST['gender'];
$faname=$_POST['faname'];
$faocc=$_POST['faocc'];
$momname=$_POST['momname'];
$momocc=$_POST['momocc'];
$comm=$_POST['comm'];
$mg=$_POST['mg'];
$rur=$_POST['rur'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$panum=$_POST['panum'];
$landline=$_POST['landline'];
$email=$_POST['email'];
$mail=$_POST['mail'];
$addr=$_POST['addr'];
$gpa1=$_POST['gpa1'];
$gpa2=$_POST['gpa2'];
$gpa3=$_POST['gpa3'];
$gpa4=$_POST['gpa4'];
$gpa5=$_POST['gpa5'];
$gpa6=$_POST['gpa6'];
$gpa7=$_POST['gpa7'];
$gpa8=$_POST['gpa8'];
$cgpa=$_POST['cgpa'];
$noar=$_POST['noar'];
$hisarr=$_POST['hisarr'];
$gap=$_POST['gap'];
$stsarr=$_POST['stsarr'];
$ypass=$_POST['ypass'];
$ete =$_POST['ete'];
$xpass=$_POST['xpass'];
$xsch=$_POST['xsch'];
$xboard=$_POST['xboard'];
$xmark=$_POST['xmark'];
$xiipass=$_POST['xiipass'] ;
$xiisch=$_POST['xiisch'];
$xiiboard=$_POST['xiiboard'];
$xiimark=$_POST['xiimark'];
$cutoff=$_POST['cutoff'];
$et=$_POST['et'];
$dippass=$_POST['dippass'];
$diplomo=$_POST['diplomo'];
$dipclg=$_POST['dipclg'];
$dipper=$_POST['dipper'];
$branch=$_POST['branch'];
$pgclg=$_POST['pgclg'];
$pgper=$_POST['pgper'];
$interest=$_POST['interest'];
$offer1=$_POST['offer1'];
$offer2=$_POST['offer2'];
$offer3=$_POST['offer3'];
$offer4=$_POST['offer4'];
$offer5=$_POST['offer5'];
$opted=$_POST['opted'];
$aadhar=$_POST['aadhar'];
$pan=$_POST['pan'];
$pas=$_POST['pas'];
$sknum=$_POST['sknum'];
$becgra=$_POST['becgra'];
$dunm=$_POST['dunm'];
$skv=$_POST['skv'];
$sql="INSERT INTO data (userid ,fname ,lname ,regno ,dob,gender ,faname,faocc,momname,momocc,comm,mg,rur,dept,phone,panum,landline,email,mail,addr,gpa1,gpa2,gpa3,gpa4,gpa5,gpa6,gpa7,gpa8,cgpa,noar,hisarr,gap,stsarr,ypass,ete,xpass ,xsch ,xboard ,xmark ,xiipass,xiisch ,xiiboard, xiimark ,cutoff ,et,dippass ,diplomo ,dipclg ,dipper ,branch ,pgclg ,pgper ,interest ,offer1 ,offer2 ,offer3 ,offer4 ,offer5,opted ,aadhar ,pan ,pas ,sknum,becgra,dunm ,skv) VALUES ( '$userid' ,'$fname' ,'$lname' ,'$regno ','$dob','$gender','$faname' ,'$faocc' ,'$momname' ,'$momocc' ,'$comm' ,'$mg' ,'$rur' ,'$dept','$phone','$panum' ,'$landline' ,'$email' ,'$mail' ,'$addr' ,'$gpa1' ,'$gpa2' ,'$gpa3' ,'$gpa4' ,'$gpa5' ,'$gpa6' ,'$gpa7' ,'$gpa8 ','$cgpa' ,'$noar' ,'$hisarr' ,'$gap' ,'$stsarr','$ypass' ,'$ete' ,'$xpass' ,'$xsch' ,'$xboard' ,'$xmark' ,'$xiipass','$xiisch ','$xiiboard' ,'$xiimark' ,'$cutoff','$et' ,'$dippass' ,'$diplomo ','$dipclg' ,'$dipper' ,'$branch' ,'$pgclg' ,'$pgper' ,'$interest' ,'$offer1' ,'$offer2' ,'$offer3' ,'$offer4' ,'$offer5' ,'$opted' ,'$aadhar','$pan' ,'$pas' ,'$sknum','$becgra' ,'$dunm' ,'$skv') ";
if(mysqli_query($link, $sql)){
    header('Location:read.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

// close connection

?>