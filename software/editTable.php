<?php
	include('auth.php');
	$id=$_GET['id'];
	$result = System::loadTblCond('htables','tid', $id); 
	$resulting =   System::loadKitchensOrderBy();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />


	<form id="saveEditTbl">
			  
				
<center><h4><i class="icon-plus-sign icon-large"></i> Edit Table</h4></center>
<hr />
		
<input type="hidden" name="action" value="saveEditTbl" />
<input type="hidden" name="tid" value="<?php echo $id; ?>" />
				 
				<label>Hall Name</label>
				<?php if(!empty($resulting)): 		?>
				<select name="hall_id" class="custom-select form-control  mr-sm-2 mb-2 mb-sm-0" required>
<option value="">--Select One--</option>
<?php while($hall =  $resulting->fetch()){ ?>	
<option value="<?php echo $hid= $hall['id']; ?>" <?php if($row['id']==$hid): echo "selected"; endif; ?> ><?php echo  $hall['name']; ?></option>
<?php } ?>
</select>	 		   
		<?php	endif; 	?>			<br />
			 
				 <label>Table Number </label>
					<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>"  placeholder="Table Number" >
							  
					<br />
				  
				 
				
				<div id="add-bottom" style=" margin:10px 0 0;" class="col-md-offset-1 col-md-11 alert hide"></div>
				 <div style="float:right; margin-right:50px;">
				 
				<button class="btn btn-success btn-block btn-large pull-right" title="Click to Save" style="width:267px;">
					<i class="icon icon-save icon-large"></i> Save</button>
 </div>
  
		</form>
	<?php
}
 ?>
 
	
  <script src="public/js/jquery.min.js"></script> 
  <script src="js/beedy.js" type="text/javascript"></script>
   
   
  