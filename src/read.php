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
<head>
<title>View </title>

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
     padding:30px;
    margin:0px auto;
 background-image: url("flower.jpg");

}
.design//30
{
margin:10px 0px 10px 0px;
}
.design input
{
background:none;
border:none;
font-size:large;
 display: inline-block;
        text-align: left;
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

</style>
</head>
<body bgcolor="white">

<a class="button" href="preview.php" > EDIT</a>
<form  action="edit.php" method="POST"><fieldset>
  <div class="design">
     <label><b style="padding-right: 41px;">First name:</b></label>
     <input type="text" name="fname" size="20" value='<?php print strtoupper($row['fname']);?>'' readonly >
      <label><b style="padding-right: 58px;padding-left:45px;">Last name:</b></label>
     <input type="text" name="lname"  size="20" value='<?php print strtoupper($row['lname']);?>' readonly >
     <br><lable><b style="padding-right: 41px;" >Roll number</b></lable>
     <input type="text" name="userid"  size="20"  value='<?php print $row['userid'];?>' readonly >
     
     <label><b style="padding-right: 58px;padding-left:40px;">Register Number:</b></label>
     <input type="text" name="regno" size="20"  value='<?php print strtoupper( $row['regno']);?>' readonly >
     <br><label><b padding-right: 70px;">DOB:</b></label>
     <input type="text" name="dob" value='<?php print  date('d/m/Y',strtotime($row['dob']));?>' readonly >
     <label><b style="padding-left: 130px;">Gender:</b></label>
     <input type="text" name="gender"  size="20"  value='<?php print strtoupper( $row['gender']);?>' readonly > <br>
     
    
     
     <label><b style="padding-right: 30px;">Father name:</b></label>
     <input type="text" name="faname"  size="20" value='<?php print strtoupper($row['faname']);?>' readonly >
     <label><b style="padding-left: 45px;padding-right: 3px;">Father Occupation:</b></label>
     <input type="text" name="faocc" size="20"  value='<?php print strtoupper( $row['faocc']);?>' readonly ><br>
     
     <label><b style="padding-right: 25px;">Mother name:</b></label>
     <input type="text" name="momname" size="20"  value='<?php print strtoupper( $row['momname']);?>' readonly >
     <label><b style="padding-left: 45px;">Mother Occupation:</b></label>
     <input type="text" name="momocc" size="20"  value='<?php print  strtoupper($row['momocc']);?>' readonly ><br>
     
     <label><b >Rural/Urban:</b></label>
     <input type="text" name="rur"  size="20" value='<?php print strtoupper( $row['rur']);?>' readonly ><br>
     <label><b style="padding-right: 40px;">Community:</b><lable>
     <input type="text" name="comm"  size="20" value='<?php print strtoupper( $row['comm']);?>' readonly >
     <label><b style="padding-left: 45px;">Management/Government:</b></label>
     <input type="text" name="mg"  size="20" value='<?php print strtoupper( $row['mg']);?>' readonly >
     <br> <label><b>Department:</b></label>
     <input type="text" name="dept"  size="20" value='<?php print strtoupper( $row['dept']);?>' readonly >
      <br>
     
  </div>   
    </fieldset>
   <div class="design">
     <fieldset>
     <legend> CONTACT</legend>

     <label><b>Phone Number:</b></label>
     <input type="text" name="phone"  size="20" value='<?php print strtoupper($row['phone']);?>' readonly >
     <label><b style="padding-left: 60px;">Parent Number:</b></label>
     <input type="text"  name="panum" size="20"  value='<?php print strtoupper($row['panum']);?>' readonly >
     <br><label><b >Landline:</b></label>
     <input type="text" name="landline"  size="20" value='<?php print $row['landline'];?>' readonly >

      <label><b style="padding-left: 105px;">Email:</b></label>
     <input type="email" name="email"  size="50" value='<?php print$row['email'];?>' readonly >
     <br><label><b  >Alternate Email:</b></label>
     <input type="email" name="mail"  size="50" value='<?php print $row['mail'];?>' readonly  >
     </br><label><b >Address:</b></label>
     <input type="text" name="addr"  size="60" value='<?php print strtoupper($row['addr']);?>' readonly ><br>
     </fieldset>

     <fieldset>
     <legend> CURRENT ACADEMIC DETAILS IN CGPA</legend>
    
     <label><b>GPA1:</b></label>
     <input type="text"  step="any"   size="20" name="gpa1"  value='<?php print strtoupper($row['gpa1']);?>' readonly  >
    <br> <label><b>GPA2:</b></label> 
     <input type="text"   step="any"  size="20" value='<?php print strtoupper($row['gpa2']) ;?>' readonly  name="gpa2">
    <br> <label><b>GPA3:</b></label>
     <input type="text"  step="any"  size="20" value='<?php print $row['gpa3'];?>' readonly    name="gpa3">
      <br><label><b>GPA4:</b></label>
     <input type="text"  step="any"  size="20" value='<?php print $row['gpa4'];?>' readonly  name="gpa4">
      <br><label><b>GPA5:</b></label>
     <input type="text"  step="any"  size="20" value='<?php print $row['gpa5'];?>' readonly  name="gpa5">
     <br><label><b>GPA6:</b></label>
     <input type="text"  step="any"  size="20" value='<?php print $row['gpa6'];?>' readonly   name="gpa6">
      <br><label><b>GPA7:</b></label>
     <input type="text"  step="any"  size="20" value='<?php print $row['gpa7'];?>' readonly  name="gpa7">
      <br><label><b>GPA8:</b></label>
     <input type="text" step="any" size="20"  value='<?php print $row['gpa8'];?>' readonly  name="gpa8">
      <br><label><b>CGPA:</b></label>
     <input type="text"  step="any" size="20"  value='<?php print $row['cgpa'];?>' readonly  name="cgpa"><br>
     </fieldset>

     <fieldset>
     <legend> ARREAR STATUS</legend>
     <label><b>Arrear:</b></label>
     <input type="text"  size="20"  value='<?php print $row['noar'];?>' readonly name="noar">
     <label><b  style="padding-left: 275px;">History Of Arrear:</b></label>
     <input type="text"  size="20"  value='<?php print strtoupper($row['hisarr']);?>' readonly name="hisarr">
     <br><label><b >CourseGap:</b></label>
     <input type="text"  size="20"  value='<?php print $row['gap'];?>' readonly name="gap">
     <label><b style="padding-left: 250px;">Status Of Arrear:</b></label>
     <input type="text" name="stsarr"  size="20" style="padding-right: 13px;" value='<?php print strtoupper( $row['stsarr']);?>' readonly >
      <br><label><b >Year Of Pass:</b></label>
     <input type="text" size="20"  name="ypass" value='<?php print $row['ypass'];?>' readonly >
      </fieldset>
     
    
    
    <fieldset>
     <legend> OTHER DETAILS</legend>
    
     <label><b > Xth year of pass:</b></label>
    <input type="text" name="xpass" size="10"value='<?php print $row['xpass'];?>' readonly >
   <br> <label><b > Xth Name of school:</b></label>
     <input type="text" size="50" value='<?php print strtoupper( $row['xsch']);?>' readonly  name="xsch">
     <br><label><b > Xth Board of study:</b></label>
     <input type="text" size="10" value='<?php print strtoupper( $row['xboard']);?>' readonly  name="xboard">
     <br><label><b >X mark:</b></label>
      <input type="text" size="10" value='<?php print $row['xmark'];?>' readonly  name="xmark">
     </br> <label><b >Medium Of Instruction:</b></label>
     <input type="text" size="20" name="ete" value='<?php print strtoupper($row['ete']);?>' readonly >
<br>
         
    <label><b> XIIth year of pass:</b></label>
     <input type="text"  size="20"  value='<?php print strtoupper($row['xiipass']);?>' readonly name="xiipass" >
     <br><label><b > XIIth Name of school:</b></label>
      <input type="text" size="50" value='<?php print strtoupper( $row['xiisch']);?>' readonly name="xiisch" >
    <br><label><b> XIIth Board of study:</b></label>
     <input type="text"  size="20"  value='<?php print strtoupper( $row['xiiboard']);?>' readonly name="xiiboard" >
     <br><label><b  >XII mark:</b></label>
     <input type="text"  size="30"  value='<?php print strtoupper($row['xiimark']);?>' readonly name="xiimark" >
      
    <br><label><b>12th Cutoff marks:</b></label>
   <input type="text" size="10" value='<?php print strtoupper( $row['cutoff']);?>' readonly name="cutoff" >
  </br> <label><b >Medium Of Instruction:</b></label>
     <input type="text" s size="20"  name="et" value='<?php print strtoupper($row['et']);?>' readonly >
</br>
     
     <label><b > Dipomo year of pass:</b></label>
     <input type="text"  size="20"  value='<?php print strtoupper($row['dippass']);?>' readonly  name="dippass">
      <br><label><b>Diplomo course:</b></label>
     <input type="text"  size="20"  name="diplomo" value='<?php print strtoupper( $row['diplomo']);?>' readonly >
     <br><label><b > Name of institute:</b></label>
      <input type="text"   size="20"  name="dipclg" value='<?php print strtoupper($row['dipclg']);?>' readonly >
     <br><label><b> percentage:</b></label>
      <input type="text"  size="20"  name="dipper" value='<?php print strtoupper($row['dipper']);?>' readonly >
    
        
     <br><label><b >PG specialize branch:</b></label>
      <input type="text"   size="20"  value='<?php print strtoupper( $row['branch']);?>' readonly name="branch" >
      <br><label><b > Name of institute for PG:</b></label>
      <input type="text"  size="20"  value='<?php print strtoupper($row['pgclg']);?>' readonly name="pgclg" >
       <br><label><b >Percentage:</b></label>
      <input type="text"   size="20"  value='<?php print strtoupper($row['pgper']);?>' readonly name="pgper" ><br>
     
       </fieldset>
      
      <fieldset>
      <legend> PLACEMENT DETAILS</legend>
      <label><b>Interested In Placements:</b></label>
      <input type="text"  size="20"  name="interest" value='<?php print strtoupper( $row['interest']);?>' readonly ><br>
  
      <label><b>Offer1:</b></label>
         <input type="text"  size="20" value='<?php print strtoupper( $row['offer1']);?>' readonly name="offer1" >
     </br> <label><b  >Offer2:</b></label>
    <input type="text" s size="20"  value='<?php print strtoupper($row['offer2']);?>' readonly name="offer2" >
       <br><label><b >Offer3:</b></label>
      <input type="text"  size="20"  value='<?php print strtoupper($row['offer3']);?>' readonly name="offer3" >
      </br><label><b >Offer4:</b></label>
    <input type="text"  size="20"  value='<?php print strtoupper($row['offer4']);?>' readonly name="offer4" >
       <br><label><b >Offer5:</b></label>
   <input type="text"  size="20"  value='<?php print strtoupper($row['offer5']);?>' readonly name="offer5" >
      </br>  <label><b >Offer opted:</b></label>
    <input type="text"  size="20"  value='<?php print strtoupper($row['opted']);?>' readonly name="opted" >
       </fieldset>
       
       <fieldset>
     <legend> ADDITIONAL DETAILS</legend>
     <label><b> Adhaar card number:</b ></label>
    <input type="text"  size="20" value='<?php print $row['aadhar'];?>'  readonly name="aadhar" ><br>
    
    <label><b> Pan card number:</b></label>
    <input type="text"  size="20" value='<?php print $row['pan'];?>' readonly name="pan" ><br>
   <label><b>passport number:</b></label>
    <input type="text"  size="20" value='<?php print $row['pas'];?>' readonly name="pas" ><br>
    
    
    <label> <b> Name of skills:</b></label>
    <input type="text"  size="20" value='<?php print strtoupper( $row['sknum']);?>' readonly name="sknum" >
<br><label><b >BEC Coure:</b></label>
     <input type="text"  size="20"  name="becgra" value='<?php print strtoupper($row['becgra']);?>' readonly >
   <br> <label><b style="padding-right: 13px;">Duration of Course:<b></label>
    <input type="text"  size="20" value='<?php print $row['dunm'];?>' readonly name="dunm" >
    <br><label><b style="padding-right: 13px;">Course vender:<b></label>
    <input type="text" size="20"  value='<?php print strtoupper( $row['skv']);?>' readonly name="skv" >
    </div>
    </fieldset>
   <br> 

       </div>
<a class="button" href="logout.php" > LOGOUT</a>
        
</form> 
</html>

<?php
mysqli_close($link); ?>
