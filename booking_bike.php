<?php require 'inc/header.php'; ?>
<?php require 'inc/footer.php'; ?>
<?php 

if (isset($_GET['booking'])) {
  $bike_id = $_GET['booking'];
  $user_id = Session::get('userId');

  $insert_query = "INSERT INTO bike_booking(booking_user_id,booking_bike_id) VALUES($user_id,$bike_id) ";
  $rslt = $datab->insert($insert_query);
  if ($rslt) {
    $update_query = "UPDATE all_bikes SET status = 'booked' WHERE bike_id = $bike_id " ;
    $datab->update($update_query);
    echo '<script type="text/javascript">Swal.fire({
      icon: "success",
      title: "Done!",
      text: "Please Wait.We will contact You soon",
      })
      setTimeout(function(){
        window.location.href = "index.php";
        }, 3000);
        </script>';
      }else{
        echo '<script type="text/javascript">Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong",
          })
          setTimeout(function(){
            window.location.href = "index.php";
            }, 4000);
            </script>';
          }

        }



      ?>



