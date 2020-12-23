<?php require 'include/header.php'; ?>

<!-- Sidebar -->
<?php require 'include/sidebar.php'; ?>
<?php 
  if (isset($_GET['action']) && $_GET['action']=='logout') {
       Session::set("login", false); 
       echo "<script>location.reload();</script>";
    }
?>

<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>User Profile<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="icon-file-alt"></i> My Profile</li>
      </ol>
      <div class="row">
        <?php 
        $user_id= Session::get('userId');
        $select_query = "SELECT * FROM user WHERE user_id = $user_id ";
        $rslts = $db->select($select_query);


        ?>
        <div class="col-md-6 mb-4 col-md-offset-3">
          <?php while ($row = $rslts->fetch_assoc()) { ?>
           <div style="border: 1px solid #ddd; padding: 15px;text-align:center;" class="item-wrap">
             <div class="bike-img">
               <img width="250" height="200" src="image/<?php echo $row['image']; ?>" alt="" />
             </div>
             <div class="details">
               <p><b>User Name : </b><?php echo $row['user_name']; ?> </p>
               <p><b>Email : </b><?php echo $row['user_email']; ?> </p>
               <p><b>Phone : </b><?php echo $row['phone']; ?> </p>
               <p><b>NID: </b><?php echo $row['nid']; ?> </p>
               <a href="?udate=<?php echo $row['user_id']; ?>"><button class="btn btn-success">Update Picture</button></a>  
             </div>
           </div>
         <?php } ?>
       </div>
       <?php 
       if (isset($_GET['udate'])) { ?>

        <div class="col-md-3">
          <form  action="user_profile.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Upload Image:</label>
              <input type="file" name="image" accept=".png, .jpg, .jpeg" />
            </div>
            <button type="submit" name="update_pic" class="btn btn-danger">Submit</button>
          </form>
        </div>


      <?php }



      ?>
    </div>
  </div>
</div><!-- /.row -->

</div><!-- /#page-wrapper -->
<?php require 'include/footer.php'; ?>
<?php 
if (isset($_POST['update_pic'])) {

  $user_img = $_FILES['image']['name'];
    $destination = "image/".$user_img;  
    $file = $_FILES['image']['tmp_name'];
    move_uploaded_file($file, $destination);
   $user_id= Session::get('userId');

  $update_query = "UPDATE user SET image = '$user_img' WHERE user_id = $user_id " ;
    $rs = $db->update($update_query);

    if ($rs) {
      echo '<script type="text/javascript">Swal.fire({
          icon: "success",
          title: "Done!",
          text: "Picture has been successfully Updted",
          })
          setTimeout(function(){
            window.location.href = "user_profile.php";
            }, 3000);
            </script>';
    }else{
      echo '<script type="text/javascript">Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Something went wrong.Please try again",
              })
              setTimeout(function(){
                window.location.href = "user_profile.php";
                }, 4000);
                </script>';
              }

}



 ?>
