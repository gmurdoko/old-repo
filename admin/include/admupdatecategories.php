								<label> Edit Categori <BR> </label>
								<form action="" method="post">
									<div class="form-group">
										<?php
											if(isset ($_GET['edit'])){
											$edit_cat_id = $_GET['edit'];
											$query = "select * from categories where cat_id ='$edit_cat_id'";
											$edit_query = mysqli_query($connection,$query);
											while ($row = mysqli_fetch_assoc($edit_query)){
											$edit_cat_id = $row['cat_id'];
											$cat_judul = $row['cat_judul'];					
										?>
											
											<input value="<?php if(isset($cat_judul))
											{echo $cat_judul;}?>" class = "form-control" type="text" name="cat_judul">
											<?php }}?>
									</div>
									
									<div class="form-group">
										<input class ="btn btn-primary" type="submit" name="edit2" value="edit">
									</div>
									<?php
									
											if(isset ($_POST['edit2'])){
											$update_cat_judul = $_POST['cat_judul'];
											$query = "update categories set cat_judul='$update_cat_judul' where cat_id='$edit_cat_id'";
											$update_query = mysqli_query($connection,$query);
											header("location: categories.php");
											}
											
											
									
									?>
								</form>