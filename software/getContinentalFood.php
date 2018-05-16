<?php
include_once('classes/functions.php'); 
 $main =$m = $_GET['main']; 
?>

 <input type="hidden" id="main" name="main" value="<?php echo  $main;?>" >
  <input type="hidden" id="date" value="<?php echo date("m/d/y"); ?>" />
 
 
	<div class="row margin-padding-0 ">
		
 
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  seg">
		
	
 <table class=" table table-responsive "  style="margin-top:20px; padding: 0;"  >
	<thead>
		<tr>
		 	 
		 <th> Menu Item </th>
		 
			<th> Qty </th>
			 
		</tr>
	</thead>
	<tbody>
		

	<?php 
	$result =   System::loadAllProductsWhere($main);
	
 
	
	while( $cRow = $result->fetch()){
	?>	
		<tr>
		<td> <!--<label class="form-check-label">
		<input type="checkbox"  class="form-check-input" name="menu[]"  value="<?php //echo $cRow['product_id'];?>">
	 </label>-->	<?php echo $cRow['product_name']; ?>
		</td>
		 
		<td> <div class="col-2">
	<!--	<input type="number" name="quantity" value="1" size="2" maxlength="2" style="border-radius:2px; width:30px;">
		-->
		</div>
		</td>
		
	</tr>
		<?php
	}
	// Continental headed up there
	?>
 
</tbody>
 
 </table>
	
	</div>	  
		
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 seg" >
				
 	<table class=" table table-responsive" style="margin-top:20px; padding:0;" >
	<thead>
		<tr>
		 	 
		 <th> Accessories </th>
		 
			<th> Qty </th>
			 
		</tr>
	</thead>
	<tbody>	 	  
	 
	<?php 
	$result =   System::loadAllProductsWhere("F"); 
	
	while( $cRow = $result->fetch()){
	?>	
		<tr>
		<td > <label class="form-check-label">
		<input type="checkbox"  class="form-check-input" name="menu[]"  value="<?php echo $cRow['product_id'];?>">
		<?php echo $cRow['product_name']; ?> </label></td>
		 
		<td>
			<div class="col-2">
				<input type="number" name="quantity" value="1" size="1" maxlength="2" style="border-radius:2px; width:30px;">
			</div>
		</td>
		
	</tr>
		<?php
	}
	// Continental headed up there
	?>
 
</tbody>
 
 </table>
	
				
	 

			
		</div>
		
		
		 
 	</div>
 <script src="js/beedy.js" type="text/javascript"></script>  