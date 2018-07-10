<?php SESSION_start();
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$ProductID2=$_POST["pid"];
$flag=0;

$connect2=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from products";
$result = $connect2->query($sql);
while($row = $result->fetch_assoc())
{ if($row["ProductID"]==$ProductID2)
		{ $id0=$row["id"];
	      $ProductID0=$row["ProductID"];
		  $ProductName0=$row["ProductName"];
		  $Price0=$row["Price"];
		  $Quantity0=1;
		  $limit0=$row["MaxQty"];
		  $Discount0=$row["Discount"];
		  $Coupon0=$row["Coupon"];
		  $Date0= date("d/m/y");
		  $image0=$row["Image"];
		  
		  //echo "hogaya";
	    }
}
$sql2="select * from cart";
$result2=$connect2->query($sql2);
while($row2 = $result2->fetch_assoc())
{
  if($row2["ProductID"]==$ProductID2)
	{$qty=$row2["Quantity"];
		$flag=1;
		//echo "flag=".$flag;}
}}
if($flag==0)
{
	$connect=new mysqli($servername,$username,$password,$dbname);
	$stmt=$connect->prepare("insert into cart(id,ProductID,ProductName,Price,Quantity,Discount,Coupon,Date,Image,Max) 
	values(?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("issiiisssi",$id,$ProductID,$ProductName,$Price,$Quantity,$Discount,$Coupon,$Date,$image,$Max);
			  $id=$id0;
			  //echo $ProductID0;
			  $ProductID=$ProductID2;
			  $ProductName=$ProductName0;
			  $Price=$Price0;
			  $Quantity=1;
			  $Discount=$Discount0;
			  $Coupon=$Coupon0;
			  $Date= date("Y/m/d");
			  $image=$image0;
			  $Max=$limit0;
			  $stmt->execute();
			  

}
else
{$newQuantity=$qty+1;
	$sql2="update cart set Quantity=$newQuantity where ProductID='$ProductID2'";
  $connect2->query($sql2);
  if ($connect2->query($sql2) === TRUE) {
    echo "Product Added to your cart";
} else {
    echo "Error updating record: " . $connect2->error;
}

  //echo $newQuantity;
 // $connect2->close();
}
?>