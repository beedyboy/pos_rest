<?php 
include('auth.php');
$main = $_POST['main']; 
$loadTblCond = System::loadTblCond('subCategory', 'main', $main); ?>
<?php 
if(!empty($loadTblCond)): 
?>
<select class="form-control" name="sub" required>
<option value="">Select Sub Category</option>
<?php
while($Sub = $loadTblCond->fetch()){
?>	
<option value="<?php echo $Sub['subId']; ?>" > <?php echo $Sub['sub']; ?></option>
<?php 
}
?>
</select>
<?php
endif; 
?>