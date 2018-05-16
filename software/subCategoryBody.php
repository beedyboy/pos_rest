<?php
			include_once('classes/functions.php');
			
				$result = System::loadTotalSubCategory(); 
			  $pCount = $result->rowCount();
					if($pCount <1 ): echo "<tr><td colspan='5'>
					<center><strong>No available sub-category at the moment</strong></center></td></tr>"; endif;
			for($i=0; $row = $result->fetch(); $i++){
			 $Main =$row['main']; 

 
			?>
		<tr  class="del<?php echo $row['subId']; ?>">

			 <td>
			 <?php   
			  if($Main=="C"): echo "Continental"; 
elseif($Main=="L"): echo "Local Dishes"; 
elseif($Main=="D"): echo "Drinks"; 
elseif($Main=="S"): echo "Soup"; 
elseif($Main=="F"): echo "Fish - Chicken"; 
elseif($Main=="SM"): echo "Special Meal";

endif;
?>
	

</td>
			 
			 <td><?php echo $row['sub']; ?></td>
			 
			<?php if($GetSession->position=="Admin"): ?>
			<td>
		 
<input type="hidden"  class="name<?php echo $row['subId']; ?>" value="<?php echo $row['main']; ?>" />

<a class="editSubCategory" title="Click to edit"  id="<?php echo $row['subId']; ?>">
<button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
			
			<!--<a href="#" id="<?php echo $row['subId']; ?>" class="delProduct" title="Click to Delete"><button class="btn btn-danger"><i class="icon-trash"></i></button></a> -->
			</td> 
			<?php endif; ?>
			</tr>
			<?php
				}
			?>
		  

