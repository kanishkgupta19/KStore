<?php
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$connect3=new mysqli($servername,$username,$password,$dbname);
$iid=$_POST["pid"];
$off=$_POST["stat"];
$no=$_POST["QTY"];
$limit=$_POST["max"];
//echo $no;
if($off=='a')
   { if($no<$limit)
      {$sql="update cart set Quantity=Quantity+1 where ProductID='$iid'"; $connect3->query($sql);
         
       }
	 else
		 echo "Max ".$limit." allowed per user";
	}
if($off=='m')
    {if($no>1)
	   {$sql2="update cart set Quantity=Quantity-1 where ProductID='$iid'"; 
         $connect3->query($sql2);
	     }
    else
     { echo "Minimum Limit reached";
      }
	}

	  

?>