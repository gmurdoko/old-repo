<div class="col-md-8">
				<h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
				<?php
				$query = "select * from post";
				$select_post = mysqli_query($connection,$query);
				
					while ($row =
					mysqli_fetch_assoc($select_post)){
						$post_judul = $row['post_judul'];
						$post_author = $row['post_author'];
						$post_date = $row['post_date'];
						$post_image = $row['post_image'];
						$post_content = $row['post_content'];
				?>
				
				<h2>
                    <a href="#"><?php echo $post_judul ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

              
					
				
				<?php
				}
				?>

                

                <!-- First Blog Post -->
                

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

</div>