
<?php include('header.php');?>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$GetSession->position;
if($position=='cashier') {
$hide = 'hide';
 
} 
$active = "SalesReport";


$conn = Database::getInstance();
?>

  <?php include_once("side_bar.php"); ?>
	
	<main class="col-xl-10 col-lg-10 col-md-10 col-sm-9 ml-sm-auto  pt-3" role="main">
		
			<div class="container-fluid">
				
		 <div class="pageheader">
			<i class="icon_c icon-bar-chart"></i> Department Analysis
		
		 		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Sales Report</li>
			</ul>
				</div>
		 
		 	<!--and main body here-->
	
<div class="col-sm-12 col-md-12" style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php" class="" >
	<button class="col-sm-3 col-md-2 btn btn-default btn-large smartColor" style="float: left;">
<i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
	

		
</div>

	<div class="col-sm-12 col-md-12" > 
 <div class="col-sm-9 col-md-10" style="text-align:center;">
		
<form id="deptreport" >
<center><strong>From : <input type="text" id="d1"  style="width:223px; height:30px; padding:8px;" name="d1" class="tcal" value="" /> 
To: <input type="text" id="d2"  style="width: 223px; height:30px; padding:8px;" name="d2" class="tcal" value="" />
 <button class="btn btn-info" style="width: 123px; height:35px; margin-top:-8px;margin-left:8px;" ><i class="icon icon-search icon-large"></i> Search</button>
</strong></center>
</form>

	
	

<span style="color:#D2322D; font-weight:bold;"><label for="rep_type"> View By:</label></span>

 <span><label for="sr_rep_type"><input type="radio" class="dpt_rep_type" name="dpt_rep_type" value="Total"   /> Total</label>
 <span><label for="sr_rep_type"><input type="radio" class="dpt_rep_type" name="dpt_rep_type" value="D"   /> Bar</label>
 <span><label for="sr_rep_type"><input type="radio" class="dpt_rep_type" name="dpt_rep_type" value="L"   /> Local</label>
<label for="sr_rep_type"><input type="radio" class="dpt_rep_type" name="dpt_rep_type" value="C"/> Continental</label>
 

				</div>
 
	  </div>


	
<br />
<br />
  
<div  id="dptResultTable" >


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

    