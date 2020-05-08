<?php include '../admin/include/admheader.php';?>


    <body>

    <div id="wrapper">

        

        <!-- Navigation -->
       <?php include './include/admnavigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">
            
               
               
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Master 
                            <small>Post</small>
                        </h1>
                        
                        <div class="col-xs-12">
                            
                            
							<div class="col-xs-12">
							<!-- /.addpost -->
							<?php
								if(isset($_GET['source'])){
									$source=$_GET['source'];
								} else {
									$source='';
								}
								switch ($source) {
									case 'viewpost':
										include './include/viewpost.php';
										break;
									case 'addpost':
										include './include/addpost.php';
										break;
									default:
										include './include/viewpost.php';
										break;
								}
							?>
								
							</div>
						</div>
							<div class="col-xs-12">
                            <!-- /.viewpost -->
							<?php if (isset($_GET['edit'])){
								 $post_id = $_GET['edit'];
								include 'include/admupdatepost.php';
								}?>
							</div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<!-- DATETIME JavaScript -->
	

</body>