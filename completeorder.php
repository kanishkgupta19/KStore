<?php
SESSION_start();
$order= array("","","","","");
$qty=array("","","","","");
$price=array(0,0,0,0,0);
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$connect=new mysqli($servername,$username,$password,$dbname);

$i=0;
$connect3=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from cart";
$result = $connect3->query($sql);
while($row = $result->fetch_assoc())
{$order[$i]=$row["ProductID"];
 $qty[$i]=$row["Quantity"];
 $price[$i]=$row["Price"]-$row["Discount"];
 $i++;
}


$stmt=$connect->prepare("insert into orders(UserID,Name,Contact,Email,State,Address,TotalAmount,Discount,Order1,Qty1,Price1,Order2,Qty2,Price2,Order3,Qty3,Price3,Order4,Qty4,Price4,Order5,Qty5,Price5) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("isisssiisiisiisiisiisii",$UserID,$Name,$Contact,$Email,$State,$Address,$TotalAmount,$Discount,$Order1,$Qty1,$Price1,$Order2,$Qty2,$Price2,$Order3,$Qty3,$Price3,$Order4,$Qty4,$Price4,$Order5,$Qty5,$Price5);
			  $UserID=$_POST["UserID2"];
			  $Name=$_POST["Name2"];
			  $Contact=$_POST["Contact2"];
			  $Email=$_POST["Email2"];
			  $State=$_POST["City2"];
			  $Address=$_POST["Address2"];
			  $TotalAmount=$_SESSION["total"];
			  $Discount=$_SESSION["sumD"];
			  $Order1=$order[0];
			  $Qty1=$qty[0];
			  $Price1=$price[0];
			  $Order2=$order[1];
			  $Qty2=$qty[1];
			  $Price2=$price[1];
			  $Order3=$order[2];
			  $Qty3=$qty[2];
			  $Price3=$price[2];
			  $Order4=$order[3];
			  $Qty4=$qty[3];
			  $Price4=$price[3];
			  $Order5=$order[4];
			  $Qty5=$qty[4];
			  $Price5=$price[4];
			  $stmt->execute();
			  
			  
$_SESSION["uuid"]=$UserID;
echo "Address Saved Successfully";
?>