<!Doctype html>
<html>
<style>
html{
    /* The image used */
    background-image: url("f.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
form {
    background-color: snow;
    border: 1px solid snow;
    width:20%;
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
    margin: 20px 100px 50px ;
    cursor: pointer;
}
.btn-group button {
    background-color: #A9A9A9; /* Green background */
    border: 1px solid #00000; /* Green border */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3e8e41;
}
</style>
<body>

<h1>ELIGIBLITY<h1>

<form action="eligiblity.php" method="POST">
  <label> Select the year of  pass</label>    <br>
<body onload="loadAgeSelector()">
<select id="yearselect" name="year"></select>
<script>
function loadAgeSelector()
{
var startyear = 2018;
var endyear = 2050;
for (var i = startyear;i<=endyear;i++){
    node=document.createElement("Option");
    textnode=document.createTextNode(i);
    node.appendChild(textnode);
    document.getElementById("yearselect").appendChild(node);
}
}
</script><br>
<br><label>Enter the cgpa required</label>
<input type="number" step="any" name="cg">
</body>
   <div >    
    <input type="submit"  value="Download" style="margin-right:50px">
    <input type="button" onclick="location.href='starte.php'" style="margin-right:50px" value="Back">
   
  </div>
  
</form>
</html>