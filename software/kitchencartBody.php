<?php
			include_once('classes/functions.php');
			$id=$_GET['invoice']; 
				$loadTblCond = System::loadTblCond('sales_order','invoice',$id);
				 //$fetch = $loadTblCond->fetch();
				 $rowCount= $loadTblCond->rowCount();
				for($i=1; $row= $loadTblCond->fetch();  $i++){
			?>
			<tr class="record">
			<td hidden><?php echo $row['product_id']; ?></td>
			 <td><?php echo System::getColById('products', 'product_id', $row['product_id'], 1); ?></td>
			 <td>
			<?php
			$ppp=$row['price'];
			echo System::formatMoney($ppp, true);
			?>
			</td>
			<td><?php echo $row['qty']; ?></td>
			<td>
			<?php
			$dfdf=$row['amount'];
			echo System::formatMoney($dfdf, true);
			?>
			</td>
			<td>
			<?php
			$profit=$row['discount'];
			echo System::formatMoney($profit, true);
			?>
			</td>
			<td width="90"> 
               
			   <a href="deleteOrder.php?id=<?php echo $row['transaction_id']; ?>&from=local&invoice=<?php echo $_GET['invoice']; ?>
		&qty=<?php echo $row['qty'];?>&product_id=<?php echo $row['product_id'];?>"><button class="btn btn-mini btn-warning">
		<i class="icon icon-remove"></i> Cancel </button></a>
			</td>
			</tr>
			<?php
				}
			?>
			<tr>
			<th> </th>
			<th>  </th>
			<th>  </th>
			 
			<td> Total Amount: </td>
			<td> Total Discount: </td>
			<th>  </th>
		</tr>
			<tr>
				<th colspan="3"><strong style="font-size: 12px; color: #222222;">Total:</strong></th>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
				<?php
				 $sdsd=$_GET['invoice'];
				$resultas = System::amountSumSalesOrder($sdsd);
				 
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$total=$rowas['sum(amount)'];
				echo System::formatMoney($total, true);
				}
				?>
				</strong></td>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = System::discountSumSalesOrder($sdsd);
				 
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$profSum=$qwe['sum(discount)'];
				echo System::formatMoney($profSum, true);
				}
				?>
		
				</td>
				<th></th>
			</tr>
			
			<tr style="border:0;">
			<td colspan="6" >
	 
  <div  class="pull-right">
 <form id="saveKitchenOrder">
 <input type="hidden" name="date" value="<?php echo date("m/d/Y"); ?>" />
<input type="hidden" id="invoice" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
<input type="hidden" name="amount" value="<?php echo $total; ?>" /> 
<input type="hidden" name="cashier" value="<?php echo $GetSession->name; ?>" />
<input type="hidden" name="profit" value="<?php echo $profSum ?>" />
<input type="hidden" id="finalcode"  name="finalcode" value="<?php echo System::createRandomPassword(); ?>" />

<input type="hidden" name="action" value="saveKitchenOrder" /> 
<button class="btn btn-success btn-large "><i class="icon icon-save icon-large"></i> Send Order</button>
</form>
</div>
 </td>
			
			</tr>
			

 