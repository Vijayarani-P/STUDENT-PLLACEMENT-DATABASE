    <?php
	session_start();

$y=$_SESSION['uname'];


?>
<!DOCTYPE html>
<html>
<title>WELCOME TO PLACEMENT SET</title>
<script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}

    function ShowHideDiv() {
        var ddaadhar = document.getElementById("ddaadhar");
        var dvaadhar = document.getElementById("dvaadhar");
        dvaadhar.style.display = ddaadhar.value == "Y" ? "block" : "none";
        
         var ddpan = document.getElementById("ddpan");
        var dvpan = document.getElementById("dvpan");
        dvpan.style.display = ddpan.value == "Y" ? "block" : "none";
        
        var ddpas = document.getElementById("ddpas");
        var dvpas = document.getElementById("dvpas");
        dvpas.style.display = ddpas.value == "Y" ? "block" : "none";
        
        var ddskil= document.getElementById("ddskil");
        var dvskil = document.getElementById("dvskil");
        dvskil.style.display = ddskil.value == "Y" ? "block" : "none";
     
        var ddoffer= document.getElementById("ddoffer");
        var doffer = document.getElementById("doffer");
        doffer.style.display = ddoffer.value == "Y" ? "block" : "none";
    
        var ddpg= document.getElementById("ddpg");
        var dpg = document.getElementById("dpg");
        dpg.style.display = ddpg.value == "Y" ? "block" : "none";

        
        var dddip= document.getElementById("dddip");
        var ddip = document.getElementById("ddip");
        ddip.style.display = dddip.value == "Y" ? "block" : "none";

    }


</script>

<style>
form {
    border: 1px solid ;
     padding: 30dp;
    margin:0px auto;
background-image:url("pattern.jpg");
}
.design input[type="text"],[type="email"],[type="number"],[type="date"]
{
height:25px;
width:150px;

}
.design
{
margin:10px 0px 10px 0px;
}

.design input
{
 display: inline-block;
        text-align: left;
       float:inline-end; 
margin-bottom:20px;
}

.design label
{
display: inline-block;
        text-align: right;
        float:inline-start;
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


.design input[type="submit"]
{
    display: block;
    width: 115px;
    height: 50px;
    background:	#007FFF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white; 
      font-weight: bold;
    
}

.button {
    display: block;
    width: 115px;
    height: 25px;
    background:	#007FFF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
margin-left:auto;
    font-weight: bold;
}
</style>
<style>
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


<a class="button" href="logout.php" > LOGOUT</a>

<form action="datainsert.php" method="POST" >

  <fieldset>
  <div class="design">
     <label ><b style="padding-right: 45px;">First name:</b></label>
     <input type="text" name="fname"     onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)"  required>
     <label><b style="padding-right: 58px;padding-left: 42px;">Last name:</b></label>
     <input type="text" name="lname" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
     <label><b style="padding-left:  53px;padding-right:10px;">Roll number</b></label>
     <input type="text" value='<?php print $y;?>' name="userid" ><br>
     
     <label><b>Register Number:</b></label>
     <input type="number"  name="regno" required>
     <label><b style="padding-right: 98px;padding-left: 45px;">DOB:</b></label>
     <input type="date"  name="dob" required>
     <label><b style="padding-left: 50px;">Gender:</b></label>
     <input type="radio" name="gender" value="Male" required> Male
     <input type="radio" name="gender" value="Female" required> Female
     <input type="radio" name="gender" value="Other" required> Other<br>
     
    
     
     <label><b style="padding-right: 30px;">Father name:</b></label>
     <input type="text" name="faname" onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" required>
     <label><b style="padding-left: 45px;padding-right: 3px;">Father Occupation:</b></label>
     <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" name="faocc" required>
     <label><b style="padding-right: 30px;">Medium of instruction</b></label>
	 <select>
     <option value="">"Select"<option>
    <option value="Tamil">Tamil</option><br>
    <option value="English">English</option><br>
    </select><br>
     <label><b style="padding-right: 25px;">Mother name:</b></label>
     <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" name="momname" required>
     <label><b  style="padding-left: 45px;">Mother Occupation:</b></label>
     <input type="text" name="momocc" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" required>
     
     <label><b style="padding-left: 50px;">Rural/Urban:</b></label>
     <select name="rur"  required>
     <option value="">select</option>
     <option value="Rural">Rural</option><br>
     <option value="Urban">Urban</option><br>
     </select><br>

     <label><b style="padding-right: 40px;">Community:</b><label>
    <select name="comm"  required>
    <option value="" >select</option>
    <option value="FC" >FC</option>
    <option value="BC" >BC</option>
    <option value="MBC" >MBC</option>
    <option value="SC" >SC,ST</option>
    </select>     
     <label><b style="padding-left: 130px;">Management/Government:</b></label>
     <select name="mg"  required>
     <option value="">select</option><br>
     <option value="Management">Management</option><br>
     <option value="Government">Government</option><br>
     </select>
     <label><b style="padding-left: 55px;">Department:</b></label>
     <select name="dept"  required>
    <option value="">select</option>
    <option value="CSE">CSE</option>
    <option value="ECE" >ECE</option>
    <option value="EEE" >EEE</option>
    <option value="MECH" >MECH</option>
    <option value="IT" >IT</option>
    <option value="CIVIL" >CIVIL</option>
    </select> 


  </div>   
    </fieldset>
   <div class="design">
     <fieldset>
     <legend> CONTACT</legend>
<div class="tooltip">
<label><b>Phone Number:</b></label>
     <input type="number"  pattern="[0-9]{10}" required  name="phone">
<span class="tooltiptext">10 numbers only</span>
</div> 
     <div class="tooltip">
     <label><b style="padding-left: 55px;">Parent Number:</b></label>
     <input type="number" pattern="[0-9]{10}" required name="panum">
<span class="tooltiptext">10 numbers only</span>
</div>
     
     <div class="tooltip">
     <label><b style="padding-left: 80px;">Landline:</b></label>
     <input type="number" pattern="[0-9]{10}" name="landline"><br>
<span class="tooltiptext">10 numbers only</span>
</div>
      <br><label><b style="padding-right: 61px;">Email:</b></label>
     <input type="email" name="email" required>
     <label><b style="padding-left: 55px;">Alternate Email:</b></label>
     <input type="email" name="mail"  required><br>
     <label><b>Address:</b></label><br>
     <textarea rows="4" cols="35" name="addr" required>
     </textarea><br>
     </fieldset>

     <fieldset>
     <legend> CURRENT ACADEMIC DETAILS IN CGPA</legend>
     <b>GPA<b><br>

     <div class="tooltip">
    <input type="text"  onkeypress="return (event.charCode ==78 || event.charCode ==65) ||(event.charCode==110 || event.charCode==97)|| (event.charCode==46)|| (event.charCode >47 ||  event.charCode <58)"  placeholder="1st" style="width: 5em"  name="gpa1"> 
<span class="tooltiptext">If Lateral entry type NA</span>
</div>
     <div class="tooltip">     
<input type="text"    onkeypress="return(event.charCode ==78 || event.charCode ==65)||(event.charCode==46) ||(event.charCode==110 || event.charCode==97)|| (event.charCode >47 && event.charCode <58)" placeholder="2nd" style="width: 5em" name="gpa2">
<span class="tooltiptext">If Lateral entry type NA</span>
</div>    
 <input type="number"min="0" max="10" placeholder="3rd" style="width: 5em" step="any"  name="gpa3">
     <input type="number"min="0" max="10"  placeholder="4th" style="width: 5em" step="any" name="gpa4">
     <input type="number"min="0" max="10" placeholder="5th" style="width: 5em" step="any" name="gpa5">
     <input type="number" min="0" max="10"  placeholder="6th" style="width: 5em" step="any"   name="gpa6">
     <input type="number" min="0" max="10" placeholder="7th" style="width: 5em" step="any" name="gpa7">
     <input type="number" min="0" max="10" placeholder="8th" style="width: 5em"  step="any" name="gpa8">
     <input type="number" min="0" max="10" placeholder="CGPA" style="width: 5em" step="any" name="cgpa" required><br>
     </fieldset>

     <fieldset>
     <legend> ARREAR STATUS</legend>
    <div class="tooltip">
     <label><b>Arrear:</b></label>
     <input type="number"  required name="noar"><br>
<span class="tooltiptext">Number of Current Arrears</span>
</div>
     <label><b style="padding-left: 20px;">History Of Arrear:</b></label>
     <input type="radio" name="hisarr" value="Yes" required> Yes
     <input type="radio" name="hisarr" value="No" required> No
     <label><b style="padding-left: 20px;">CourseGap:</b></label>
     <input type="number" style="width: 5em" name="gap" required>
     <label><b style="padding-left: 20px;">Status Of Arrear:</b></label>
     <input type="radio" name="stsarr" value="Yes" required="required">Yes
     <input type="radio" name="stsarr" value="No" required="required">No
     <br><label>Year Of Pass:</b></label>
      <input type="text" size="5" value='<?php if($y[2]=='L'||$y[2]=='l'){ $fstchar = (substr($y,0,2)+3);}else{$fstchar = (substr($y,0,2)+4);}print "20".$fstchar;?>' name="ypass">
     </fieldset>
     
    
    
    <fieldset>
     <legend> OTHER DETAILS</legend>
    <label><b style="padding-right: 13px;"> Xth year of pass:</b></label>
    <input type="number" style="width: 5em" " name="xpass" required>
    <label><b style="padding-right: 13px;"> Xth Name of school:</b></label>
     <input type="text"  required onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)"   name="xsch">
     <label><b style="padding-right: 13px;"> Xth Board of study:</b></label>
     <select name="xboard"  requiered>
<option value="" >Select</option>
    <option value="Stateboard">Stateboard</option>
    <option value="ICSE" >ICSE</option>
    <option value="CBSE" >CBSE</option>
    </select> 
     <div class="tooltip">
    <label><b style="padding-right: 13px;">X mark:</b></label>
      <input type="number" step="any" style="width: 5em" required name="xmark">
<span class="tooltiptext">percentage</span>
</div><br><div class="tooltip"> 
<label><b style="padding-left: 50px;">Medium Of Instruction:</b></label>
     <select name="ete" required>
     <option value="">"Select"<option>
    <option value="Tamil">Tamil</option><br>
    <option value="English">English</option><br>
    </select><br>

    <label><b> XIIth year of pass:</b></label>
     <input type="text"  onkeypress="return (event.charCode ==78 || event.charCode ==65)  ||(event.charCode==110 || event.charCode==97)|| (event.charCode >47 && event.charCode <58)"style="width: 5em" required name="xiipass">
     <span class="tooltiptext">If Lateral entry type NA</span>
</div> <div class="tooltip">
<label><b> XIIth Name of school:</b></label>
      <input type="text"  required onkeypress="return (event.charCode ==78 || event.charCode ==65) ||(event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)"  name="xiisch">
   <span class="tooltiptext">If Lateral entry type NA</span>
</div> 
 <label><b> XIIth Board of study:</b></label>
     <select name="xiiboard" required>
<option value="" >Select</option>
    <option value="Stateboard">Stateboard</option>
    <option value="ICSE" >ICSE</option>
    <option value="CBSE" >CBSE</option>
<option value="NA">NA</option>
    </select> 

     <div class="tooltip">   
 <label><b>XII mark:</b></label>
     <input type="text"  style="width: 5em" onkeypress="return (event.charCode ==78 || event.charCode ==65)  ||(event.charCode==46) ||(event.charCode==110 || event.charCode==97)|| (event.charCode >47 && event.charCode <58)" required name="xiimark" >
     <span class="tooltiptext">percentage</span>
</div> <br><div class="tooltip">
    <label><b>12th Cutoff marks:</b></label>
   <input type="text"  onkeypress="return  (event.charCode ==78 || event.charCode ==65)  ||(event.charCode==46) ||(event.charCode==110 || event.charCode==97)|| (event.charCode >47 && event.charCode <58)" required style="width: 5em"  name="cutoff"><br>
    <span class="tooltiptext">If Lateral entry type NA</span>
</div>  
<label><b style="padding-left: 50px;">Medium Of Instruction:</b></label>
     <select name="et" required>
     <option value="">"Select"<option>
    <option value="Tamil">Tamil</option><br>
    <option value="English">English</option>
    <option value="NA">NA</option><br>
    </select><br>

    <b>Did you pursue diplomo course?:</b >
    <select id = "dddip"  required onchange = "ShowHideDiv()">
        <option value="">select</option>
        <option value="Y">view</option>            
    </select>
    <div id="ddip" style="display:none">
<div class="tooltip">
     <label><b> Dipomo year of pass:</b></label>
     <input type="text"  onkeypress="return  (event.charCode ==78 || event.charCode ==65)  ||(event.charCode==46) ||(event.charCode==110 || event.charCode==97)|| (event.charCode >47 && event.charCode <58)"  style="width: 5em" name="dippass">
<span class="tooltiptext">If not type NA</span>
</div>
<div class="tooltip">
<label><b style="padding-left: 30px;">Diplomo course:</b></label>
      <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="8" name="diplomo">
<span class="tooltiptext">If not type NA</span>
</div>
<div class="tooltip"> 
     <label><b style="padding-left: 30px;"> Name of institute:</b></label>
      <input type="text"  onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" size="8" name="dipclg">
    <br>
<span class="tooltiptext">If not type NA</span>
</div>
<div class="tooltip">
 <label><b > percentage:</b></label>
      <input type="text"  style="width: 5em" onkeypress="return  (event.charCode ==78 || event.charCode ==65)  ||(event.charCode==46) ||(event.charCode==110 || event.charCode==97)|| (event.charCode >47 && event.charCode <58)"name="dipper">
     </div>
        
 
     <b >Are you a PG student?:</b >
        <select id = "ddpg"  required onchange = "ShowHideDiv()">
        <option value="">select</option>
        <option value="Y">View</option>            
    </select>
     <div id="dpg" style="display:none">
<div class="tooltip">
     <label><b style="padding-right:20px;"> specialize branch:</b></label>
      <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="6" name="branch">
<span class="tooltiptext">If not type NA</span>
</div><div class="tooltip">      
<label><b style="padding-left: 30px;"> Name of institute:</b></label>
      <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" size="8" name="pgclg">
<span class="tooltiptext">If not type NA</span>
</div><div class="tooltip">
      <label><b style="padding-left: 30px;">percentage:</b></label>
      <input type="text"onkeypress="return  (event.charCode ==78 || event.charCode ==65)  ||(event.charCode==46) ||(event.charCode==110 || event.charCode==97)|| (event.charCode >47 && event.charCode <58)" style="width: 5em" name="pgper"><br>
     </div>
       </fieldset>
      
      <fieldset>
      <legend> PLACEMENT DETAILS</legend>
      <label><b>Interested In Placements:</b></label><br>
      <input type="radio" name="interest" required="required" value="Yes">Yes
      <input type="radio" name="interest" required="required" value="No">No<br>
  
       <b>Do you have any offer?:</b >
       <select id = "ddoffer" margin-bottom="10px" onchange = "ShowHideDiv()">
        <option value="N">No</option>
        <option value="Y">Yes</option>            
    </select>
         <div id="doffer" style="display:none">

      
         <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91)||(event.charCode==32) || (event.charCode > 96 && event.charCode < 123)" placeholder="offer 1" size="3" name="offer1">
      
    <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="3" placeholder="offer 2"  name="offer2">
       
      <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)"size="3" placeholder="offer 3"  name="offer3">
      
    <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="3" placeholder="offer 4"  name="offer4">
       
   <input type="text"onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="3" placeholder="offer 5"  name="offer5">
        
    <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) ||(event.charCode==32)|| (event.charCode > 96 && event.charCode < 123)" size="5" placeholder="offeropted"  name="opted"><br>
       </div></fieldset>
       
       <fieldset>
     <legend> ADDITIONAL DETAILS</legend>
     <b>Do you have Adhaar card?:</b >
    <select id = "ddaadhar"   required margin-bottom="10px"onchange = "ShowHideDiv()">
        <option value="">select</option>
        <option value="Y">Yes</option>            
    </select>
    <div id="dvaadhar" style="display: none">
 <div class="tooltip">
    <input type="text" placeholder="aadhar number" name="aadhar" />
<span class="tooltiptext">If not type NA</span></div>
    </div>
    <b>Do you have Pan card?:</b>
    <select id = "ddpan"  required onchange = "ShowHideDiv()">
        <option value="">select</option>
        <option value="Y">Yes</option>            
    </select>
    <div id="dvpan" style="display: none">
 <div class="tooltip">
    <input type="text" placeholder="pan number" name="pan" />
<span class="tooltiptext">If not type NA</span></div>
    </div>
    <b>Do you have Passport?:</b>
    <select id = "ddpas"  required onchange = "ShowHideDiv()">
        <option value="">Select</option>
        <option value="Y">Yes</option>            
    </select>
    <div id="dvpas" style="display: none">
 <div class="tooltip">
    <input type="text" placeholder="pan number" name="pas" />
<span class="tooltiptext">If not type NA</span></div>
    </div>
    <b> skils?:</b>
    <select id = "ddskil" onchange = "ShowHideDiv()">
        <option value="">Select</option>
        <option value="Y">Yes</option>            
    </select>
    <div id="dvskil" style="display: none">
 <div class="tooltip">
    <input type="text" placeholder="name of skill" name="sknum" />
    <span class="tooltiptext">If not type NA</span></div>
    </div>
    <br>
    <br>
                 <label><b > BEC COURSE:</b></label>
     <select name="becgra"  >
<option value="" >Select</option>
<option value="NA" >NA</option>
    <option value="B1">B1</option>
    <option value="B2" >B2</option>
    <option value="A1" >A1</option>
    <option value="A2" >A2</option>
    <option value="C1" >C1</option>
    <option value="C2" >C2</option>
    </select>
                                                         <br>
    <div class="tooltip"> <input type="text" style="width:200px" placeholder="Duration of BEC" name="dunm" required /><span class="tooltiptext">If not type NA</span></div>
 <br>    <div class="tooltip"> <input type="text" style="width:200px" placeholder="Course Vendor" name="skv" required /><span class="tooltiptext">If not type NA</span></div>
    
   
    
    </fieldset>
   <br> 

     <br><input type="submit" 
    value="SUBMIT">  
 
   </div>
</form> 



</body>
</html>
