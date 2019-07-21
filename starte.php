<!Doctype html>
<html>

<style>
html{
    /* The image used */
    background-image: url("f.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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

 <button style="font-size : 50px;width:20%" onclick="location.href='facultylogin.php'"  >logout</button>
<br>
<br>
<br>
<br><div class="btn-group" style="width:100%">
  <button style="font-size : 50px;width:33.3%" onclick="location.href='cheligiblity.php'"  >Eligibility</button>
  <button style="font-size : 50px;width:33.3%" onclick="location.href='chplaced.php'" >Placed</button>
  <button style="font-size : 50px;width:33.3%" onclick="location.href='chentire.php'"  >Master db</button>
</div>

</body>
</html>
