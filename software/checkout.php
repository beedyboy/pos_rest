<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
include_once('classes/functions.php'); 
 $type=$_GET['Ptype'];
 
  $sdsd=$_GET['invoice'];
				$resultas = System::amountSumSalesOrder($sdsd);
				 
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$total=$rowas['sum(amount)'];
			 
				}
				
 $resulta = System::discountSumSalesOrder($_GET['invoice']);
				 
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$profSum=$qwe['sum(discount)'];
			 
				}
			
$finalcode= System::createRandomPassword();
			
?> 
 
<form id="saveSales">
<div id="ac">

<input type="hidden" name="action" value="saveSales" />

<center><h4><i class="icon icon-money icon-large"></i> Order Information</h4></center><hr>
 
<input type="hidden" id="invoice" name="invoice" value="<?php echo $_GET['invoice']; ?>" />

<input type="hidden" name="amount" value="<?php echo $total; ?>" />
<input type="hidden" name="ptype" value="<?php echo $_GET['Ptype']; ?>" />
<input type="hidden" name="ord_type" value="<?php echo $_GET['ord_type']; ?>" />
<input type="hidden" name="cashier" value="<?php echo $GetSession->name; ?>" />
<input type="hidden" name="profit" value="<?php echo $profSum; ?>" />
<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
<input type="hidden" id="finalcode"  name="finalcode" value="<?php echo $finalcode; ?>" />
 

<hr>
  
<?php $loadSeat  = System::loadDistinct('tid','hseat'); ?>
<!--
<span><label for="ord_type">Order Type:</label></span>
<span>
<label for="ord_type"><input type="radio" name="ord_type" value="Take In" checked />Take In</label>
<label for="ord_type"><input type="radio" name="ord_type" value="Take Out" />Take Out</label>
</span>

<br/>  -->
<span><label for="seat">Table :</label></span>
<?php 
if(!empty($loadSeat )): 
?>
<select class="form-control" id="seatTable" name="tid" required>
<option value="">Select Table No</option>
<?php
foreach($loadSeat  as $Seat ):
?>	
<option value="<?php echo $Seat['tid']; ?>" > 
<?php echo  System::getName('htables', 'tid', $Seat['tid'], 2); ?></option>
<?php 
endforeach;
?>
</select>
<?php endif; ?> 

<br/> 
<span>
<label for="CourseCat">Seat Number:</label></span>
<span id="tableList">
<select class="form-control" id="classCourseCat" name="crsTypeId" required>
<option value="">Select Seat First</option>
</select>
</span>
<br/> 
<span>
<label for="CourseCat">Zone:</label></span>
<span id="HallList">
<select class="form-control" name="hall" required>
<option value="">Select Seat First</option>
</select>
</span>
<br/> 
  
<div id="update-bottom" class="alert hide" style="margin:20px 0 0;"></div>
 
<button class="btn btn-success btn-block btn-large pull-right" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
 
</div>
</form>
<?php //include('footer3.php');?>
 
<script src="js/beedy.js" type="text/javascript"></script>  