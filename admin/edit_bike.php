<?php require 'include/header.php'; ?>

<!-- Sidebar -->
<?php require 'include/sidebar.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h1>Bike Rental <small></small></h1>
			<ol class="breadcrumb">
				<li><a href=""><i class="icon-dashboard"></i> Dashboard</a></li>
				<li class="active"><i class="icon-file-alt"></i> Edit Bike</li>
			</ol>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<?php

					if (isset($_GET['edit'])) {
						$bike_id = $_GET['edit'];
						$select_query = "SELECT * FROM all_bikes WHERE bike_id = $bike_id ";
						$rslts = $db->select($select_query);
						if ($rslts) {
							$row = $rslts->fetch_array(); 
							?>


					<h1>Edit Bike</h1>
					<form role="form" method="post" action="edit_bike.php" enctype="multipart/form-data">
						<input type="hidden" name="hidden_b_id" value="<?php echo $row['bike_id']; ?>">
						<label class="control-label" for="inputSuccess">Bike Brand</label>
						<input name="brand" value="<?php echo $row['bike_brand'] ?>" type="text" class="form-control" id="inputSuccess"><br>
						<label class="control-label" for="inputSuccess">Bike CC</label>
						<input name="cc" value="<?php echo $row['bike_cc'] ?>" type="text" class="form-control" id="inputSuccess"><br>
						<label class="control-label" for="inputSuccess">Bike Reg</label>
						<input name="reg" value="<?php echo $row['bike_reg'] ?>" type="text" class="form-control" id="inputSuccess"><br>
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
						<input type="submit" name="edit_bike" class="btn btn-primary" value="Update Bike"><br>
					</form>


						<?php }
					}



					?>


				</div>
			</div>
		</div>
	</div><!-- /.row -->

</div><!-- /#page-wrapper -->
<?php require 'include/footer.php'; ?>

<?php 

if (isset($_POST['edit_bike'])) {
	$brand =$_POST['brand'];
	$cc = $_POST['cc'];
	$reg = $_POST['reg'];
	$location = $_POST['location'];
	$hidden_b_id = $_POST['hidden_b_id'];
	

		if (!empty($brand) && !empty($cc) && !empty($reg) && !empty($location)) {
			$update_query = "UPDATE all_bikes SET bike_brand='$brand',bike_cc='$cc',bike_reg='$reg',bike_location='$location' WHERE bike_id = $hidden_b_id ";
			$rslt = $db->update($update_query);
			if ($rslt) {
				echo '<script type="text/javascript">Swal.fire({
					icon: "success",
					title: "Done!",
					text: "Bike has been successfully updated",
					})
					setTimeout(function(){
						window.location.href = "view_all_bike.php";
						}, 3000);
						</script>';
					}else{
						echo '<script type="text/javascript">Swal.fire({
							icon: "error",
							title: "Oops...",
							text: "Something went wrong",
							})
							setTimeout(function(){
								window.location.href = "view_all_bike.php";
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
									window.location.href = "view_all_bike.php";
									}, 4000);
									</script>';
								}
							
								}



								?>