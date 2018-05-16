<?php
	include('auth.php');
	$id=$_GET['id'];
	$result = System::loadTblCond('subCategory','subId', $id); 
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form id="saveEditSub" class="submitForm" role="form" action="#">
<center><h4><i class="icon-edit icon-large"></i> Edit Sub Category</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="action" value="saveEditSub" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<span>Main Category : </span>
<select name="main" style="width:215px; height:35px;" onchange="getSubList(this.value)"  required>
<option>--Select One--</option>
<option <?php if($row['main']=="C"): echo "Selected"; endif; ?> value="C">Continental</option>
<option <?php if($row['main']=="L"): echo "Selected"; endif; ?>  value="L">Local Dishes</option> 
<option <?php if($row['main']=="D"): echo "Selected"; endif; ?>  value="D">Drinks</option> 
<option <?php if($row['main']=="S"): echo "Selected"; endif; ?>  value="S">Soup</option> 
</select>
<br>
<span>Sub Category : </span>
<span id="getSubList">
<input type="text" style="width:215px; height:30px;"  name="sub" value="<?php echo $row['sub']; ?>" Required/>
</span>
<br>
 
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