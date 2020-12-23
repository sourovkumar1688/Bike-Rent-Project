<?php require 'include/header.php'; ?>

<!-- Sidebar -->
<?php require 'include/sidebar.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h1>Bike Rental <small></small></h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
				<li class="active"><i class="icon-file-alt"></i> View Message</li>
			</ol>
			<div class="row">
				<div class="col-md-12">
					<?php  
					$select_query = "SELECT * FROM user_message WHERE msg_status = 'read' ";
					$rslts = $db->select($select_query);

					if ($rslts) {?>
						<h1>Read Message  list</h1>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
								<thead>
									<tr>
										<th> Name</th>
										<th> email</th>
										<th> Phone</th>
										<th> Subject</th>
										<th> Content</th>
										<th> Action</th>
									</tr>
								</thead>
								<tbody>
									<?php while ($row = $rslts->fetch_assoc()) { ?>
										<tr>
											<td><?php echo $row['user_name']; ?></td>
											<td><?php echo $row['user_email']; ?></td>
											<td><?php echo $row['user_phone']; ?></td>
											<td><?php echo $row['msg_subject']; ?></td>
											<td><?php echo $row['msg_content']; ?></td>
											<td>
												<a href="?delete=<?php echo $row['message_id']; ?>"><button class="btn btn-danger">Delete</button></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						
					<?php }else{

						echo "<h1 style='color:red;text-align:center;'>No Messge Found</h1>";
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
		$msg_id = $_GET['delete'];

		$del_qry = "DELETE FROM user_message WHERE message_id = $msg_id ";
		$result = $db->delete($del_qry);
		if ($result) {
			echo '<script type="text/javascript">Swal.fire({
					icon: "success",
					title: "Deleted!",
					text: "Message has been deleted successfully",
					})
					setTimeout(function(){
						window.location.href = "read_message.php";
						}, 2000);
						</script>';
		}else{
			echo '<script type="text/javascript">Swal.fire({
							icon: "error",
							title: "Oops...",
							text: "Message is not deletd.Try again later",
							})
							setTimeout(function(){
								window.location.href = "read_message.php";
								}, 4000);
								</script>';
		}
	}

 ?>

