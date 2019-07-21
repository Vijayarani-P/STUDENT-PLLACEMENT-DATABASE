<?php
$y=$_POST['year'];
$servername = "localhost";
$username="root";
$db="vcet";
$mysqli=new mysqli($servername,$username,"",$db);
if($mysqli==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
//$db=mysqli_select_db('excel',$mysqli);


$user_query = $mysqli->query("SELECT regno,fname,lname,gender,dob,email,phone,noar,xmark,xiimark,cgpa,dept FROM data WHERE cgpa>='{$_POST['cg']}' AND noar=0 AND ypass='{$_POST['year']}'");

// Write data to file

$columnHeader = ''; 
 
$columnHeader = "REGNO" . "\t" . "User Name" . "\t" . "Lastname" . "\t" . "Gender". "\t" . "Date Of Birth" . "\t" . "Email" . "\t" . "Phone" . "\t" . "No Of Current Arrear" . "\t" . "X mark" . "\t" . "XII mark" . "\t" . "CGPA" . "\t" . "Branch" . "\t". "College Name" . "\t" ;
$setData='';$setData='';
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
 
header("Content-Disposition: attachment; filename=Eligibility_Reoprt.xls"); 
header ('Content-Transfer-Encoding: binary'); 

header ('Cache-Control: cache, must-revalidate');
header ('Pragma: public');
 
header("Expires: 0");
 echo ucwords($columnHeader) . "\n" . $setData . "\n";;
?>



