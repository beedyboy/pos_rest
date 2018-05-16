
<?php include('header.php');?>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$GetSession->position;
if($position=='cashier') {
$hide = 'hide';
 
} 
$active = "Hall Management";
?>

  <?php include_once("side_bar.php"); ?>
	
	<main class="col-xl-10 col-lg-10 col-md-10 col-sm-9 ml-sm-auto  pt-3" role="main">
		
			<div class="container-fluid">
				
		 <div class="pageheader">
			<i class="icon_c icon_building"></i> Hall Management
		
		 		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Hall</li>
			</ul>
				</div>
		 
		 	<!--and main body here-->
	
<div class="col-sm-12 col-md-12" style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php" class="" >
	<button class="col-sm-3 col-md-2 btn btn-default btn-large smartColor" style="float: left;">
<i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
	 
	  

</div>
	

   <div class="col-sm-9 col-md-10" style="text-align:center;">
		
 	<!-- tab links-->
		<div class="tab">
			
			<button id="kitMan" class="beedytablinks" onClick="openTabPane(event, 'Kitchen')">Zone Management</button>
				<button class="beedytablinks" onClick="openTabPane(event, 'TableMapping')">Table Management</button>
				<button class="beedytablinks" onClick="openTabPane(event, 'Seat')">Seat Management</button>
			
			
		</div>
		 
		
		
		<!-- myTabContent" -->
			
			<div class="tabcontent" id="Kitchen" >
			 
				
				<h4>Zone Management</h4>
	<Button class="btn  col-sm-3 col-md-2 smartBtn addNewKitchen"  data-toggle="tooltip" title="Add New Zone" style="height:35px;" />
	<i class="icon-plus-sign icon-large"></i> Add Zone</button>


			<table class="table  table-responsive table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th>Name </th>  
			<th> Action </th>
		</tr>
	</thead>
	
	<tbody class="kitchenBody">
	</tbody>

</table>
				
		
			</div>
			
			<!-- TableMapping -->
			<div class="tabcontent" id="TableMapping">
				<h4>Table Management</h4>
	<Button class="btn  col-sm-3 col-md-2 smartBtn addMapTable"  data-toggle="tooltip" title="Add New Table" style="height:35px;" />
	<i class="icon-plus-sign icon-large"></i> Add Table</button>


			<table class="table  table-responsive table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th>Hall </th> 
			<th>Table Number </th> 
			<th> Action </th>
		</tr>
	</thead>
	
	<tbody class="tmapBody">
	</tbody>

</table>
				
			</div>
			
			
			<!-- Seat Mapping -->
			<div class="tabcontent" id="Seat">
				<h4>Seat Mapping</h4>
	<Button class="btn  col-sm-3 col-md-2 smartBtn addSeat"  data-toggle="tooltip" title="Add New Seat" style="height:35px;" />
	<i class="icon-plus-sign icon-large"></i> Add Seat</button>


			<table class="table  table-responsive table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th>Hall </th> 
			<th>Table Number </th> 
			<th>Seat Number </th> 
			<th> Action </th>
		</tr>
	</thead>
	
	<tbody class="seatBody">
	</tbody>

</table>
				
			</div>
			
			
			
			 </div>
	
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

    