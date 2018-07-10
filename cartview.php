<?php SESSION_start();  ?>
<html lang="en-IN"><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
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
function removeitem(ppid)
{
	window.location.href = "removeitem.php?iid=" + ppid;
}
function addQty(id, status, qty, MaxQty)
{
 $.post("addQuantity.php", {pid: id, stat: status, QTY: qty, max: MaxQty}, function(data,status){alert(data);});
}
</script>
<script>
$("document").ready(function(){
	$("#promo").click(function(){
	document.getElementById("code").innerHTML="<input type="+"text"+" placeholder="+"Enter Promocode here"+" id="+"promocode"+">";});
});

$( window ).unload(function() {
  return "Bye now!";
});
//$(window).on('beforeunload', function(){ alert ('Bye now')});
</script>
<link rel="stylesheet" href="looks.css">
</head>
<body font="ariel">
<?php include"header.php"; ?>
<?php //include"newheader2.html"; ?>
<div class="container">
<h1 data-ux="SectionHeading" data-aid="SHOP_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h1 px_-overflow-wrap-break-word px_-word-wrap-break-word px_-word-break-break-word px_-fs-28 px_-c-rgb41__71__199 px_-fw-400 px_-lh-1p25 px_-ml-0 px_-mr-0 px_-mt-0 px_-mb-40px px_-ff-_Sofia___cursive px_-overflow-hidden px_-text-align-center _mdpx_-text-align-center _mdpx_-fs-34 _lgpx_-fs-35 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span px_-d-inline-block px_-position-relative px_-c-inherit px_-max-width-80P px_-ff-_Sofia___cursive px_-fs-28 px__before-right-100P px__before-mr-20px px__before-content-__ px__before-h-1px px__before-mt--1px px__before-b-currentColor px__before-position-absolute px__before-top-p75em px__before-w-100vw px__before-d-block px__after-left-100P px__after-ml-20px px__after-content-__ px__after-h-1px px__after-mt--1px px__after-b-currentColor px__after-position-absolute px__after-top-p75em px__after-w-100vw px__after-d-block _mdpx_-fs-34 _lgpx_-fs-35 x-d-ux">
CART</span></h1>
<!--##############$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$###############################################################-->

<! kanishk !>
<script>
$("document").ready(function(){$("#order").click(function(){("div").hide();
	document.getElementById("vwcart").innerHTML="<h1><font color=#008000>ORDER PLACED SUCCESSFULLY</FONT></h1><br>Payment Menthod: CASH ON DELIVERY";});
	$("#code").click(function(){document.getElementById("promocode").innerHTML = "<input type="+"text"+" placeholder="+"Enter PromoCode"+" id="+"codevalue"+" > <button class="+"btn btn-warning"+" id="+"promobutton"+">Apply</button>";
	});
});

</script>

<div id="vwcart"><?php include "vwcart.php";  ?></div><br>






<script>
 $(document).ready(function(){
    $("#p1").hover(function(){
        $("#order").css("background-color", "yellow");
    },
    function(){
        alert("Bye! You now leave p1!");
    }); 
});
</script>





</div>




<!############################################$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$################################!>
<div data-ux="Block" class="x-el x-el-div px_-position-relative px_-min-height-250px px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Block" data-route="/" class="x-el x-el-div px_-position-relative px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div px_-position-relative px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Block" class="x-el x-el-div px_-ff-Quicksand__sans-serif px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Grid" class="x-el x-el-div px_-d-flex px_-box-sizing-border-box px_-flex-direction-row px_-flex-wrap-wrap px_-m-0_-10px_-20px px_-ff-Quicksand__sans-serif px_-fs-18 _smpx_-m-0_-20px_-40px _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div px_-box-sizing-border-box px_-flex-grow-1 px_-flex-shrink-1 px_-flex-basis-100P px_-p-0_10px_20px px_-max-width-100P px_-text-align-center px_-ff-Quicksand__sans-serif px_-fs-18 _smpx_-p-0_20px_40px _smpx_-ml-16p666666666666664P _smpx_-flex-basis-66p66666666666666P _smpx_-max-width-66p66666666666666P _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"></div></div></div></div></div></div></div></div></div></section></div>
<br><br><br>

<div id="f711c1b3-cb5c-4004-bc41-3a8c9c68b646" class="widget widget-footer widget-footer-footer-1"><section data-ux="Section" class="x-el x-el-section px_-bc-rgb22__22__22 px_-pt-60px px_-pb-60px px_-ff-_Sofia___cursive px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><div data-ux="Container" class="x-el x-el-div px_-ml-auto px_-mr-auto px_-pl-20px px_-pr-20px px_-max-width-100P px_-ff-_Sofia___cursive px_-fs-18 _smpx_-w-728px _mdpx_-w-984px _mdpx_-fs-18 _lgpx_-w-1160px _lgpx_-fs-18 x-d-ux"><div data-ux="Layout" class="x-el x-el-div px_-text-align-center px_-ff-_Sofia___cursive px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><h5 data-ux="Heading" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-h5 px_-overflow-wrap-break-word px_-word-wrap-break-word px_-word-break-break-word px_-fs-18 px_-c-rgb247__247__247 px_-fw-400 px_-lh-1p25 px_-ml-0 px_-mr-0 px_-mt-0 px_-mb-20px px_-ff-Quicksand__sans-serif _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux x-d-aid x-d-route x-rt"><span style="margin:0px;">Copyright © 2018 K-Store - All Rights Reserved. <span class="x-el x-el-span px_-fs-unset px_-ff-Quicksand__sans-serif px_-fw-700 x-d-ux">&nbsp;</span><a href="http://97522b42.orson.website/" class="x-el x-el-a px_-overflow-wrap-break-word px_-fs-18 px_-fw-400 px_-c-rgb113__128__239 px_-text-decoration-none px_-d-inline px_-cursor-pointer px_-ff-Quicksand__sans-serif px__hover-c-rgb130__143__241 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"><span class="x-el x-el-span px_-fs-unset px_-ff-Quicksand__sans-serif px_-fw-700 x-d-ux">K-Wallet</span></a><span class="x-el x-el-span px_-fs-unset px_-ff-Quicksand__sans-serif px_-fw-700 x-d-ux">&nbsp;</span></span></h5><hr data-ux="HR" class="x-el x-el-hr px_-border-color-rgb42__42__42 px_-border-bottom-width-1px px_-border-style-solid px_-mt-0 px_-mb-20px px_-w-50px px_-ml-auto px_-mr-auto px_-ff-_Sofia___cursive px_-fs-18 _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux"/><h5 data-ux="Heading" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-h5 px_-overflow-wrap-break-word px_-word-wrap-break-word px_-word-break-break-word px_-fs-18 px_-c-rgb137__137__137 px_-fw-400 px_-lh-1p25 px_-ml-0 px_-mr-0 px_-mt-0 px_-mb-0 px_-ff-Quicksand__sans-serif _mdpx_-fs-18 _lgpx_-fs-18 x-d-ux x-d-aid x-d-route"><span>Powered by K-Wallet.</span></h5></div></div></section></div></span></div>
</body>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.12.6.js"></script>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/OLSCore.0.2.39.js"></script>

</body>
</html>