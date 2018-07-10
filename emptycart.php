<?php
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$connect3=new mysqli($servername,$username,$password,$dbname);
$sql="DELETE from cart where id>=0";
$connect3->query($sql);
?>