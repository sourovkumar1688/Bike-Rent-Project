<?php require 'include/header.php'; ?>

<!-- Sidebar -->
<?php require 'include/sidebar.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h1>Bike Rental <small></small></h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
				<li class="active"><i class="icon-file-alt"></i> Add Bike</li>
			</ol>
			<div class="row">
				<div class="col-md-5">
					<!-- <h1>Add Bike</h1> -->

					<form role="form" method="post" action="add_bike.php" enctype="multipart/form-data">
						<label class="control-label" for="inputSuccess">Bike Brand</label>
						<input name="brand" type="text" class="form-control" id="inputSuccess"><br>
						<label class="control-label" for="inputSuccess">Bike CC</label>
						<input name="cc" type="text" class="form-control" id="inputSuccess"><br>
						<label class="control-label" for="inputSuccess">Bike Reg</label>
						<input name="reg" type="text" class="form-control" id="inputSuccess"><br>
						<label class="control-label" for="inputSuccess">Bike Location</label>
						<select name="location" id="" class="control-label">
							<option value="Khahan_Bazar">Khahan Bazar</option>
							<option value="YKSG_Hall">YKSG Hall</option>
							<option value="City_University_Hall">City University Hall</option>
							<option value="Kumkumari_Bazar">Kumkumari Bazar</option>
							<option value="Brac_University_Gate">Brac University Gate</option>
							<option value="Akrain_Bari">Akrain Bari</option>
							<option value="Membar_Bari">Membar Bari</option>
						</select><br><br>
						<label class="control-label" for="inputSuccess">Bike Image</label>
						<input name="image" type="file" class="form-control" id="inputSuccess"><br>
						<input type="submit" name="add" class="btn btn-primary" value="Add Bike"><br>
					</form>
				</div>
				<div class="col-md-5 col-md-offset-1">
					<h1 class="text-center">Bike Brand list</h1>
					<?php  
					$select_query = "SELECT bike_brand FROM all_bikes GROUP BY bike_brand ";
					$rslts = $db->select($select_query);

					if ($rslts) {?>
						
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
								<thead>
									<tr>
										<th>Brand Name<i class="fa fa-sort"></i></th>
									</tr>
								</thead>
								<tbody>
									<?php while ($row = $rslts->fetch_assoc()) { ?>
										<tr class="active">
											<td><?php echo $row['bike_brand']; ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						
					<?php }else{

						echo "<h3 style='color:red;text-align:center;'>No Brand Found</h3>";
					}



					?>



					


				</div>
			</div>
		</div>
	</div><!-- /.row -->

</div><!-- /#page-wrapper -->
<?php require 'include/footer.php'; ?>

<?php 

if (isset($_POST['add'])) {
	$brand =$_POST['brand'];
	$cc = $_POST['cc'];
	$reg = $_POST['reg'];
	$location = $_POST['location'];
	$post_img = $_FILES['image']['name'];


	$extension = strtolower(substr($post_img,strlen($post_img)-4,strlen($post_img)));
	$allowed_extensions = array(".jpg","jpeg",".png",".gif");
	if(in_array($extension,$allowed_extensions)){

		$destination = "../admin/image/".$post_img;  
		$file = $_FILES['image']['tmp_name'];
		move_uploaded_file($file, $destination);



		if (!empty($brand) && !empty($cc) && !empty($reg) && !empty($location) && !empty($post_img)) {
			$insert_query = "INSERT INTO all_bikes(bike_brand,bike_cc,bike_reg,bike_location,bike_img) VALUES('$brand','$cc','$reg','$location','$post_img') ";
			$rslt = $db->insert($insert_query);
			if ($rslt) {
				echo '<script type="text/javascript">Swal.fire({
					icon: "success",
					title: "Done!",
					text: "Bike has been successfully added",
					})
					setTimeout(function(){
						window.location.href = "add_bike.php";
						}, 3000);
						</script>';
					}else{
						echo '<script type="text/javascript">Swal.fire({
							icon: "error",
							title: "Oops...",
							text: "Something went wrong",
							})
							setTimeout(function(){
								window.location.href = "add_bike.php";
								}, 4000);
								</script>';
							}

						}else{
							echo '<script type="text/javascript">Swal.fire({
								icon: "error",
								title: "Oops...",
								text: "field can not be empty",
								})
								setTimeout(function(){
									window.location.href = "login.php";
									}, 4000);
									</script>';
								}
							}else{
								echo '<script type="text/javascript">Swal.fire({
									icon: "error",
									title: "Oops...",
									text: "This file is not allowedPlease Select valid image.",
									})
									setTimeout(function(){
										window.location.href = "login.php";
										}, 4000);
										</script>';
									}
								}



								?>