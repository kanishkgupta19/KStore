<?php
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$ps=$_POST["ps"];
$pm=$_POST["pm"];
$oid=$_POST["oid"];
$connect4=new mysqli($servername,$username,$password,$dbname);
$sql="update orders set PaymentStatus='$ps', PaymentMethod='$pm' where OrderID='$oid'";
$result = $connect4->query($sql);
?>