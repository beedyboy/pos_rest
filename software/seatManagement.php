 <?php 
 include_once('classes/functions.php');
	$result =   System::loadTblSeat();
	$rowcount = $result->rowcount();
	?>

 
		<?php while($row = $result->fetch())
{			?>
			 	<tr class="del<?php echo $row['sid']; ?>">
				<td hidden><?php echo $row['sid']; ?></td> 
			<td><?php $id=System::getColById('htables', 'tid', $row['tid'], 1); echo System::getColById('hall', 'id', $id, 1); ?></td>  
			<td><?php echo System::getColById('htables', 'tid', $row['tid'], 2); ?></td>  
			<td><?php echo $row['name']; ?></td>  
			<td>
			 
 <a  href="#" class="editSeatMap" title="Click to edit this seat" id="<?php  echo $row['sid']; ?>">

<button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>  
			<a href="#" action="deleteSeat" fname="<?php echo $row['name']; ?>"  id="<?php echo $row['sid']; ?>" class="deleteSeat" title="Click to Delete the seat"><button class="btn btn-danger"><i class="icon-trash"></i></button></a></td>
			</tr>
			<?php
				}
			?>
		 	 
 <script type="text/javascript"> 
 
$(function() {
 

  $('.deleteSeat').click( function() {
var del_id = $(this).attr("id");
var fname = $(this).attr("fname");
var action = $(this).attr("action");
if(confirm("Confirm Seat No "+ fname +" to be deleted? There is NO undo!")){
$.ajax({
type: "POST",
url: "delete.php",
data: ({id: del_id,action: action}),
cache: false,
success: function(html){
alert(html);
 
$(".del"+del_id).fadeOut('slow');
}
});
}
else{
return false;}
});
 
});
</script>