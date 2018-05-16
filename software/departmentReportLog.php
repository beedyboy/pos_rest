
<?php
include_once('classes/functions.php');
			 
$conn = Database::getInstance();


$a  =  $_GET['d1'];

  $b =  $_GET['d2'];

  $checker = "Total";

 if( isset($_GET['checker'])):
 	$checker = $_GET['checker'];

 endif;

  $sales_order = array(); 
  $price_order = array(); 
 ?>


	<div class="col-sm-12 col-md-12" style="text-align:center;">
<a href="#" class="printDeptRpt"  d1="<?php echo $_GET["d1"]; ?>"  d2="<?php echo $_GET["d1"]; ?>"  checker="<?php echo $checker; ?>"> 
	<button class="col-sm-3 col-md-2 btn btn-default btn-large smartColor" style="float:right;"font-size:20px;"><i class="icon-print"></i> Print</button></a>

 
		</div>
<table class="table  table-responsive table-bordered" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
		 
			<th  > Product Name </th> 
			<th > Quantity Sold </th> 
			<th>Amount </th>
		<th > Quantity Left </th> 
		</tr>
	</thead>
	
<?php

$select = $conn->db->prepare("SELECT *  FROM sales  WHERE date >= :a AND date <= :b");
$select->execute(array(':a'=>$a,':b'=>$b));

$invoice_list  = $select->fetchAll();


foreach($invoice_list as $LIST):
//loop through each and get product id
//System::getColById($tbl, $col, $id, $return);
//
//
$select2 = $conn->db->prepare("SELECT *  FROM sales_order  WHERE invoice = ?");
$select2->execute(array($LIST['invoice_number']));

while($srow = $select2->fetch()){


if(array_key_exists( $srow['product_id'] , $sales_order) ):

$sales_order[ $srow['product_id']] += $srow['qty'];
$price_order[ $srow['product_id']] += $srow['amount'];


else:
	$sales_order[ $srow['product_id']]  =  $srow['qty'];
$price_order[ $srow['product_id']]  = $srow['amount'];

	endif;
	
 

  ?>


<span><?php // echo $LIST['invoice_number']; ?></span>
 
<?php

}
endforeach;
  ?>



<tbody>


<?php 
$total_qty = '';
$total_amount = 0;

foreach($sales_order as $key => $val){
$p =  System::getColById('products', 'product_id', $key, 1) ;
$main =  System::getColById('products', 'product_id', $key, 4);

if($main != $checker AND $checker =="Total"):
$total_qty += $val;
$total_amount+=$price_order[$key];
	?>
	  
<tr>
<td> <?php echo $p ; ?></td>

<td> <?php echo $val; ?></td>


<td> <?php echo $price_order[$key]; ?></td>
<td> <?php echo  System::getColById('products', 'product_id', $key, 3);?></td>



</tr>

<?php

elseif($main == $checker ):

$total_amount+=$price_order[$key];
	$total_qty += $val;
	
	//echo $checker;
	 
?>
<tr>
<td> <?php echo $p ; ?></td>

<td> <?php echo $val; ?></td>

<td> <?php echo $price_order[$key]; ?></td>

<td> <?php echo  System::getColById('products', 'product_id', $key, 3);?></td>



</tr>


<?php

endif;

}

?>



<tr>
<td></td>
<td >Total Quantity: <span class=" ">

<?php echo $total_qty; ?>

  </span> 
   </td><td >Total Amount: <span class=" ">

<?php echo $total_amount; ?>

  </span> 
   </td>
</tr>

</tbody>

</table>
