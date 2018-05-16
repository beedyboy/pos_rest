<?php
	include('auth.php');
	$id=$_GET['id'];
	$result = System::loadTblCond('hall','id', $id); 
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="saveEditKit" class="submitForm" role="form" action="#">
<center><h4><i class="icon-edit icon-large"></i> Edit Kitchen</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="action" value="saveEditKit" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<span>Kitchen Name : </span><input type="text" style="width:215px; height:30px;"  name="name" value="<?php echo $row['name']; ?>" Required/><br>
 
<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" type="submit" style="width:217px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
<br />
<div id="update-bottom" class="alert hide" style="margin:20px 0 0;"></div>

</div>
</form>
<?php
}
 include('footer.php');?>