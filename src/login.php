
<!Doctype html>
<title>login page</title>
<style>
html{
    /* The image used */
    background-image: url("gr.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
background=#FFFFFF;
border:1px solid snow;
}

.design
{
margin:10px 100px 10px 0px;
}
.design input
{
height:30px;
width:100%;
margin:20px 10px 0px 0px;
background-color: snow;
border:none;
border-bottom:1px solid blue;
}
button 
{
    background-color: #4CAF50;
    color: white;
    width:100px;
    cursor: pointer;
}
}

</style>



<div class="header">
<h2>Login Form</h2>
</div>

<form action="verify.php" method="POST">
  <div class="design">
    <input type="text"  placeholder="Enter RollNo"  title="Roll number" maxlength="10" name="userid" required>
  </div>

  <div class="design">
    <input type="password"  pattern=".{6,}" title="six characters are more" placeholder="Enter Password" name="password" required>
   </div>
<br>
   <div >    
   <button type="submit"style="margin-top:25px">Login</button>
<button type="button"  onclick="location.href='http://172.16.1.3/col/'" style="margin-left:25px;margin-bottom:30px">BACK</button>
  </div>
<br>
   <div >    
   Don't have an account?? <a href="register.php">   sign up</a>


<html>
