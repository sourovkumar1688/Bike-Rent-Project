<?php require 'include/header.php'; ?>

<!-- Sidebar -->
<?php require 'include/sidebar.php'; ?>

<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Bike Rental <small></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="icon-file-alt"></i> View Request</li>
      </ol>
      <div class="row">
        <div class="col-md-12">
          <?php  
          $select_query = "SELECT * FROM bike_booking WHERE booking_status = 'completed' ";
          $rslts = $db->select($select_query);
          if ($rslts) {?>
            <h1>Bike Rent Request</h1>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>U Name</th>
                    <th> U Email</th>
                    <th>U Phone</th>
                    <th>U NID</th>
                    <th>Bike Brand</th>
                    <th>Location</th>
                    <th> Action</th>
                    <!-- <th> Delete</th> -->
                    
                  </tr>
                </thead>
                <tbody>
            <?php while ($row = $rslts->fetch_assoc()) {
              $booking_id = $row['booking_id'];
              $user_id = $row['booking_user_id'];
              $bike_id = $row['booking_bike_id'];

          $select_user_query = "SELECT * FROM user WHERE user_id = $user_id ";
          $user_rslt = $db->select($select_user_query);
          if ($user_rslt) {

             while ($user_row = $user_rslt->fetch_assoc()) {
                  $user_name = $user_row['user_name'];
                  $user_email = $user_row['user_email'];
                  $user_phone = $user_row['phone']; 
                  $nid = $user_row['nid'];
                }

          }else{
            $user_name ="Removed";
            $user_email = "Removed";
            $user_phone = "Removed";
            $nid = "Removed";
          }

           $select_bike_query = "SELECT * FROM all_bikes WHERE bike_id = $bike_id ";
            $bike_rslt = $db->select($select_bike_query);
            if ($bike_rslt) {

               while ($bike_row = $bike_rslt->fetch_assoc()) {
                   $bike_brand =  $bike_row['bike_brand'];
                  $bike_location =$bike_row['bike_location'];
              }
            }else{
               $bike_brand = "Removed";
               $bike_location = "Removed";
            }

            ?>

            

                    <tr>
                      <td><?php echo $user_name ?></td>
                      <td><?php echo  $user_email; ?></td>
                      <td><?php echo $user_phone; ?></td>
                      <td><?php echo $nid; ?></td>
                      <td><?php echo $bike_brand; ?></td>
                      <td><?php echo $bike_location; ?></td>

                      <!-- <td>
                        <a href="?complete=<?php echo $booking_id; ?>&up_bike=<?php echo $bike_id ?>"><button class="btn btn-danger">Complete Rent</button></a>
                      </td> -->
                      <td>
                        <a href="?delete=<?php echo $booking_id; ?>"><button class="btn btn-danger">Delete</button></a>
                      </td>
                    </tr>




                  <?php } ?>





                </tbody>
              </table>
            </div>
            
          <?php }else{

            echo "<h1 style='color:red;text-align:center;'>Not Found Confirmed Rent</h1>";
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
    $rent_id = $_GET['delete'];

    $del_qry = "DELETE FROM bike_booking WHERE booking_id = $rent_id ";
    $result = $db->delete($del_qry);
    if ($result) {
      echo '<script type="text/javascript">Swal.fire({
          icon: "success",
          title: "Deleted!",
          text: "Request has been deleted successfully",
          })
          setTimeout(function(){
            window.location.href = "rent_request.php";
            }, 2000);
            </script>';
    }else{
      echo '<script type="text/javascript">Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Request is not deletd.Try again later",
              })
              setTimeout(function(){
                window.location.href = "rent_request.php";
                }, 4000);
                </script>';
    }
  }



  // if (isset($_GET['complete'])) {
  //   $rent_id = $_GET['complete'];
  //   $bike_id = $_GET['up_bike'];

  //   $update_qry = "UPDATE bike_booking SET booking_status = 'completed' WHERE booking_id=$rent_id ";
  //   $result = $db->update($update_qry);
  //   if ($result) {
  //     $update_qry = "UPDATE all_bikes SET status = 'available' WHERE bike_id=$bike_id ";
  //       $result = $db->update($update_qry);
  //     echo '<script type="text/javascript">Swal.fire({
  //         icon: "success",
  //         title: "successful",
  //         text: "Rent is Completed For this user",
  //         })
  //         setTimeout(function(){
  //           window.location.href = "confirmed_rent.php";
  //           }, 2000);
  //           </script>';
  //   }else{
  //     echo '<script type="text/javascript">Swal.fire({
  //             icon: "error",
  //             title: "Oops...",
  //             text: "Something went wrong.Try again later",
  //             })
  //             setTimeout(function(){
  //               window.location.href = "confirmed_rent.php";
  //               }, 4000);
  //               </script>';
  //   }
  // }





 ?>

