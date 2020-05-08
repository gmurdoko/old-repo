<?php
                                if(isset($_POST['insert'])){
                                $post_category = $_POST['post_category'];
                                $post_judul = $_POST['post_judul'];
                                $post_author = $_POST['post_author'];
                                $post_date = $_POST['post_date'];
                                $post_image = $_FILES['post_image']['name'];
								$post_image_temp = $_FILES['post_image']['tmp_name'];
                                $post_content = $_POST['post_content'];
                                $post_tags = $_POST['post_tags'];
								$post_command_count = $_POST['post_command_count'];
                                $post_status = $_POST['post_status'];
								
								move_uploaded_file($post_image_temp,"../images/$post_image");
								
								if($post_category == "" || empty($post_category)){ 
                                    echo "Tolong di Isi form Category";
                                }else {
                                    $query = "INSERT INTO post(post_category, post_judul, post_author, post_date, post_image, post_content, post_tags, post_command_count, post_status)";
                                    $query .= "VALUE ('{$post_category}','{$post_judul}','{$post_author}','{$post_date}','{$post_image}','{$post_content}','{$post_tags}','{$post_command_count}','{$post_status}')";
                                    
                                    $create_post_query = mysqli_query($connection, $query);
                                    
                                    if(!$create_post_query){
                                        
                                        die('Query FAILED'. mysqli_error($connection));
											}
										
										}
	   
									}

							?>
<label> Tambah Post <BR> </label>

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="./js/jquery.datetimepicker.css"/>

<script src="./js/jquery.js"></script>
<script src="./js/jquery.datetimepicker.full.min.js"></script><br>
<input type="text" value="" id="datetimepicker_mask"/><br><br>



                          
								<form action="" method="post">
									<div class="form-group">
										<input class = "form-control" type="text" placeholder="Category" name="post_category">
									</div>
									<div class="form-group">
										<input class = "form-control" type="text" placeholder="Judul" name="post_judul">
									</div>
									<div class="form-group">
										<input class = "form-control" type="text" placeholder="Author" name="post_author">
									</div>
									
									<div class="form-group">
										
										<input class = "form-control" type="date" placeholder="Date" name="post_date">
									</div>
									<div class="form-group">
										<label for="post_image">Post Image</label>
										<input type="file" name="post_image">
									</div>
									<div class="form-group">
										<input class = "form-control" type="text" placeholder="Content" name="post_content">
									</div>							
									<div class="form-group">
										<input class = "form-control" type="text" placeholder="Tags" name="post_tags">
									</div>
									<div class="form-group">
										<input class = "form-control" type="text" placeholder="Command Count" name="post_command_count">
									</div>									
									<div class="form-group">
										<input class = "form-control" type="text" placeholder="Status" name="post_status">
									</div>
									<div class="form-group">
										<input class ="btn btn-primary" type="submit" name="insert" value="Tambah">
									</div>
								</form>
								
<script>
$.datetimepicker.setLocale('en');

$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
console.log($('#datetimepicker_format').datetimepicker('getValue'));

$("#datetimepicker_format_change").on("click", function(e){
	$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
	$.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'2016/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
	formatTime:'H:i',
	formatDate:'d.m.Y',
	//defaultDate:'8.12.1986', // it's my birthday
	defaultDate:'+03.01.2016', // it's my birthday
	defaultTime:'10:00',
	timepickerScrollbar:false
});
$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});
</script>