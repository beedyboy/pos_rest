<link href="dist/beedy_kaydee.css" media="screen" rel="stylesheet" type="text/css" /> 
<?php
include_once('classes/functions.php'); 
	$id=$_GET['id'];
	$result = System::loadTblCond('products','product_id', $id); 
	for($i=0; $row = $result->fetch(); $i++){
  $dmain=$row['main'];
?>
  
	<form id="saveEditProduct" > 
				
<center><h4><i class="icon-edit icon-large"></i> Edit Product</h4></center>
<hr />
			
<input type="hidden" name="action" value="saveEditProduct" />
<input type="hidden" name="product_id" value="<?php echo $id; ?>" />

			 
					 <label>Main Category</label> 
				 	<?php
				$loadMain = System::loadDistinct('main','subcategory'); 
				
if(!empty($loadMain)): 

?>
				<select  onchange="newSubCatList(this.value)"  name="main"  class="custom-select form-control  mr-sm-2 mb-2 mb-sm-0" required>
<option value="">Select Main Category</option>
<?php
foreach($loadMain as $LIST):
	 $Main =$LIST['main']; 

?>	
<option  <?php  if($Main== $dmain): echo "Selected"; endif; ?> value="<?php echo $Main; ?>" >
<?php  
  if($Main=="C"): echo "Continental"; 
elseif($Main=="L"): echo "Local Dishes"; 
elseif($Main=="D"): echo "Drinks"; 
elseif($Main=="S"): echo "Soup"; 
elseif($Main=="F"): echo "Fish - Chicken"; 
elseif($Main=="SM"): echo "Special Meal";

endif;
 ?></option>
<?php 
endforeach;
?>
</select>
<?php endif; ?>


					 	<br />

					 	 <label>Sub Category </label>


					<span id="newSubCatList">
<?php 
$loadTblCond = System::loadTblCond('subcategory', 'main', $dmain ); 

if(!empty($loadTblCond)): 
?>
<select class="form-control" name="subId" required>
<option value="">Select Sub-Category</option>
<?php
while($Table = $loadTblCond->fetch()){
?>	
<option <?php  if( $Table['subId'] == $row['subId']): echo "Selected"; endif; ?> value="<?php echo $Table['subId']; ?>" > <?php echo $Table['sub']; ?></option>
<?php 
}
?>
</select>
<?php
endif; 
?> 	  
					</span>
					<br /> 
				<label>Product Name</label>
					<input type="text"  class="form-control" name="product_name"  value="<?php echo $row['product_name']; ?>" required/>
                       <br />
				 
				</fieldset>
				 
					<label>Selling Price </label>
					<input type="text" id="txt1" class="form-control" name="selling_price" value="<?php echo $row['selling_price']; ?>" onkeyup="sum();" placeholder="Selling Price..."  >
							   
					<br />
				 
				 <label>Quantity Left </label>
					<input type="text" id="quantity" min="0" class="form-control" name="qty_left" value="<?php echo $row['qty_left']; ?>"  placeholder="Quantity..." >
							  
					<br />
				 <div style="float:right; margin-right:50px;">
				 	<button type="submit" class="btn btn-success btn-block btn-large pull-right"
							title="Click to Update Changes" style="width:267px;">
				<i class="icon icon-save icon-large"></i> Save Changes</button>
 
 </div>
 
				<div id="update-bottom" class="col-md-offset-1 col-md-11 alert hide"></div>
				 
		</form>
	 
<?php
}
 ?>
 
  <script src="public/js/jquery.min.js"></script> 
  <script src="js/beedy.js" type="text/javascript"></script>   