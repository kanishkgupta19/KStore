<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$pid=$_SESSION["_ProductID"];
 $servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$connect4=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from products";
$result = $connect4->query($sql);
while($row = $result->fetch_assoc())
{if($row["ProductID"]==$pid)
	echo $row["Stock"];
    flush();
}
?>