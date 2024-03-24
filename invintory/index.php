<?php 
ob_start();
session_start();
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>

    <div class="header">
        <?php include('header.php');?>
    </div>
    
<div class="main">
   <div class="body">
      <div class="sidebar">
         <div>
           <?php include ('sidnav.php');?>
         </div>
      </div>

<div class="container">
 <div class="row">
			<div class="col-lg-12">
				<div class="card card-default rounded-0 shadow">
                    <div class="card-header">
                    	<div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="card-title">Product List</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row"><div class="col-sm-12 table-responsive">
                            <table id="productList" class="table table-bordered table-striped">
                                <thead><tr>
                                    <th>ID</th>      
									<th>Category</th>	
									<th>Brand Name</th>									
                                    <th>Product Name</th>
									<th>Product Model</th>
                                    <th>Quantity</th>
                                    <th>Supplier Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr></thead>
                            </table>
                        </div></div>
                    </div>
                </div>
			</div>
		</div>

</div>	
	</div>

</div>



