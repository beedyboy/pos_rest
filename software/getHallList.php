<?php 
include('auth.php');
$hallType = $_POST['hallType']; 
$loadTblCond = System::loadTblCond('htables', 'id', $hallType); ?>
<?php 
if(!empty($loadTblCond)): 
?>
<select class="form-control" name="tid" required>
<option value="">Select Table</option>
<?php
while($Table = $loadTblCond->fetch()){
?>	
<option value="<?php echo $Table['tid']; ?>" > <?php echo $Table['name']; ?></option>
<?php 
}
?>
</select>
<?php
endif; 
?>