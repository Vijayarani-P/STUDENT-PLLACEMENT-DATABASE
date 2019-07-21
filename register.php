<!Doctype html>
<title>sign up</title>
<script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script>
<style>
html{
    /* The image used */
    background-image: url("book.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size:cover;
}
form {
   background-color: snow;
    border: 1px solid snow;
    width:30%;
    padding:20px;
    margin:0px auto;
    border-radius:0px,0px,10px,10px;
}
.header
{
height:35px;
background-color: snow;
width:30%;
text-align:center;
display:block;
padding:20px;
margin :100px auto 0px;
border:1px solid snow;
}
.design
{
margin:10px 100px 10px 0px;
}
.design input[type="text"],[type="password"]
{
height:30px;
width:100%;
margin:20px 10px 0px 0px;
background-color: snow;
border:none;
border-bottom:1px solid blue;
}
.design input[type="button"],[type="submit"],[type="reset"]
{
    background-color: #4CAF50;
    color: white;
    width:65px;
    margin:20px 0.5px auto;
    cursor: pointer;
}



</style>
<body>
<div class="header">
<h2>SIGN UP</h2>
</div>

<form action="insert.php" method="POST">
  <div class="design">
   
    <input type="text" title="Roll number" placeholder="Enter Rollno" name="userid" required>
  </div>
  <div class="design">
    
    <input type="password" pattern=".{6,}" title="six characters are more" placeholder="Enter Password" name="password" required>
    </div>
   <div class="design">
       <input type="submit"  value="submit" style="margin-right:50px">
 <input type="button" onclick="location.href='login.php'" style="margin-right:50px" value="back">
<input type="reset">
    

  </div>

</body>

<html>





