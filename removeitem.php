<?php
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$connect3=new mysqli($servername,$username,$password,$dbname);
$iid=$_GET["iid"];
//$off=$_POST["offers2"];
$sql="delete from cart where ProductID='$iid'";
$connect3->query($sql);
//include "cartview.php";
header("Location: cartview.php"); /* Redirect browser */
exit();
?>