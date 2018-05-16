
<?php include('header.php');?>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$GetSession->position;
if($position=='cashier') {
$hide = 'hide';
 
} 
$active = "BASKET";
?>

  <?php include_once("side_bar.php"); ?>
	
	<main class="col-xl-10 col-lg-10 col-md-10 col-sm-9 ml-sm-auto  pt-3" role="main">
		
			<div class="container-fluid">
				
		 <div class="pageheader">
			<i class="icon_c icon_bag_alt"></i> My Basket
		
		 		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">My Basket</li>
			</ul>
				</div>
		 
		 	<!--and main body here-->
	
<div class="col-sm-12 col-md-12" style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php" class="" >
	<button class="col-sm-3 col-md-2 btn btn-default btn-large smartColor" style="float: left;">
<i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
		  
 
	  

</div>
	

 

<table  width="100%" class="table table-striped table-bordered bg-light ">
                    <thead>
                        <tr> 
                            <th  width="10%">Trans  ID </th> 
                            <th width="15%">Date</th> 
                            <th width="15%">Invoice No </th> 
                            <th width="10%">Amount</th> 
                            <th width="10%">Balance</th> 
                            <th width="15%">Hall</th> 
                            <th width="10%">Table</th> 
                            <th width="10%">Seat</th>   
                        </tr>
                    </thead>
                     <tbody>
					 <?php
 $select = '';
	$output = array();
	$d = "PENDING";
	$cash = $GetSession->name;
	
	$conn = System::getInstance();
	
 $select = " SELECT * FROM sales WHERE status LIKE '%".$d."%' AND cashier LIKE '%".$cash."%'   ";
 $rs  = $conn->db->prepare($select); 
		$rs->execute(); 
		
	
	
	 
		?>
		
		
 
 
		<?php
	foreach($rs as $row)
	{ 
		echo "<tr>";  
		 
		echo "<td>".  $row['transaction_id']."</td>";
	echo "<td>".   $row['date']."</td>";
	echo "<td>".    $row['invoice_number']."</td>";
	echo "<td>".     System::formatMoney($row['amount'], true)."</td>";
	echo "<td>".   System::formatMoney($row['balance'], true)."</td>";
	
	$hall_id = System::getName('hall', 'id', $row['hall'], 1);
	if($hall_id == false):
	$hall = "-";
	else:
	$hall = $hall_id;
	endif;
	
	echo "<td>".   $hall."</td>";
	
	$table_id = System::getName('htables', 'tid', $row['tid'], 2);	
	if($table_id == false):
	$htables = "-";
	else:
	$htables = $table_id;
	endif;
	
	
	echo "<td>".   $htables."</td>";
	
	$seat_id = System::getName('hseat', 'sid', $row['sid'], 2);	
	if($seat_id == false):
	$hseat = "-";
	else:
	$hseat = $seat_id;
	endif;
	
	echo "<td>".   $hseat."</td>";
	
	
	
	echo "</tr>"; 
	}
 
	
 ?>
 
 
					 
                     </tbody>
                </table>
  <div class="clearfix"></div>

 
	 
		
	
	<!--and it ends here-->
		
					</div>
		
				 </main>
				 
				</div>
				
				</section>
				

	 
	<!--/span-->
 
 <?php include('footer3.php'); ?>
</body>

</html>

    