<?php 
include('auth.php');
$tid = $_POST['tid'];  

?>
 
<input type="hidden" class="form-control" name="hid" 
value="<?php  echo $id =System::getName('htables', 'tid', $tid, 1);  ?>" required > 

 <input type="text" class="form-control" name="hall"  style="height:30px;"
value="<?php   $id =System::getName('htables', 'tid', $tid, 1); 
echo System::getName('hall', 'id', $id, 1);?>" required readonly > 
 