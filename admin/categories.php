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
                            <small>Categories</small>
                        </h1>
                        
                        <div class="col-xs-6">
                            
                            <?php
                                if(isset($_POST['insert'])){
                                $cat_judul = $_POST['cat_judul'];
                                if($cat_judul == "" || empty($cat_judul)){ 
                                    echo "Tolong di Isi form Categorynya";
                                }else {
                                    $query = "INSERT INTO categories(cat_judul)";
                                    $query .= "VALUE ('{$cat_judul}')";
                                    
                                    $create_cat_query = mysqli_query($connection, $query);
                                    
                                    if(!$create_cat_query){
                                        
                                        die('Query FAILED'. mysqli_error($connection));
											}
										
										}
	   
									}

							?>
							<div class="col-xs-12">
							<label> Tambah Categori <BR> </label>
                          
								<form action="" method="post">
									<div class="form-group">
										<input class = "form-control" type="text" name="cat_judul">
									</div>
									<div class="form-group">
										<input class ="btn btn-primary" type="submit" name="insert" value="Tambah">
									</div>
								</form>
								
								<?php if (isset($_GET['edit'])){
								 $cat_id = $_GET['edit'];
								include 'include/admupdatecategories.php';
								}?>
							</div>
						</div>
                          <div class="col-xs-6">
                            <table class= "table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categories</th>
										<th>haha</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    
                                        <?php
											$query = "select * from categories";
											$select_cat = mysqli_query($connection,$query);
											while ($row = mysqli_fetch_assoc($select_cat)){
											$cat_id = $row['cat_id'];
											$cat_judul = $row['cat_judul'];
												echo "<tr>";
												echo "<td>{$cat_id}</td>";
												echo "<td> {$cat_judul}</td>";
												echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
												echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
												echo "</tr>";
										  
												  
												  
											  }

										?>
										<?php
											if(isset ($_GET['delete'])){
											$del_cat_id = $_GET['delete'];
											$query = "delete from categories where cat_id = {$del_cat_id}";
											$delete_query = mysqli_query($connection,$query);
											header("location: categories.php");
											}
											
											
										?>
										
                                    
                                    
                                    
            
                                    </tbody>
                                
                            </table>
                            
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

</body>