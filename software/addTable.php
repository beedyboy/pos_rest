<?php 
include_once('classes/functions.php');
$result =   System::loadKitchensOrderBy();
	$rowcount = $result->rowcount();
?>   

	<form id="saveTable">
			  
				
<center><h4><i class="icon-plus-sign icon-large"></i> Add Table</h4></center>
<hr />
			<input type="hidden" name="action" value="saveTable" />
			
				 
				<label>Hall</label>
				<?php if(!empty($result)): 		?>
				<select name="hall_id" class="custom-select form-control  mr-sm-2 mb-2 mb-sm-0" required>
<option value="">--Select One--</option>
<?php while($hall =  $result->fetch()){ ?>	
<option value="<?php echo $hall['id']; ?>" ><?php echo  $hall['name']; ?></option>
<?php } ?>
</select>	 		   
		<?php	endif; 	?>			<br />
			 
				 <label>Table Number </label>
					<input type="text" class="form-control" name="number"  placeholder="Table Number" >
							  
					<br />
				  
				 
				
				<div id="add-bottom" style=" margin:10px 0 0;" class="col-md-offset-1 col-md-11 alert hide"></div>
				 <div style="float:right; margin-right:50px;">
				 
				<button class="btn btn-success btn-block btn-large pull-right" title="Click to Save" style="width:267px;">
					<i class="icon icon-save icon-large"></i> Save</button>
 </div>
  
		</form>
	
	
 <script src="js/beedy.js" type="text/javascript"></script>
  
   