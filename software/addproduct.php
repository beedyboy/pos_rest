<?php 
include_once('classes/functions.php'); 
?>   

	<form id="saveProduct">
			  
				
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr />
			<input type="hidden" name="action" value="saveProduct" />
			
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
<option value="<?php echo $Main; ?>" >
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
<select class="form-control" name="subId" required>
<option value="">Select Main Category First</option>
</select>		  
					</span>
					<br />


				<label>Product Name</label>
					<input type="text"  class="form-control" name="product_name" Required/>
                       <br />
					   
			 
				 
					<label>Selling Price </label>
					<input type="text" id="txt1" class="form-control" name="s_price" onkeyup="sum();" placeholder="Selling Price..." >
				 			   
					<br />
				 <label>Quantity </label>
					<input type="text" id="quantity" class="form-control" name="quantity"  placeholder="Quantity..." >
							  
					<br />
				
				<div id="add-bottom" style=" margin:10px 0 0;" class="col-md-offset-1 col-md-11 alert hide"></div>
				 <div style="float:right; margin-right:50px;">
				 
				<button class="btn btn-success btn-block btn-large pull-right" title="Click to Save" style="width:267px;">
					<i class="icon icon-save icon-large"></i> Save</button>
 </div>
  
		</form>
	
	
 <script src="js/beedy.js" type="text/javascript"></script>  
 
<script src="js/beedyScript.js" type="text/javascript"></script> 