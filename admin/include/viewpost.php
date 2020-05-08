<table class= "table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categories</th>
										<th>Judul</th>
										<th>Author</th>
										<th>Date</th>
										<th>Image</th>
										<th>Content</th>
										<th>Tags</th>
										<th>Command</th>
										<th>Status</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    
                                        <?php
											$query = "select * from post";
											$select_post = mysqli_query($connection,$query);
											while ($row = mysqli_fetch_assoc($select_post)){
											$post_id = $row['post_id'];
											$post_category = $row['post_category'];
											$post_judul = $row['post_judul'];
											$post_author = $row['post_author'];
											$post_date = $row['post_date'];
											$post_image = $row['post_image'];
											$post_content = $row['post_content'];
											$post_tags = $row['post_tags'];
											$post_command_count = $row['post_command_count'];
											$post_status = $row['post_status'];
											
												echo "<tr>";
												echo "<td> {$post_id}</td>";
												echo "<td> {$post_category}</td>";
												echo "<td> {$post_judul}</td>";
												echo "<td> {$post_author}</td>";
												echo "<td> {$post_date}</td>";
												echo "<td> {$post_image}</td>";
												echo "<td> {$post_content}</td>";
												echo "<td> {$post_tags}</td>";
												echo "<td> {$post_command_count}</td>";
												echo "<td> {$post_status}</td>";
												echo "<td><a href='post.php?edit={$post_id}'>Edit</a></td>";
												echo "<td><a href='post.php?delete={$post_id}'>Delete</a></td>";
												echo "</tr>";
										  
												  
												  
											  }

										?>
										<?php
											if(isset ($_GET['delete'])){
											$del_post_id = $_GET['delete'];
											$query = "delete from post where post_id = {$del_post_id}";
											$delete_query = mysqli_query($connection,$query);
											header("location: post.php");
											}
											
											
										?>
										

            
                                    </tbody>
                                
                            </table>
									<form action="" method="post">
										<div class="form-group">
											<input class ="btn btn-primary" type="submit" name="source" value="addpost">
										</div>
                                    </form>