 <?php 
 include_once('classes/functions.php'); 
	$result =   System::loadTblSeat();
	$rowcount = $result->rowcount();
	?>
	<a rel="facebox" href="addSeat.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Seat</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="25%">Hall </th> 
			<th width="25%">Table Number </th> 
			<th width="25%">Seat Number </th> 
			<th width="15%"> Action </th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = $result->fetch())
{			?>
			 	<tr class="del<?php echo $row['sid']; ?>">
				<td hidden><?php echo $row['sid']; ?></td> 
			<td><?php $id=System::getColById('htables', 'tid', $row['tid'], 1); echo System::getColById('hall', 'id', $id, 1); ?></td>  
			<td><?php echo System::getColById('htables', 'tid', $row['tid'], 2); ?></td>  
			<td><?php echo $row['name']; ?></td>  
			<td>
			<input type="hidden" class="action<?php echo $row['sid']; ?>"  name="action" value="deleteSeat" />
<input type="hidden"  class="name<?php echo $row['sid']; ?>" value="<?php echo $row['name']; ?>" />
<a rel="facebox" title="Click to edit this table" href="editSeat.php?id=<?php echo $row['sid']; ?>"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
			<a href="#" id="<?php echo $row['sid']; ?>" class="deltbl" title="Click to Delete the table"><button class="btn btn-danger"><i class="icon-trash"></i></button></a></td>
			</tr>
			<?php
				}
			?>
		
		
		
	</tbody>
</table> 