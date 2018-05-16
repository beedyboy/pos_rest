<?php 
include_once('classes/functions.php'); 
  
	$id=$_GET['id'];
	$result = System::loadTblCond('hseat','sid', $id); 
	$resulting =   System::loadKitchensOrderBy();
	while($row = $result->fetch()){
		$tid = $row['tid'];
		$thid= System::getColById('htables', 'tid', $tid, 1);
		$hid= System::getColById('hall', 'id', $thid, 0);
?>


<form id="saveEditSeat" class="submitForm" role="form" action="#">
<center><h4><i class="icon-edit icon-large"></i> Edit Seat</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="action" value="saveEditSeat" />
<input type="hidden" name="sid" value="<?php echo $id; ?>" />
<?php $loadHallType = System::loadDistinct('id','htables'); ?>
<span><label for="hallType">Hall:</label></span>
<?php 
if(!empty($loadHallType)): 
?>
<select  onchange="newHallList(this.value)"  class="form-control" id="edit" name="hallType" required>
<option value="">Select Hall Type</option>
<?php
foreach($loadHallType as $HallType):
?>	
<option value="<?php echo $HallType['id']; ?>" <?php if($HallType['id']==$hid): echo "selected"; endif; ?>  >
<?php echo System::getName('hall', 'id', $HallType['id'], 1); ?></option>
<?php 
endforeach;
?>
</select>
<?php endif; ?> 

<br/> 

 <label>Table Number </label>
					<span id="newHallList">
<select class="form-control" name="tid" required>
<option value="">Select Hall Type First</option>
<option value="<?php echo $row['tid']; ?>" selected ><?php echo System::getColById('htables', 'tid', $row['tid'], 2); ?></option>
</select>		  
					</span>
					<br />
				  
				 <label>Seat Number </label>
					<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" placeholder="Seat Number" >
				

 
<br/> 

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" type="submit" style="width:217px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
<br />
<div id="update-bottom" class="alert hide" style="margin:20px 0 0;"></div>

</div>
</form>
<?php
}
 ?>


	
  <script src="public/js/jquery.min.js"></script> 
  <script src="js/beedy.js" type="text/javascript"></script>
   
   
  