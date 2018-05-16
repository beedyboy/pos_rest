
<?php
include_once('classes/functions.php'); 
	 $id = $_GET['id'];
	$result = System::loadTblCond('subcategory', 'subId', $id); 
	while($row = $result->fetch()){
?>
 
<form id="saveEditSub" class="submitForm" role="form" action="#">
<center><h4><i class="icon-edit icon-large"></i> Edit Sub Category</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="action" value="saveEditSub" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<span>Main Category : </span>
<select name="main" class="custom-select form-control  mr-sm-2 mb-2 mb-sm-0"  required>
<option value="">--Select One--</option>
<option <?php if($row['main']=="C"): echo "Selected"; endif; ?> value="C">Continental</option>
<option <?php if($row['main']=="L"): echo "Selected"; endif; ?>  value="L">Local Dishes</option> 
<option <?php if($row['main']=="D"): echo "Selected"; endif; ?>  value="D">Drinks</option> 
<option <?php if($row['main']=="S"): echo "Selected"; endif; ?>  value="S">Soup</option>  
<option <?php if($row['main']=="F"): echo "Selected"; endif; ?>  value="F">Fish - Chicken</option> 
<option <?php if($row['main']=="SM"): echo "Selected"; endif; ?>  value="SM">Special Meal</option> 
</select>
<br>
<span>Sub Category : </span>
 
<input type="text" class="form-control"  name="sub" value="<?php echo $row['sub']; ?>" Required/>
 
<br>
 
<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" type="submit" style="width:217px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
<br />
<div id="update-bottom" class="alert hide" style="margin:20px 0 0;"></div>

 
</form>
<?php
}
?>

 
  <script src="public/js/jquery.min.js"></script> 
  <script src="js/beedy.js" type="text/javascript"></script>   