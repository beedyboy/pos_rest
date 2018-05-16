<?php 
include('auth.php');
 $tid = $_POST['tid'];  

 
$loadDistinctCond1 = System::loadTblCond('hseat', 'tid', $tid);  
//$loadDistinctCond1 = System::bdV( $tid); ?>
<?php 
if(!empty($loadDistinctCond1)): 
?>
<select class="form-control" name="seat" required>
<option value="">Select  Seat</option>
<?php
foreach($loadDistinctCond1 as $Table):
?>	
<option value="<?php echo $Table['sid']; ?>" ><?php echo $Table['name']; ?> </option>
<?php 
endforeach;
?>
</select>
<?php
endif; 
?>