<?php require 'include/header.php'; ?>

<!-- Sidebar -->
<?php require 'include/sidebar.php'; ?>

<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Bike Rental <small></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="icon-file-alt"></i> View info</li>
      </ol>
      <div class="row">
        <div class="col-md-12">
          <?php  
          $user_id = Session::get('userId');
          $select_query = "SELECT * FROM bike_booking WHERE booking_user_id = $user_id ";
          $rslts = $db->select($select_query);
          if ($rslts) {?>
            <h1>Rental Information</h1>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>Brand</th>
                    <th>CC</th>
                    <th>Reg</th>
                    <th>Location</th>
                    <th>Image</th>
                    <th>Booking Date</th>
                    <th> Status</th>
                    
                  </tr>
                </thead>
                <tbody>
            <?php while ($row = $rslts->fetch_assoc()) {
              $bike_id = $row['booking_bike_id'];
              $booking_date = $row['booking_date'];
              $booking_status = $row['booking_status'];

           $select_bike_query = "SELECT * FROM all_bikes WHERE bike_id = $bike_id ";
            $bike_rslt = $db->select($select_bike_query);
            if ($bike_rslt) {

               while ($bike_row = $bike_rslt->fetch_assoc()) {
                  $bike_brand =  $bike_row['bike_brand'];
                  $bike_cc =  $bike_row['bike_cc'];
                  $bike_reg =  $bike_row['bike_reg'];
                  $bike_location =$bike_row['bike_location'];
                  $bike_img =  $bike_row['bike_img'];
                  ?>

                  <tr>
                      <td><?php echo $bike_brand; ?></td>
                      <td><?php echo  $bike_cc; ?></td>
                      <td><?php echo $bike_reg; ?></td>
                      <td><?php echo $bike_location; ?></td>
                      <td><img width="75" height="75" src="../admin/image/<?php echo $bike_img; ?>" alt=""></td>
                      <td><?php echo $booking_date; ?></td>
                      <td><?php echo $booking_status; ?></td>
                    </tr>


              <?php }
            }

           } ?>





                </tbody>
              </table>
            </div>
            
          <?php }else{

            echo "<h1 style='color:red;text-align:center;'>Not Found Any Rent</h1>";
          }



          ?>

        </div>
      </div>
    </div>
  </div><!-- /.row -->

</div><!-- /#page-wrapper -->
<?php require 'include/footer.php'; ?>

