<?php require 'include/header.php'; ?>

<!-- Sidebar -->
<?php require 'include/sidebar.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h1>Bike Rental <small></small></h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
				<li class="active"><i class="icon-file-alt"></i> View Bike</li>
			</ol>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php  
					$select_query = "SELECT * FROM all_bikes ";
					$rslts = $db->select($select_query);

					if ($rslts) {?>
						<h1>Bike  list</h1>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
								<thead>
									<tr>
										<th> Brand</th>
										<th> CC</th>
										<th> Reg</th>
										<th> Location</th>
										<th> Image</th>
										<th> Status</th>
										<th> Edit</th>
										<th> Delete</th>
										
									</tr>
								</thead>
								<tbody>
									<?php while ($row = $rslts->fetch_assoc()) { ?>
										<tr>
											<td><?php echo $row['bike_brand']; ?></td>
											<td><?php echo $row['bike_cc']; ?></td>
											<td><?php echo $row['bike_reg']; ?></td>
											<td><?php echo $row['bike_location']; ?></td>
											<td><img width="80" height="50" src="image/<?php echo $row['bike_img']; ?> " alt="">
											</td>
											<td><?php echo $row['status']; ?></td>
											<td>
												<a href="edit_bike.php?edit=<?php echo $row['bike_id']; ?>"><button class="btn btn-warning">Edit</button></a>
											</td>
											<td>
												<a href="?delete=<?php echo $row['bike_id']; ?>"><button class="btn btn-danger">Delete</button></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						
					<?php }else{

						echo "<h1 style='color:red;text-align:center;'>No bike Found</h1>";
					}



					?>



					


				</div>
			</div>
		</div>
	</div><!-- /.row -->

</div><!-- /#page-wrapper -->
<?php require 'include/footer.php'; ?>

<?php 

	if (isset($_GET['delete'])) {
		$bike_id = $_GET['delete'];

		$del_qry = "DELETE FROM all_bikes WHERE bike_id = $bike_id ";
		$result = $db->delete($del_qry);
		if ($result) {
			echo '<script type="text/javascript">Swal.fire({
					icon: "success",
					title: "Deleted!",
					text: "Bike has been deleted successfully",
					})
					setTimeout(function(){
						window.location.href = "view_all_bike.php";
						}, 2000);
						</script>';
		}else{
			echo '<script type="text/javascript">Swal.fire({
							icon: "error",
							title: "Oops...",
							text: "Bike is not deletd.Try again later",
							})
							setTimeout(function(){
								window.location.href = "view_all_bike.php";
								}, 4000);
								</script>';
		}
	}





 ?>

