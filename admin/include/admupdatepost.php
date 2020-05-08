								
								<label> Edit Post <BR> </label>
								<form action="" method="post">
								<?php
											if(isset ($_GET['edit'])){
											$edit_post_id = $_GET['edit'];
											$query = "select * from post where post_id ='$edit_post_id'";
											$edit_query = mysqli_query($connection,$query);
											while ($row = mysqli_fetch_assoc($edit_query)){
											$post_category = $row['post_category'];
											$post_judul = $row['post_judul'];
											$post_author = $row['post_author'];
											$post_date = $row['post_date'];
											$post_image = $row['post_image'e];
											$post_content = $row['post_content'];
											$post_tags = $row['post_tags'];
											$post_command_count = $row['post_command_count'];
											$post_status = $row['post_status'];					
										?>
									<div class="form-group">
											<input value="<?php if(isset($post_category))
											{echo $post_category;}?>" class = "form-control" type="text" placeholder="Category" name="post_category">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_judul))
											{echo $post_judul;}?>" class = "form-control" type="text" placeholder="Judul" name="post_judul">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_author))
											{echo $post_author;}?>" class = "form-control" type="text" placeholder="Author" name="post_author">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_date))
											{echo $post_date;}?>" class = "form-control" type="date" placeholder="Date" name="post_date">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_image))
											{echo $post_image;}?>" class = "form-control" type="text" placeholder="Image" name="post_image">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_content))
											{echo $post_content;}?>" class = "form-control" type="text" placeholder="Content" name="post_content">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_tags))
											{echo $post_tags;}?>" class = "form-control" type="text" placeholder="Tags" name="post_tags">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_tags))
											{echo $post_date;}?>" class = "form-control" type="date" placeholder="Date" name="post_date">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_comment_count))
											{echo $post_comment_count;}?>" class = "form-control" type="text" placeholder="Comment Count" name="post_comment_count">	
									</div>
									<div class="form-group">
											<input value="<?php if(isset($post_status))
											{echo $post_status;}?>" class = "form-control" type="text" placeholder="Status" name="post_status">	
									</div>
									<?php }}?>
									<div class="form-group">
										<input class ="btn btn-primary" type="submit" name="edit2" value="edit">
									</div>
									<?php
									
											if(isset ($_POST['edit2'])){
											$update_post_category = $_POST['post_category'];
											$post_judul = $_POST['post_judul'];
											$post_author = $_POST['post_author'];
											$post_date = $_POST['post_date'];
											$post_image = $_POST['post_image'];
											$post_content = $_POST['post_content'];
											$post_tags = $_POST['post_tags'];
											$post_command_count = $_POST['post_command_count'];
											$post_status = $_POST['post_status'];
								
											$query = "update post set post_category='$update_post_category', post_judul='$post_judul', post_author='$post_author',post_date='$post_date',post_image='$post_image',post_content='$post_content',post_tags='$post_tags',post_command_count='$post_command_count',post_status='$post_status' where post_id='$edit_post_id'";
											$update_query = mysqli_query($connection,$query);
											header("location: post.php");
											}
											
											
									
									?>
								</form>