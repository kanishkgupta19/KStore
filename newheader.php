<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
@media only screen and (max-width: 400px) {
#mysidebar{onclick:"w3_open2()";}
}
</style>
<script>
$("document").ready(function(){
    $("window").resize(function(){
        w3_open2();
    });
});
</script>
<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-border" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"><font color=#FF0000><b><-  Back</b></font></button>
  <a class="w3-bar-item w3-button w3-border w3-hover-blue" onclick="account()"><img src="ava.png" height=80 width=80>Hello, User &nbsp;&nbsp;&nbsp;&nbsp;Sign/Register</a>
  <a href="#" class="w3-bar-item w3-button w3-border w3-hover-blue">My Account</a>
  <a href="#" class="w3-bar-item w3-button w3-border">Refer</a>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button id="openNav" class="w3-button w3-xlarge" onclick="w3_open()">&#9776;</button><a class="navbar-brand" href="home.php"><h1 >K-Store</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Shop <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Offers</a>
      </li>
    </ul>
    <span class="navbar-text">
      
    </span>
  </div>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button><font id="space" align=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cartview.php"><img src="pics/cart.png" width=30 height=30></a></font>
    </form> 
	
  <br>
</nav>
<span class="fa fa-shopping-cart"></span>
 <p id="demo"></p>
</body>
<script>
var w = window.innerWidth;
if(w<500)
	{document.getElementById("space").innerHTML = "<font align="+"right"+">";
	}
function w3_open() {
	var w = window.innerWidth;
	var h = window.innerHeight;
	if(w>500)
	{//document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "30%";
  document.getElementById("mySidebar").style.display = "block";
  //document.getElementById("openNav").style.display = 'none';
	}
	else
		
		{
           document.getElementById("mySidebar").style.width = "90%";
            document.getElementById("mySidebar").style.display = "block";
            //document.getElementById("openNav").style.display = 'none';
		}
}
function w3_close() {
  //document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
function account()
{alert("You are not signed in or Registered");
}
</script>
</html>