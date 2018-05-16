<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>
<?php echo $GetSession->companyName; ?>
</title>

    <link rel="shortcut icon" href="ico/facon.png">
<!-- js -->			
<link href="dist/beedy_kaydee.css" media="screen" rel="stylesheet" type="text/css" /> 

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script> 

<link rel="stylesheet" href="public/css/font-awesome.css" />
    <link rel="stylesheet" href="public/css/font-awesome.min.css" />
       <link rel="stylesheet" href="public/css/elegant-icons-style.css" />
	   <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.css" />
    <link rel="stylesheet" href="public/css/jquery-ui.css" />
	
	  <link rel="stylesheet" href="public/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/style/custom.css" />   
	
	<link href="vendors/uniform.default.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" type="text/css" href="tcal.css" />
   
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/elegant-icons-style.css">
    
 

	<!-- combosearch box-->	
	
	  <script src="vendors/jquery-1.7.2.min.js"></script> 

	
<link rel="stylesheet" href="dist/sweetalert.css">
	<script src="dist/sweetalert-dev.js"></script>
	
 

<link href="../pos.css" rel="stylesheet" type="text/css" />
</head>
<body>


 <section class="">
	
	<div class="container ">
<div class="margin-adjust ">
	
  
 <input type="hidden" name="invoice"   id="invoice" value="<?php echo $_GET['invoice']; ?>">
 
 <input type="hidden" name="ord_type"   id="ord_type" value="Take In">
 
 <input type="hidden" name="cashier"   id="cashier" value="<?php echo $GetSession->name; ?>">
		
		<!-- main body div --> 
	
	<div class="bd-6  newsales newsales-right" > 
 <div class="newsales-menu">
			<a href="#" onclick="toggleFullScreen(document.body);"><i class=" fas fa-window-restore  fa-fw"></i></a>
			<a href="#" class="showCalc"><i class="fas fa-calculator fa-fw"></i>Calculator</a>
			<a href="signout.php"><i class="fas fa-power-off fa-fw"></i>Log Out</a>
			<a href="mybasket.php"><i class=" fas fa-shopping-basket fa-fw"></i>Basket</a>
			
			
		</div>
 
<!-- food categories follows -->
<div class="bd-tab-container">
	

		<!-- tab links-->
		<ul class="bd-tab">
			
			<li class="bd-tab-link active"> 
			<a href="#" id="C"  class=""> 
	Continental
</a></li>
			
		 <li class="bd-tab-link"><a href="#" id="L"  class="beedytablinks"> 
	Local Dishes
</a></li>


<li class="bd-tab-link"> <a href="#" id="D"  class="beedytablinks"> 
	Bar
</a>
</li>

<li class="bd-tab-link"> <a href="#" id="F"  class="beedytablinks"> 
	Chicken-Meat
</a>
</li>

 

		</ul>
		<!-- tab links ends up-->
		
	<!-- tab contents goes here -->
		
		<div class="bd-tab-content">
			
			<!-- continental tab panel starts down here -->
			<div class="bd-tab-panel active" data-index="0">
			<?php 
	$cResult =   System::loadAllProductsWhere("C");
	
 
	
	while( $cRow = $cResult->fetch()){
	?>
	<button class="meal-button addMeal" cid="C" id="<?php echo $cRow['product_id'];?>"> <?php echo $cRow['product_name']; ?>
	<br />
	<?php echo $cRow['price']; ?>
	</button>
	<?php
	}
	// Continental headed up there
	?>
			</div>
			
			<!-- local dishes follows -->
			<div class="bd-tab-panel" data-index="1">
				<input type="hidden" id="plate" >
			<?php 
	$lResult =   System::loadAllProductsWhere("L");
	
 
	
	while( $lRow = $lResult->fetch()){
	?>
	<button class=" meal-button addLocalMeal" name="<?php echo $lRow['product_name']; ?>" cid="C" id="<?php echo $lRow['product_id'];?>"> <?php echo $lRow['product_name']; ?>
	<br />
	<?php echo $lRow['price']; ?></button>
	<?php
	}
$sResult =   System::loadAllProductsWhere("S"); 
 
	
	while( $sRow = $sResult->fetch()){
	?>
	<button class=" meal-button addMeal"  cid="S" id="<?php echo $sRow['product_id'];?>"> <?php echo $sRow['product_name']; ?>
	<br />
	<?php echo $sRow['price']; ?></button>
	<?php
	}
 
	?>
	<button class="sendHighlighted">Finish</button>
			</div>
		<!-- local dishes ends up here -->	
			<!-- Bar drinks starts don here -->
			<div class="bd-tab-panel" data-index="2">
			<?php 
	$bResult =   System::loadAllProductsWhere("D"); 
 
	
	while( $bRow = $bResult->fetch()){
	?>
	<button class=" meal-button addMeal"  cid="D" id="<?php echo $bRow['product_id'];?>"> <?php echo $bRow['product_name']; ?>
	<br />
	<?php echo $bRow['price']; ?></button>
	<?php
	}

	?>
			</div>
		<!-- Bar drinks ends up here -->
		
		
		<!-- Chicken and Meats  starts don here -->
			<div class="bd-tab-panel" data-index="3">
			<?php 
	$fResult =   System::loadAllProductsWhere("F"); 
 
	
	while( $fRow = $fResult->fetch()){
	?>
	<button class=" meal-button addMeal"  cid="F" id="<?php echo $fRow['product_id'];?>"> <?php echo $fRow['product_name']; ?>
	<br />
	<?php echo $fRow['price']; ?></button>
	<?php
	}

	?>
			</div>
		<!--  Chicken and Meatsends up here -->
		
		<!-- Chicken and Meats  starts don here -->
			<div class="bd-tab-panel" data-index="4">
			<?php 
	$sResult =   System::loadAllProductsWhere("S"); 
 
	
	while( $sRow = $sResult->fetch()){
	?>
	<button class=" meal-button addMeal"  cid="S" id="<?php echo $sRow['product_id'];?>"> <?php echo $sRow['product_name']; ?>
	<br />
	<?php echo $sRow['price']; ?></button>
	<?php
	}

	?>
			</div>
		<!--  Chicken and Meatsends up here -->
		
		</div>
	 <!-- tab cotent ends up here -->
		
 
</div>
	</div>
	
	<div class="bd-6 newsales ">
		<div class="newsales-menu">
			<a href="index.php"><i class="fas fa-tachometer-alt fa-fw"></i>Dashboard</a>
			<!--<a href="#" class=""><i class="fas fa-hand-paper fa-fw"></i>Hold</a>-->
			<a href="#" id="takeout" class="ord_type"><i class="fas fa-truck-moving fa-fw"></i>Take Away</a>
			<a href="#" id="takein"  class="ord_type"><i class="fas fa-utensils fa-fw"></i>Dine In</a>
				<a href="#" class="refreshInvoive"><i class="fas fa-recycle fa-fw"></i>New Order</a>
			
		</div>
<!-- create a contcontainer for cat products. make it fixed  -->
  
 
  
  <!-- create a last bottom fixed buttons -->
  
  <div class="container ">
<div class="margin-adjust ">

 	<div class="bd-12 bd-cart">
		<!--  main cart here -->
 
 <div class="cart-items">
	<table class="table table-responsive" >
	<thead>
		<tr>
		 	<th> Items </th>
			 <th> Unit Price </th>
			<th> Quantity </th>
		 <th>Dis</th>
			 
			<th> Total Price </th>
		</tr>
	</thead>
	<tbody class="cartBody">
		
			 
		
	</tbody>
	</table>
 </div>
 <!--  main cart ends up here -->
 <!--  cart extension starts here here -->
<div class="cart-extension">
	
	 
</div>
 <!--  cart extension starts up here -->
		<!-- cart buttons -->
		<div class="cart-button">
			<a href="#" class="addtoOrder"  redirect="sales"><i class="fas fa-save fa-fw"></i>Add to Order</a>
				<a href="#" class="refreshInvoive"><i class="fas fa-recycle fa-fw"></i>New Order</a>
				<!--<a href="index.php"><i class="fas fa-hand-paper fa-fw"></i>Hold</a>-->
		<a href="#" class="btn-success checkout"  Ptype="credit" hp="No" ><i class="fas fa-save fa-fw"></i>Send Order</a>
		<?php  if($GetSession->position=="Admin"): ?>
		<a href="#" class="btn-success checkout"  Ptype="credit" hp="Yes"><i class="fas fa-save fa-fw"></i>Help Order</a>
				<?php endif; ?>
				<a href="#" class="emptyCart"><i class="fas fa-trash fa-fw"></i>Empty Cart</a>
		
		</div>
		
	</div>
	</div>
 
	
  </div>
  
		</div>
	<!-- first part ends up here -->
	<!-- main body div ends up here --> 
	
	</div>
	<!-- row ends up -->
	</div>
</section> 
<!-- end of section -->

 
 <?php include('footer3.php'); ?>
 
 <script>
	
	
	function toggleFullScreen(elem) {
    // ## The below if statement seems to work better
	//## if ((document.fullScreenElement && document.fullScreenElement !== null) ||
	//(document.msfullscreenElement && document.msfullscreenElement !== null) ||
	//(!document.mozFullScreen && !document.webkitIsFullScreen)) {
	
 
    if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
        if (elem.requestFullScreen) {
            elem.requestFullScreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullScreen) {
            elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
}
	 
 </script>
</body>

</html>

     