<?php require 'include/header.php'; ?>
<?php require 'include/sidebar.php'; ?>
<?php 
  if (isset($_GET['action']) && $_GET['action']=='logout') {
       Session::set_session("admin_login", false); 
       echo "<script>location.reload();</script>";
    }
?>
<?php  
          $select_query1 = "SELECT * FROM all_bikes";
          $rslt1 = $db->select($select_query1);
          if ($rslt1) {
           $count_bike = mysqli_num_rows($rslt1);
          }else{
            $count_bike =0;
          }

          $select_query2 = "SELECT message_id FROM user_message WHERE msg_status = 'unread' ";
          $rslt2 = $db->select($select_query2);
          if ($rslt2) {
           $count_unrd_msg = mysqli_num_rows($rslt2);
          }else{
            $count_unrd_msg =0;
          }
        
          $select_query3 = "SELECT * FROM all_bikes WHERE status = 'available' ";
          $rslt3 = $db->select($select_query3);
          if ($rslt3) {
           $count_availble_bike = mysqli_num_rows($rslt3);
          }else{
            $count_availble_bike =0;
          }

          $select_query4 = "SELECT bike_brand FROM all_bikes GROUP BY bike_brand ";
          $rslt4 = $db->select($select_query4);

          if ($rslt4) {
           $count_bike_brand = mysqli_num_rows($rslt4);
          }else{
            $count_bike_brand =0;
          }

          $count_booked_bike = $count_bike-$count_availble_bike;



          $select_query5 = "SELECT * FROM user";
          $rslt5 = $db->select($select_query5);
          if ($rslt5) {
           $count_user = mysqli_num_rows($rslt5);
          }else{
            $count_user =0;
          }
?>

    <div id="page-wrapper">
      <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-hand-o-right fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $count_bike; ?></p>
                    <p class="announcement-text">All bikes</p>
                  </div>
                </div>
              </div>
              <a href="view_all_bike.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View bikes
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-hand-o-right fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $count_availble_bike; ?></p>
                    <p class="announcement-text">Availble Bikes</p>
                  </div>
                </div>
              </div>
              <a href="available_bike.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View List
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-hand-o-right fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $count_booked_bike; ?></p>
                    <p class="announcement-text">Booked Bike</p>
                  </div>
                </div>
              </div>
              <a href="booked_bike.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View List
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-road fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $count_bike_brand; ?></p>
                    <p class="announcement-text">Bike Brand</p>
                  </div>
                </div>
              </div>
              <a href="add_bike.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View List
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo  $count_user; ?></p>
                    <p class="announcement-text">Registerd User</p>
                  </div>
                </div>
              </div>
              <a href="view_all_user.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      User List
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-envelope fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo  $count_unrd_msg; ?></p>
                    <p class="announcement-text">Unread Message</p>
                  </div>
                </div>
              </div>
              <a href="message.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View List
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

    </div>


<?php require 'include/footer.php'; ?>

   
