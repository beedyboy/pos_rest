<?php 
include_once('classes/functions.php');
$result =   System::loadKitchensOrderBy();
	$rowcount = $result->rowcount();
?>   

	<form id="addKitchen">
			  
				
<center><h4><i class="icon-plus-sign icon-large"></i> Add Kitchen</h4></center>
<hr />
			<input type="hidden" name="action" value="addKitchen" />
			
			 
				 <label>Name </label>
					<input type="text" class="form-control" name="name"  placeholder="Name" >
							  
					<br />
				
				<div id="add-bottom" style=" margin:10px 0 0;" class="col-md-offset-1 col-md-11 alert hide"></div>
				 <div style="float:right; margin-right:50px;">
				 
				<button class="btn btn-success btn-block btn-large pull-right" title="Click to Save" style="width:267px;">
					<i class="icon icon-save icon-large"></i> Save</button>
 </div>
  
		</form>
	
	
 <script src="js/beedy.js" type="text/javascript"></script>
  
   