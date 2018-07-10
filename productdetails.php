<?php SESSION_start();  
$itemid=$_GET["name"];
$_SESSION["_ProductID"]=$itemid;?>
<html lang="en-IN"><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap.min.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>K-Store</title><meta name="description" content="Now Buy a variety of smartphones and electronic products from famous brands at the most affordable price. Grab exclusive deals at K-Store."/><meta name="author" content="K-Store"/><meta property="og:url" content="https://kstore.ml/"/>
<meta property="og:site_name" content="K-Store"/>
<meta property="og:title" content="Welcome to K-Store"/>
<meta property="og:description" content="Now Buy a variety of smartphones and electronic products from famous brands at the most affordable price. Grab exclusive deals at K-Store."/>
<meta property="og:type" content="website"/>
<meta property="og:image" content=" https://www.bryansreviews.com/ecommerce-platforms/"/>
<meta property="og:locale" content="en_IN"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="K-Store"/>
<meta name="twitter:description" content="Welcome to K-Store"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/ip/eb5bd203-fd4d-4af0-9f2e-4fc8f1ca8f86/fcb446b8-e113-45c5-9bbe-524f33c48c7b.jpg"/>
<meta name="twitter:image:alt" content="K-Store"/>
<script>
$("document").ready(function()
{//var cartitem=$("#cart").val();
$("#carty").click(function(){
var Pid='<?php echo $_SESSION["_ProductID"];?>';
//alert("hett");
 $.post("cart.php", {pid: Pid}, function(data,status){alert(data);});
 document.getElementById("carty").innerHTML="Added to cart";
 $("#carty").attr("class", "btn btn-success btn-lg btn-block");
 $("#carty").attr("disabled", "disabled");
// document.getElementById("carty").innerHTML="<button class="+"btn btn-default btn-lg btn-block"+" disabled="+"disabled"+">Added To Cart</button>";;
 });
});
</script>
<script>
$("document").ready(function(){
	$("#promo").click(function(){
	document.getElementById("code").innerHTML="<input type="+"text"+" placeholder="+"Enter Promocode here"+" id="+"promocode"+">";});
});


</script>
<style>
div.border
{ 
	margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
	border-style: solid;
    border-width: medium;
}
hr{color:#000000;}
a:hover {
    text-decoration: none;
    color:#000000;
	
}

</style>

</head>
<body class="x  x-fonts-sofia" link="black">
<font face="calibri">
<?php include "header.php";?>
<div class="container">
<h1 data-ux="SectionHeading" data-aid="SHOP_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h1 px_-overflow-wrap-break-word px_-word-wrap-break-word px_-word-break-break-word px_-fs-28 px_-c-rgb41__71__199 px_-fw-400 px_-lh-1p25 px_-ml-0 px_-mr-0 px_-mt-0 px_-mb-40px px_-ff-_Sofia___cursive px_-overflow-hidden px_-text-align-center _mdpx_-text-align-center _mdpx_-fs-34 _lgpx_-fs-35 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span px_-d-inline-block px_-position-relative px_-c-inherit px_-max-width-80P px_-ff-_Sofia___cursive px_-fs-28 px__before-right-100P px__before-mr-20px px__before-content-__ px__before-h-1px px__before-mt--1px px__before-b-currentColor px__before-position-absolute px__before-top-p75em px__before-w-100vw px__before-d-block px__after-left-100P px__after-ml-20px px__after-content-__ px__after-h-1px px__after-mt--1px px__after-b-currentColor px__after-position-absolute px__after-top-p75em px__after-w-100vw px__after-d-block _mdpx_-fs-34 _lgpx_-fs-35 x-d-ux"></span></h1>
<!##############$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$###############################################################!>
<script>
$("document").ready(function(){
	$("img").attr("width", "100%");
	$("img").attr("height", "60%");
	
});
</script>
<script>
if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("demo_sse.php");
    source.onmessage = function(event) {
        document.getElementById("stock").innerHTML= "56";
    };
} else {
    document.getElementById("stock").innerHTML = "Sorry, your browser does not support server-sent events...";
}
function increasestock()
{
</script>


<?php 

$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kstore";
$connect3=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from products";
$result = $connect3->query($sql);
while($row = $result->fetch_assoc())
    { if($row["ProductID"]==$itemid)
		{
		 $_SESSION["_ProductID"]=$row["ProductID"];	
	     $_SESSION["_ProductName"]=$row["ProductName"];
		 $_SESSION["_Price"]=$row["Price"];
		 $Offers=$row["Offers"];
		 $_SESSION["_stock"]=$row["Stock"];
		 $highlights=$row["Features"];
		 $desc=$row["Description"];
		 $_SESSION["Stock"]=$stockleft=100-$_SESSION["_stock"];
		 $disc=$_SESSION["_Discount"]=$row["Discount"];
		
		 $_SESSION["_image"]=$row["Image"];
		}
	}
	
?>
<div class="row">
<font style="Arial">
<div class="col-md-4"><?php echo $_SESSION["_image"]; ?></div>
<div class="col-md-5">Product ID: <b> <?php echo $_SESSION["_ProductID"]; ?></b><br>
<h1><?php echo $_SESSION["_ProductName"]; ?></h1>
<h1><b>&nbsp;<?php $newp=$_SESSION["_Price"]-$_SESSION["_Discount"]; 
if($disc==0)
  {echo "<font color=#008000><b>₹".$_SESSION["_Price"]."</b></font>";}
else
  {echo "<font color=#D3D3D3><s>₹".$_SESSION["_Price"]."</s></font>&nbsp;&nbsp;&nbsp;<font color=#008000>₹".$newp."</font>";
   }									  
?></b></h1>
 <H4><font color=#FF0000>You Save: <b>₹ <?php echo $_SESSION["_Discount"]; ?></b></font></h4><br>
 <?php echo $highlights; ?>
<br><br>
<div ><button class="btn btn-primary btn-lg btn-block" class="ATC" id="carty" >Add To Cart</button></div><br><button class="btn btn-danger btn-lg btn-block"> Buy Now </button>
</div>
<div class="col-md-3">
<div class="alert alert-info">
Units Sold
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $stockleft; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $stockleft; ?>%;">
    <span class="sr-only"><p id="stock"></p>%</span>
  </div>
</div>
<div class="w3-light-grey w3-round-xlarge">
    <div class="w3-container w3-green w3-round-xlarge" style="width: <?php echo $stockleft; ?>%"><p id="stock"></p>%</div>
  </div></div>
<br><div class="alert alert-info"><center><a id="op" onclick="dispoffer()" class="text-primary"><b>Offers Available</b></a></center><p id="we"><font size=2><?php echo $Offers;?></font></p><button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="dismis()"><span aria-hidden="true">&times;</span></button></div>
<br>
</div>
</font>
</div>
<script>	
//alert("<?php echo $stockleft;?>");
function dismis()
{document.getElementById("we").innerHTML="";
}
function dispoffer()
{
	
	document.getElementById("we").innerHTML="<button type="+"button"+" class="+"close"+" data-dismiss="+"alert"+" aria-label="+"Close"+" onclick="+"dismis()"+"><span aria-hidden="+"true"+">&times;</span></button><br><?php if($Offers!=NULL) {echo $Offers;} else echo "NO OFFERS AVAILABLE"; ?>";
}

</script>
<h2><b>Product Description</b></h2>
<?php echo $desc;?>
<br><br>
<a href="Product.php"><h2>Shop More-></h2></a>

</div>






<!############################################$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$################################!>
<div data-ux="Block" class="x-el x-el-div px_-position-relative px_-min-height-250px px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Block" data-route="/" class="x-el x-el-div px_-position-relative px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div px_-position-relative px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Block" class="x-el x-el-div px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Grid" class="x-el x-el-div px_-d-flex px_-box-sizing-border-box px_-flex-direction-row px_-flex-wrap-wrap px_-m-0_-10px_-20px px_-ff-Quicksand__sans-serif px_-fs-18 _smpx_-m-0_-20px_-40px _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div px_-box-sizing-border-box px_-flex-grow-1 px_-flex-shrink-1 px_-flex-basis-100P px_-p-0_10px_20px px_-max-width-100P px_-text-align-center px_-ff-Quicksand__sans-serif px_-fs-18 _smpx_-p-0_20px_40px _smpx_-ml-16p666666666666664P _smpx_-flex-basis-66p66666666666666P _smpx_-max-width-66p66666666666666P _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"></div></div></div></div></div></div></div></div></div></section></div>
<br><br><br>

<div id="f711c1b3-cb5c-4004-bc41-3a8c9c68b646" class="widget widget-footer widget-footer-footer-1"><section data-ux="Section" class="x-el x-el-section px_-bc-rgb22__22__22 px_-pt-60px px_-pb-60px px_-ff-_Sofia___cursive px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Container" class="x-el x-el-div px_-ml-auto px_-mr-auto px_-pl-20px px_-pr-20px px_-max-width-100P px_-ff-_Sofia___cursive px_-fs-18 _smpx_-w-728px _mdpx_-w-984px _mdpx_-fs-18 _lgpx_-w-1160px _lgpx_-fs-18 x-d-ux"><div data-ux="Layout" class="x-el x-el-div px_-text-align-center px_-ff-_Sofia___cursive px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><h5 data-ux="Heading" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-h5 px_-overflow-wrap-break-word px_-word-wrap-break-word px_-word-break-break-word px_-fs-18 px_-c-rgb247__247__247 px_-fw-400 px_-lh-1p25 px_-ml-0 px_-mr-0 px_-mt-0 px_-mb-20px px_-ff-Quicksand__sans-serif _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux x-d-aid x-d-route x-rt"><span style="margin:0px;">Copyright © 2018 K-Store - All Rights Reserved. <span class="x-el x-el-span px_-fs-unset px_-ff-Quicksand__sans-serif px_-fw-700 x-d-ux">&nbsp;</span><a href="http://97522b42.orson.website/" class="x-el x-el-a px_-overflow-wrap-break-word px_-fs-18 px_-fw-400 px_-c-rgb113__128__239 px_-text-decoration-none px_-d-inline px_-cursor-pointer px_-ff-Quicksand__sans-serif px__hover-c-rgb130__143__241 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><span class="x-el x-el-span px_-fs-unset px_-ff-Quicksand__sans-serif px_-fw-700 x-d-ux">K-Wallet</span></a><span class="x-el x-el-span px_-fs-unset px_-ff-Quicksand__sans-serif px_-fw-700 x-d-ux">&nbsp;</span></span></h5><hr data-ux="HR" class="x-el x-el-hr px_-border-color-rgb42__42__42 px_-border-bottom-width-1px px_-border-style-solid px_-mt-0 px_-mb-20px px_-w-50px px_-ml-auto px_-mr-auto px_-ff-_Sofia___cursive px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"/><h5 data-ux="Heading" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-h5 px_-overflow-wrap-break-word px_-word-wrap-break-word px_-word-break-break-word px_-fs-18 px_-c-rgb137__137__137 px_-fw-400 px_-lh-1p25 px_-ml-0 px_-mr-0 px_-mt-0 px_-mb-0 px_-ff-Quicksand__sans-serif _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux x-d-aid x-d-route"><span>Powered by K-Wallet.</span></h5></div></div></section></div></span></div>
</font>
</body>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.12.6.js"></script>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/OLSCore.0.2.39.js"></script>

</body>
</html>