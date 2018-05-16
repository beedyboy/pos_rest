<?php 
include_once('classes/functions.php');
$result =   System::loadKitchensOrderBy();
	$rowcount = $result->rowcount();
?>   

	<form id="saveNewSeat">
			  
				
<center><h4><i class="icon-plus-sign icon-large"></i> Add Seat</h4></center>
<hr />
			<input type="hidden" name="action" value="saveSeat" />
			
				 
				<label>Hall</label>
				<?php
				$loadHallType = System::loadDistinct('id','htables'); 
				
if(!empty($loadHallType)): 
?>
				<select  onchange="newHallList(this.value)"  name="hallType"  class="custom-select form-control  mr-sm-2 mb-2 mb-sm-0" required>
<option value="">Select Hall Type</option>
<?php
foreach($loadHallType as $HallType):
?>	
<option value="<?php echo $HallType['id']; ?>" >
<?php echo System::getName('hall', 'id', $HallType['id'], 1); ?></option>
<?php 
endforeach;
?>
</select>
<?php endif; ?>
<br />
			 
				 <label>Table Number </label>
					<span id="newHallList">
<select class="form-control" name="tid" required>
<option value="">Select Hall Type First</option>
</select>		  
					</span>
					<br />
				  
				 <label>Seat Number </label>
					<input type="text" class="form-control" name="name"  placeholder="Seat Number" >
							  
					<br />
				
				<div id="add-bottom" style=" margin:10px 0 0;" class="col-md-offset-1 col-md-11 alert hide"></div>
				 <div style="float:right; margin-right:50px;">
				 
				<button class="btn btn-success btn-block btn-large pull-right" title="Click to Save" style="width:267px;">
					<i class="icon icon-save icon-large"></i> Save</button>
 </div>
  
		</form>
	
	
 <script src="js/beedy.js" type="text/javascript"></script>
  
    