<?php
$servername = "localhost";
$username="root";
$db="vcet";
$mysqli=new mysqli($servername,$username,"",$db);
if($mysqli==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
 $sql   = "select regno,fname,lname,gender,dob,email,phone,noar,xmark,xiimark,cgpa,dept FROM data WHERE  (offer1 is not null  OR  offer2 is not null OR offer3 is not null OR offer4 is not null OR offer5 is not null OR opted is not null  ) AND ypass='{$_POST['year']}' ";
$user_query= mysqli_query($mysqli, $sql);

$columnHeader = ''; 

$columnHeader = "REGNO" . "\t" . "User Name" . "\t" . "Lastname" . "\t" . "Gender". "\t" . "Date Of Birth" . "\t" . "Email" . "\t" . "Phone" . "\t" . "No Of Current Arrear" . "\t" . "X mark" . "\t" . "XII mark" . "\t" . "CGPA" . "\t" . "Branch" . "\t". "College Name" . "\t" ;
$setData='';
while ($rec = mysqli_fetch_row($user_query)) {  
  
  $rowData = '';  
  
  foreach ($rec as $value) {  
    
    $value = '"' . $value . '"' . "\t";  
   
     $rowData .= $value;  
   
 }  
 
$rowData .="VCET";
   $setData .= trim($rowData) . "\n"; 
 
}
header("Content-type: application/vnd.ms-excel.worksheet"); 
 
header("Content-Disposition: attachment; filename=Placed_Reoprt.xls"); 
header ('Content-Transfer-Encoding: binary'); 

header ('Cache-Control: cache, must-revalidate');
header ('Pragma: public');
 
header("Expires: 0");
 echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>
