
<?php include('header.php');?>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$GetSession->position;
if($position=='cashier') {
$hide = 'hide';
 
} 
$active = "Account Receivables";
?>

  <?php include_once("side_bar.php"); ?>
	
	<main class="col-xl-10 col-lg-10 col-md-10 col-sm-9 ml-sm-auto  pt-3" role="main">
		
			<div class="container-fluid">
				
		 <div class="pageheader">
			<i class="icon_c icon_flowchart"></i> Account Receivables Report
		
		 		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Account Receivables</li>
			</ul>
				</div>
		 
		 	<!--and main body here-->
	
<div class="col-sm-12 col-md-12" style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php" class="" >
	<button class="col-sm-3 col-md-2 btn btn-default btn-large smartColor" style="float: left;">
<i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
	 
 <div class="col-sm-9 col-md-10" style="text-align:center;">
	<a href="javascript:Clickheretoprint()" style="float:right; font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
	
			</div>
	  

</div>
	


<div class="col-sm-12 col-md-12">
<center> <mark> Search using Transaction ID, Date, Invoice Number, Amount  and Balance </mark></center>

<br />
<br />
	</div>

<table class="table  table-responsive table-bordered" id="receivableTable" data-responsive="table" style="text-align: left;">
	<thead>
	<tr> 
                            <th  width="8%">Trans  ID </th> 
                            <th width="10%">Date</th>  
                            <th width="11%">Cashier</th>  
                            <th width="15%">Invoice No </th> 
                            <th width="10%">Amount</th> 
                            <th width="10%">Balance</th> 
                            <th width="15%">Hall</th> 
                            <th width="8%">Table</th> 
                            <th width="8%">Seat</th>  
                            <th width="10%">Pay</th> 
                            <th width="10%">Print</th> 
                        </tr>
	</thead>
	 
</table>

 <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
 
	 
	<thead>
		<tr>
			<th colspan="3" style="border-top:1px solid #999999"> Totals </th>
			<th colspan="1" style="border-top:1px solid #999999"> 
			<?php
				 
				 
				$results = System::ReceivableSumCond(); 
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['sum(amount)'];
				echo  System::formatMoney($dsdsd, true);
				}
				?>
			</th><th colspan="2" style="border-top:1px solid #999999"> 
			<?php
				//echo  System::formatMoney($tot, true);
			 
				?>
			</th>
		</tr>
	</thead>
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

 
 