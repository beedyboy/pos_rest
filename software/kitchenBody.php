 <?php 
 include_once('classes/functions.php');
	$result =   System::loadKitchensOrderBy();
	$rowcount = $result->rowcount();
	?>

 
		<?php while($row = $result->fetch())
{			?>
			 	<tr class="del<?php echo $row['id']; ?>">
				<td hidden><?php echo $row['id']; ?></td> 
			<td><?php echo $row['name']; ?></td>  
			<td>
			<input type="hidden" class="action<?php echo $row['id']; ?>"  name="action" value="deleteKitchen" />
<input type="hidden"  class="name<?php echo $row['id']; ?>" value="<?php echo $row['name']; ?>" />
<a class="editHallKitchen" title="Click to edit this kitchen" href="#"  id="<?php echo $row['id']; ?>"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
			<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click to Delete the kitchen"><button class="btn btn-danger"><i class="icon-trash"></i></button></a></td>
			</tr>
			<?php
				}
			?>
		 	 
 <script type="text/javascript"> 
 
$(function() {
  $('.delbutton').click( function() {
var del_id = $(this).attr("id");
var firstName = $('.name'+del_id).val();
var action = $('.action'+del_id).val();
if(confirm("Confirm "+ firstName +" details to be deleted? There is NO undo!")){
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