<?php SESSION_start();
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$connect=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from orders";
$result = $connect->query($sql);
while($row = $result->fetch_assoc())
{ //$datediff=$row["OrderDate"]-date("y-m-d H:i:s");	
if($_SESSION["uuid"]==$row["UserID"] && $_SESSION["sumD"]==$row["Discount"] && $_SESSION["total"]==$row["TotalAmount"])
	$orderid=$row["OrderID"];
} ?>
<html>
<head><title>Order</title></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap.min.js">
<meta charset="utf-8">
<script src="https://www.w3schools.com/lib/w3.js"></script>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/>
<body>
<br>

<p id="chck"></p>

<script>
var status='<?php echo $_GET["method"]; ?>';

if(status=="cod")
{document.getElementById("chck").innerHTML="<center><h2><p id="+"pc"+"><font color="+"blue"+" face="+"calibri"+" size=8>Placing Your Order.</font><br>Please wait...<br><img src="+"pics/Spin.gif"+"><br></p>Pay through cash/card/wallet On Delivery</h2><font color=#ff0000>Do not refresh your page or go back.</font></center>";
$.post("updatepayment.php", {oid:'<?php echo $orderid;?>', pm:"Cash On Delivery", ps:"Not Paid"}, function(data,status){});
	}

if(status=="paytm")
{document.getElementById("chck").innerHTML="<center><b><font color="+"blue"+" face="+"calibri"+" size=7>Payment Gateway</font></b><br><img src="+"pics/Spinr.gif"+" width=18% height=30%><h2>Please Wait...</h2><img src="+"pics/paytm_logo.png"+" width=15% height=10%><img src="+"pics/arrows.svg"+"  width=10% height=17%><img src="+"pics/kstorenew.gif"+"  width=20% height=15%><br><h3>Processing your payment from paytm<br>Order will be placed as soon as the payment is confirmed<br><font color=#ff0000>Do not refresh your page or go back.</font></h3></center>";
$.post("updatepayment.php", {oid:'<?php echo $orderid;?>', pm:"Paytm", ps:"Paid"}, function(data,status){});
	}

if(status=="phonepe")
{document.getElementById("chck").innerHTML="<center><b><font color="+"blue"+" face="+"calibri"+" size=7>Payment Gateway</font></b><br><img src="+"pics/Spinr.gif"+" width=18% height=30%><h2>Please Wait...</h2><img src="+"pics/phonepelogo.png"+" width=18% height=13%><img src="+"pics/arrows.svg"+"  width=10% height=17%><img src="+"pics/kstorenew.gif"+"  width=20% height=15%><br><h3>Processing your payment from Phone Pe<br>Order will be placed as soon as the payment is confirmed<br><font color=#ff0000>Do not refresh your page or go back.</font></h3></center>";
    $.post("updatepayment.php", {oid:'<?php echo $orderid;?>', pm:"Phone Pe", ps:"Paid"}, function(data,status){});
	}
if(status=="Kwallet")
{ document.getElementById("chck").innerHTML="<center><b><font color="+"blue"+" face="+"calibri"+" size=7>Payment Gateway</font></b><br><img src="+"pics/Spinr.gif"+" width=18% height=30%><h2>Please Wait...</h2><img src="+"pics/kwallet.png"+" width=15% height=15%><img src="+"pics/arrows.svg"+"  width=10% height=17%><img src="+"pics/kstorenew.gif"+"  width=20% height=15%><br><h3>Processing your payment from K-Wallet<br>Order will be placed as soon as the payment is confirmed<br><font color=#ff0000>Do not refresh your page or go back.</font></h3></center>";
    $.post("updatepayment.php", {oid:'<?php echo $orderid;?>', pm:"K-Wallet", ps:"Paid"}, function(data,status){});
	}

setTimeout(check,4000);

function check()
{
	document.getElementById("chck").innerHTML="<center><font size=6 color=#008000 face="+"Arial"+"><b>Order Placed Successfully.</b></font><h2>Thanks for shopping with K-Store</h2><h3>Your Order ID: <b><?php echo $orderid; ?><font color=#ff0000>**</font></b></h3><img src="+"pics/smile.svg"+" height=60% width=60%><h3><font color=#ff0000>Please Remember your order ID to track/edit your order.</h3><a href="+"home.php"+"><button class="+"btn btn-success"+"><h2>Go Home</h2></button></a></center>";
$.post("emptycart.php", {oid: status}, function(data,status){});
	}
</SCRIPT>

</body>
</html>