
<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
#order {
  color: #FFF;
  background-color: #008000;
  font-weight: ;
  border-radius: 12px;
  hover: #D3D3D3;
 
}
.btn{background-color:#ff3333;
         color:#ffffff;}
</style>
<script>
function details(ppid)
  {
	 window.location.href = "productdetails.php?name=" + ppid; 
	 // window.location.href = "productdetails.php";
  }
  </script>
<?php
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";

$totalamount=0;
$totaldiscount=0;
$count=0;
function pricechange($p, $qty)
{$newP=$qty * $p;
return $newP;
}
$connect3=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from cart";
$result = $connect3->query($sql);
while($row = $result->fetch_assoc())
{  $count++;
		 $id0=$row["id"];
	      $ProductID0=$row["ProductID"];
		  $ProductName0=$row["ProductName"];
		  $Price0=$row["Price"];
		  $Quantity0=$row["Quantity"];
		  $Discount0=$row["Discount"];
		  $Coupon0=$row["Coupon"];
		  $Date0= $row["Date"];
		  $image0=$row["Image"];
		  $maxq=$row["Max"];
		  $Prc0=$Price0-$Discount0;
		  $newp= pricechange($Prc0,$Quantity0);
		  $newd=pricechange($Discount0,$Quantity0);
		  
		  echo "<div class="."col-md-2"." id='$ProductID0' onclick="."details(this.id)".">$image0</div>
<div class="."col-md-3"." onclick="."details(this.id)"."><h5>Product ID: <b>$ProductID0</B><br><h3>$ProductName0</h3><br>Price: <h3><font color=#008000>₹ $newp</font></h3></div>
<div class="."col-md-3"." onclick="."details(this.id)".">Discount: <br><b><font color=#FF0000><h4> ₹ $newd</h4></font></b></div>
<div class="."col-md-3"."><button class="."btn btn-danger"." id="."$ProductID0"." onclick="."removeitem(this.id)"." class="."remove".">Remove Item</button><br><br>Quantity: <b>$Quantity0</b><br><br><a href=".""."><button id="."$ProductID0"." class="."btn-default"." onclick="."addQty(this.id,'m','$Quantity0','$maxq')"."><b>-&nbsp;</b></button></a> $Quantity0 <a href=".""."><button class="."btn-default"." id="."$ProductID0"." onclick="."addQty(this.id,'a','$Quantity0','$maxq')"."><b>+</b></button></a></div>
<h1>___________________________________________________________</h1><br>";
	$totalamount=$totalamount+$newp; 
    $totaldiscount=$totaldiscount+$newd;
}
$_SESSION["sumD"]=$totaldiscount;
$_SESSION["total"]=$totalamount;
if($count!=0)
   echo "<div class="."alert alert-info"."><h2>Total Amount: <font color=#008000><b>₹ $totalamount</b></font></h2></div><br>
           <a id="."code"." >Have a Promo code?</a><br><p id="."promocode"." class="."popo"."></p>
<br><br><a href="."sample.php"."><button class="."btn btn-success"." id="."order"."><font size=5>Continue To Checkout</font></button></a>";
else
	echo"<center><h1><font color=#D3D3D3>Cart is empty</font></h1></center>";

?>
