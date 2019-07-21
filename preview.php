 <?php
session_start();

$server="localhost";
$user="root";
$db="vcet";
$link=mysqli_connect("localhost","root","","vcet");

if($link==false)
{die("ERROR: could not connect ".mysqli_connect_error());}
else//10
{
$y=$_SESSION['uname'];
$sql="SELECT * FROM data WHERE data.userid='".$y."'";
$result=mysqli_query($link,$sql);
$row= mysqli_fetch_array($result);
} 
?>
<html>
<title>Edit</title>
<script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script>
<style>
form {
    border: 1px solid ;
     padding:20px;
    margin:0px auto;
 background-image: url("S.jpg");
}
.design//30
{
margin:10px 0px 10px 0px;
}

.design input[type="text"],[type="email"],[type="number"],[type="date"]
{
height:25px;
width:150px;

}
.design select
{
border:none;
 display: inline-block;
text-align: left;
font-size:large;
float:inline-end; 
margin-bottom:20px;
}
.design input[type="text"],[type="radio"],[type="email"],[type="date"]
{
border:none;
 display: inline-block;
text-align: left;
font-size:large;
float:inline-end; 
margin-bottom:20px;
}//40
.design label
{
font-size:large;
display: inline-block;
text-align: right;
float:inline-start;
}

.button {
    display: block;
    width: 115px;
    height: 25px;
    background: #4E9CAF;
    padding: 10px;
 
    text-align: center;
    border-radius: 5px;
    color: white;
margin-left:auto;
    font-weight: bold;
}
.button1 {
    display: block;
    width: 115px;
    height: 55px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
margin-right:auto;

    font-weight: bold;
}
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
}
.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}
.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}

</style>
<body bgcolor="white">
<form  action="edit.php" method="POST">
  <fieldset>
  <div class="design">
     <label><b style="padding-right: 41px;">First name:</b></label>
     <input type="text" name="fname"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)"
 value='<?php print $row['fname'];?>' >
      <label><b style="padding-right: 58px;padding-left:45px;">Last name:</b></label>
     <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" name="lname"  value='<?php print $row['lname'];?> '>
     <lable><b style="padding-left: 50px;">Roll number</b></lable>
     <input type="text" name="userid"  value='<?php print $row['userid'];?> ' ><br>
     
     <label><b>Register Number:</b></label>
     <input type="text" name="regno"  onkeypress="return (event.charCode >47 &&  event.charCode <58)" value='<?php print $row['regno'];?>' >
     <label><b style="padding-right: 98px;padding-left: 45px;" onkeypress="return (event.charCode >=48 && event.charCode <=57)";>DOB:</b></label>
    

<input type="date"  value="<?php echo date('Y-m-d',strtotime($row["dob"]))?>" name="dob" />



     <label><b style="padding-left: 76px;">Gender:</b></label>
     <input type="radio" name="gender" <?php echo ($row['gender'] == 'Female')? 'checked' : ''; ?> value="Female">Female
<input type="radio" name="gender" <?php echo ($row['gender'] == 'Male')? 'checked' : ''; ?> value="Male">Male
<input type="radio" name="gender" <?php echo ($row['gender'] == 'Other')? 'checked' : ''; ?> value="Other">Other   
     <br>
     <label><b style="padding-right: 30px;">Father name:</b></label>
     <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)"name="faname" value='<?php print $row['faname'];?> '>
     <label><b style="padding-left: 45px;padding-right: 3px;">Father Occupation:</b></label>
     <input type="text" name="faocc" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" value='<?php print $row['faocc'];?> '><br>
     
     <label><b style="padding-right: 25px;">Mother name:</b></label>
     <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" name="momname" value='<?php print $row['momname'];?> '>
     <label><b style="padding-left: 45px;">Mother Occupation:</b></label>
     <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" name="momocc" value='<?php print $row['momocc'];?> '><br>
     
     <label><b >Rural/Urban:</b></label>
      <select name="rur">
     
     <option value="Rural" <?php if($row['rur']=="Rural") echo 'selected="selected"'; ?>>Rural</option><br>
     <option value="Urban" <?php if($row['rur']=="Urban") echo 'selected="selected"'; ?>>Urban</option><br>
     </select>
    <label><b style="padding-left: 200px;">Community:</b><lable>
      <select name="comm" requiered>
    
    <option value="FC" <?php if($row['comm']=="FC") echo 'selected="selected"'; ?> >FC</option>
    <option value="BC" <?php if($row['comm']=="BC") echo 'selected="selected"'; ?> >BC</option>
    <option value="MBC" <?php if($row['comm']=="MBC") echo 'selected="selected"'; ?> >MBC</option>
    <option value="SC" <?php if($row['comm']=="SC") echo 'selected="selected"'; ?> >SC,ST</option>
    </select> <br>  <br>
    <label><b >Management/Government:</b></label>
    <select name="mg" >
     
     <option value="management" <?php if($row['mg']=="Management") echo 'selected="selected"'; ?> >Management</option><br>
     <option value="government" <?php if($row['mg']=="Government") echo 'selected="selected"'; ?>>Government</option><br>
     </select>
     <label><b style="padding-left: 45px;">Department:</b></label>
     <select name="dept" >
    <option value="CSE" <?php if($row['dept']=="CSE") echo 'selected="selected"'; ?>>CSE</option>
    <option value="ECE" <?php if($row['dept']=="ECE") echo 'selected="selected"'; ?> >ECE</option>
    <option value="EEE" <?php if($row['dept']=="EEE") echo 'selected="selected"'; ?>>EEE</option>
    <option value="MECH" <?php if($row['dept']=="MECH") echo 'selected="selected"'; ?> >MECH</option>
    <option value="IT" <?php if($row['dept']=="IT") echo 'selected="selected"'; ?> >IT</option>
    <option value="CIVIL" <?php if($row['dept']=="CIVIL") echo 'selected="selected"'; ?>>CIVIL</option>
    </select> 
  </div>   
    </fieldset>
   <div class="design">
     <fieldset>
     <legend> CONTACT</legend>
<div class="tooltip">
     <label><b>Phone Number:</b></label>
     <input type= "text" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="phone" value='<?php print $row['phone'];?> '>
<span class="tooltiptext">10 numbers only</span>
</div> 
<div class="tooltip">
     <label><b style="padding-left: 55px;">Parent Number:</b></label>
     <input type= "text" maxlength="10" name="panum" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value='<?php print $row['panum'];?> '>
<span class="tooltiptext">10 numbers only</span>
</div> 
<div class="tooltip">
     <label><b style="padding-left: 80px;">Landline:</b></label>
     <input type= "text" maxlength="10" name="landline" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  value='<?php print $row['landline'];?> '><br>
<span class="tooltiptext">10 numbers only</span>
</div> <br>
<br>
      <label><b style="padding-right: 61px;">Email:</b></label>
     <input type="email" size="20" name="email" style="width:200px" value='<?php print $row['email'];?> '>
     <label><b  style="padding-left: 55px;">Alternate Email:</b></label>
     <input type="email" size="20" name="mail"  style="width:200px" value='<?php print $row['mail'];?> ' ><br>
     <label><b>Address:</b></label><br>
     <input type="text" size="50" name="addr" style="width:600px;height: 100px" value='<?php print $row['addr'];?> '><br>
     </fieldset>

     <fieldset>
     <legend> CURRENT ACADEMIC DETAILS IN CGPA</legend>
     <b>GPA 1<b>
    <div class="tooltip"> <input type="text" onkeypress="return (event.charCode ==78 || event.charCode ==65) ||(event.charCode==110 || event.charCode==97)|| (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em" step="any"  name="gpa1"  value='<?php print $row['gpa1'];?> ' >
    <span class="tooltiptext">If Lateral entry type NA</span>
</div> <br><div class="tooltip"><b>GPA 2<b><input type="text" onkeypress="return (event.charCode ==78 || event.charCode ==65) ||(event.charCode==110 || event.charCode==97)||( event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em"  step="any" value='<?php print $row['gpa2'];?> ' name="gpa2">
     <span class="tooltiptext">If Lateral entry type NA</span>
</div> <br><b>GPA 3<b><input type="text" size="20"onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 "  style="width: 5em" step="any" value='<?php print $row['gpa3'];?> '   name="gpa3">
     <br> <b>GPA 4<b><input type="text" size="20"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em" step="any" value='<?php print $row['gpa4'];?> ' name="gpa4">
      <br><b>GPA 5<b><input type="text"  size="20" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em" step="any" value='<?php print $row['gpa5'];?> ' name="gpa5">
     <br> <b>GPA 6<b><input type="text" size="20"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em" step="any" value='<?php print $row['gpa6'];?> '  name="gpa6">
     <br> <b>GPA 7<b><input type="text" size="20"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em" step="any" value='<?php print $row['gpa7'];?> ' name="gpa7">
      <br><b>GPA 8<b><input type="text" size="20"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 "  style="width: 5em" step="any" value='<?php print $row['gpa8'];?> ' name="gpa8">
     <br> <b>CGPA<b><input type="text"  size="20" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em" step="any" value='<?php print $row['cgpa'];?> ' name="cgpa"><br>
     </fieldset>

     <fieldset>
     <legend> ARREAR STATUS</legend>
     <label><b>Arrear:</b></label>
     <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  style="width: 5em" value='<?php print $row['noar'];?>'   name="noar">
     <label><b  style="padding-left: 20px;">History Of Arrear:</b></label>
<input type="radio" name="hisarr" value="Yes" <?php echo ($row['hisarr'] == 'Yes')? 'checked' : ''; ?>>Yes
     <input type="radio" name="hisarr" value="No" <?php echo ($row['hisarr'] == 'No')? 'checked' : ''; ?>>No
     <label><b style="padding-left: 20px;">CourseGap:</b></label>
     <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57"   style="width: 5em" value='<?php print $row['gap'];?>'   name="gap">



     <label><b style="padding-left: 20px;">Status Of Arrear:</b></label>
     <input type="radio" name="stsarr" value="Yes" <?php echo ($row['stsarr'] == 'Yes')? 'checked' : ''; ?>>Yes
     <input type="radio" name="stsarr" value="No" <?php echo ($row['stsarr'] == 'No')? 'checked' : ''; ?>>No  <br>
     <label><b >Year Of Pass:</b></label>
     <input type="text" name="ypass" value='<?php print $row['ypass'];?> '><br>
      </fieldset>
     
    
    
    <fieldset>
     <legend> OTHER DETAILS</legend>
    
     <label><b > Xth year of pass:</b></label>
    <input type="text"  style="width: 5em" name="xpass" size="10"value='<?php print $row['xpass'];?>' >
   <br> <label><b > Xth Name of school:</b></label>
     <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)"value='<?php print $row['xsch'];?> ' name="xsch">
    <br> <label><b> Xth Board of study:</b></label>
     <select name="xboard" >
    <option value="ICSE" <?php if($row['xboard']=="ICSE") echo 'selected="selected"'; ?>>ICSE</option>
    <option value="CBSE" <?php if($row['xboard']=="CBSE") echo 'selected="selected"'; ?>>CBSE</option>
    <option value="Stateboard" <?php if($row['xboard']=="Stateboard") echo 'selected="selected"'; ?>>Stateboard</option>
      </select>
    </br> 
<div class="tooltip">
     <br><label><b >X mark:</b></label>
      <input type="text"  style="width: 5em" size="20" step="any" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||(event.charCode == 46 )"  value='<?php print $row['xmark'];?> ' name="xmark">
        <span class="tooltiptext">percentage</span>
</div> </br>
<label><b >Medium Of Instruction:</b></label>
      <select name="ete" >
   
    <option value="tamil"   <?php if($row['ete']=="Tamil") echo 'selected="selected"'; ?>>Tamil</option><br>
    <option value="english" <?php if($row['ete']=="English") echo 'selected="selected"'; ?>>English</option><br>
    </select><br>
     <div class="tooltip"> 
    <br><label><b> XIIth year of pass:</b></label>
     <input type="text"  style="width: 5em" value='<?php print $row['xiipass'];?>'   name="xiipass"  >
   <span class="tooltiptext">If Lateral entry type NA</span>
</div> <br> <div class="tooltip"> <label><b> XIIth Name of school:</b></label>
      <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" value='<?php print $row['xiisch'];?>'   name="xiisch"  >
   <span class="tooltiptext">If Lateral entry type NA</span>
</div> <br><div class="tooltip"> <label><b> XIIth Board of study:</b></label>
    <select name="xiiboard" >
    <option value="ICSE" <?php if($row['xiiboard']=="ICSE") echo 'selected="selected"'; ?>>ICSE</option>
    <option value="CBSE" <?php if($row['xiiboard']=="CBSE") echo 'selected="selected"'; ?>>CBSE</option>
    <option value="Stateboard" <?php if($row['xiiboard']=="Stateboard") echo 'selected="selected"'; ?>>Stateboard</option>
     <option value="NA" <?php if($row['xiiboard']=="NA") echo 'selected="selected"'; ?>>NA</option>
      </select>
    
     <span class="tooltiptext">If Lateral entry type NA</span>
</div>
    <br> <div class="tooltip"> <label><b>XII mark:</b></label>
     <input type="text" style="width: 5em" size="20"  step="any" value='<?php print $row['xiimark'];?>'   name="xiimark"  >
      <span class="tooltiptext">percentage</span>
</div> <br>
    
    <br><div class="tooltip"><label><b>12th Cutoff marks:</b></label>
   <input type="text" style="width: 5em" size="20"  step="any" value='<?php print $row['cutoff'];?>'   name="cutoff"  >
      <span class="tooltiptext">If Lateral entry type NA</span>
</div>  
</br><label><b >Medium Of Instruction:</b></label>
      <select name="et" >
   
    <option value="tamil"   <?php if($row['et']=="Tamil") echo 'selected="selected"'; ?>>Tamil</option><br>
    <option value="english" <?php if($row['et']=="English") echo 'selected="selected"'; ?>>English</option><br>
    <option value="NA" <?php if($row['et']=="CBSE") echo 'selected="selected"'; ?>>NA</option>
    </select>
     <br><div class="tooltip"><label><b> Dipomo year of pass:</b></label>
     <input type="text"  style="width: 5em" value='<?php print $row['dippass'];?> ' name="dippass">
     <span class="tooltiptext">If not type NA</span>
</div>   <br><div class="tooltip"> <label><b>Diplomo course:</b></label>
     <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)"size="10"  value='<?php print $row['diplomo'];?>'name="diplomo" >
    <span class="tooltiptext">If not type NA</span>
</div>    <br><div class="tooltip"><label><b> Name of institute:</b></label>
      <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)"  value='<?php print $row['dipclg'];?>' name="dipclg" >
   <span class="tooltiptext">If not type NA</span>
</div>    <br><div class="tooltip"> <label><b> Percentage:</b></label>
      <input type="text" style="width: 5em" size="20"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)||event.charCode == 46 " style="width: 5em" step="any" value='<?php print $row['dipper'];?>'name="dipper" >
   <span class="tooltiptext">If not type NA</span>
</div>    
        
    <br><div class="tooltip"> <label><b>PG specialize branch:</b></label>
      <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)"  size="10" value='<?php print $row['branch'];?>'   name="branch"  >
     <span class="tooltiptext">If not type NA</span>
</div> <br><div class="tooltip"><label><b> Name of institute:</b></label>
      <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" size="10" value='<?php print $row['pgclg'];?>'   name="pgclg"  >
   <span class="tooltiptext">If not type NA</span>
</div>  <br><div class="tooltip"> <label><b>Percentage:</b></label>
      <input type="text"  onkeypress="return (event.charCode >=48 && event.charCode <= 57)" style="width: 5em" value='<?php print $row['pgper'];?>'   name="pgper"  ><span class="tooltiptext">If not type NA</span>
</div>
     
       </fieldset>
      
      <fieldset>
      <legend> PLACEMENT DETAILS</legend>
      <label><b>Interested In Placements:</b></label>
      <input type="radio" name="interest"  <?php echo ($row['interest'] == 'Yes')? 'checked' : ''; ?> value="Yes">Yes
      <input type="radio" name="interest"  <?php echo ($row['interest'] == 'No')? 'checked' : ''; ?> value="No">No<br><br>
  
      <label><b>Offers:</b></label>
         <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" size="10"size="10" value='<?php print $row['offer1'];?>'   name="offer1"  >
      
    <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="10"size="10" value='<?php print $row['offer2'];?>'   name="offer2"  >
       
      <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="10" size="10" value='<?php print $row['offer3'];?>'   name="offer3"  >
      
    <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" size="10"size="10" value='<?php print $row['offer4'];?>'   name="offer4"  >
       
   <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" size="10" size="10" value='<?php print $row['offer5'];?>'   name="offer5"  ><br><br>
        <label><b>Offer opted:</b></label>
    <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="10"size="10" value='<?php print $row['opted'];?>'   name="opted"  >
       </fieldset>
       
       <fieldset>
     <legend> ADDITIONAL DETAILS</legend>
     <b> Adhaar card number:</b >
  <div class="tooltip">  <input type="text"  value='<?php print $row['aadhar'];?>' name="aadhar"  ><span class="tooltiptext">If not type NA</span>
</div>
    
    <b > Pan card number:</b>
   <div class="tooltip"> <input type="text"  value='<?php print $row['pan'];?>'   name="pan"  ><span class="tooltiptext">If not type NA</span>
</div>
   <b >passport number:</b>
  <div class="tooltip">  <input type="text" value='<?php print $row['pas'];?>'   name="pas"  ><span class="tooltiptext">If not type NA</span>
</div><br><br>
    
    <div class="tooltip">
    <b style="padding-right:50px;"> Name of skill:</b>
    <input type="text"  size="10" value='<?php print $row['sknum'];?>'   name="sknum"  ><span class="tooltiptext">If not type NA</span></div>
    <b >BEC :<b>
    <select name="becgra" required>
 <option value="NA" <?php if($row['becgra']=="NA") echo 'selected="selected"'; ?> >NA</option>
    <option value="B1" <?php if($row['becgra']=="B1") echo 'selected="selected"'; ?> >B1</option>
    <option value="B2"  <?php if($row['becgra']=="B2") echo 'selected="selected"'; ?> >B2</option>
    <option value="A2" <?php if($row['becgra']=="A2") echo 'selected="selected"'; ?> >A2</option>
    <option value="A1" <?php if($row['becgra']=="A1") echo 'selected="selected"'; ?> >A1</option>
     <option value="C1" <?php if($row['becgra']=="C1") echo 'selected="selected"'; ?> >C1</option>
    <option value="C2" <?php if($row['becgra']=="C2") echo 'selected="selected"'; ?> > C2</option>
    </select> <br>  <br>
    
<div class="tooltip">
    <b >Duration of course:<b>
    <input type="text" value='<?php print $row['dunm'];?>'   name="dunm"  >
    <span class="tooltiptext">If not type NA</span></div><b >Course vender:<b>
   <div class="tooltip"> <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" size="10" value='<?php print $row['skv'];?>'   name="skv"  >
   <span class="tooltiptext">If not type NA</span> </div>
    </fieldset>
   <br> 

     <br> 
<input type="submit"  class="button1" value="SAVE">
<a class="button" href="logout.php" > LOGOUT</a>
  
         </div>
</form> 
</html>
<?php
mysqli_close($link); ?>