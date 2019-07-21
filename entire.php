<?php
$servername = "localhost";
$username="root";
$db="vcet";
$mysqli=new mysqli($servername,$username,"",$db);
if($mysqli==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
//$db=mysqli_select_db('excel',$mysqli);

$user_query = $mysqli->query("SELECT * FROM data where ypass='{$_POST['year']}'");

// Write data to file

$columnHeader = ''; 
 
$columnHeader = "Roll number". "\t". "User Name" . "\t" . "Lastname" . "\t" . "REGNO" . "\t" . "Date Of Birth" . "\t"  . "Gender". "\t". "FatherName" . "\t" .  "Father Occupation" . "\t" . "Mother Name" . "\t" . "Mother Occupation" ."\t"."Community". "\t" . "Management/Government" ."\t". "rural/urban" . "\t"."Department"."\t"."phone"."\t"."Parents Number"."\t"."Landline"."\t"."Email"."\t"."Mail"."\t"."Address"."\t". "GPA 1"."\t" ."GPA 2"."\t"."GPA 3"."\t"."GPA 4"."\t"."GPA 5"."\t"."GPA 6"."\t"."GPA 7"."\t"."GPA 8"."\t"."CGPA" . "\t"."No.Of.Current.Arrear"."\t" ."History.Of.Arrear"."\t"."Course Gap"."\t". " Year Of Pass" . "\t"."Status of Arrear" ."\t"."Medium of Instruction in X th"."\t" ."X Year of Pass"."\t" ."X School Name"."\t" . "X Board" . "\t"."X Mark"."\t"."XII Year of Pass"."\t"."XII School Nmae" . "\t"."XII Board" . "\t"."XII Mark" .  "\t" ."XII Cutoff" . "\t" ."Medium of Instruction in XII th"."\t" ."Diplomo Year of Pass" . "\t" ."Diplomo Course Name" . "\t" ."Diplomo College Name" . "\t" ."Diplomo Percentage" . "\t" ."PG Branch" . "\t" ."PG College Name" . "\t" ."PG Percentage" . "\t" ."Interest in Placement" . "\t" ."OFFER 1" . "\t" ."OFFER 2" . "\t" ."OFFER 3" . "\t" ."OFFER 4" . "\t" ."OFFER 5" . "\t" ."Offer Opted" . "\t" ."Aadhar Number" . "\t" ."Pancard Number" . "\t" ."Passport Number" . "\t" ."Skills Name" . "\t" ."BEC Course Duration" . "\t" ."BEC Course Vendor" . "\t" ."BEC grade" ."\t"."College name"  ;
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
 
header("Content-Disposition: attachment; filename=Master_Reoprt.xls"); 
header ('Content-Transfer-Encoding: binary'); 

header ('Cache-Control: cache, must-revalidate');
header ('Pragma: public');
 
header("Expires: 0");
 echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>