<?php require 'inc/header.php'; ?>


<div class="fluied menu-bar sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php"><img src="image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars"></i>
           </button>

           <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item">

                    <a class="nav-link" href="index.php#home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about-us">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#works">HOW IT WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#location">LOCATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#bikes">BIKE</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#contract">CONTACT</a>
                </li>
                <?php if (Session::get('userName')){ ?>
                    <li class="nav-item">
                    <a class="nav-link" href="user/user_profile.php">My Profile</a>
                </li>
               <?php }else{ ?>
                     <li class="nav-item">
                    <a class="nav-link" href="login/login.php">LOGIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signup/signup.php">SIGN UP</a>
                </li>
              <?php  }

                 ?>
               


            </ul>
        </div>

    </nav>
</div>
</div>



<!-- navbar end -->

<?php 

    $select_query = "SELECT * FROM all_bikes WHERE status = 'available' ";
    $rslts = $datab->select($select_query);

    if ($rslts) {?>
        <div class="container">
            <h2 class="text-center mb-4 mt-4">Available Bike On Your Location</h2>
            <div class="row">
                <?php while ($row = $rslts->fetch_assoc()) { ?>
                   <div class="col-md-4 mb-4">
                       <div style="border: 1px solid #ddd; padding: 15px" class="item-wrap">
                           <div class="bike-img">
                               <img width="250" height="200" src="admin/image/<?php echo $row['bike_img']; ?>" alt="" />
                           </div>
                           <div class="details">
                               <p><b>Bike : </b><?php echo $row['bike_brand']; ?> </p>
                                <p><b>CC : </b><?php echo $row['bike_cc']; ?> </p>
                                <p><b>Reg no : </b><?php echo $row['bike_reg']; ?> </p>
                                <p><b>Location: </b><?php echo $row['bike_location']; ?> </p>
                                <?php 
                                if (Session::get('userName')) {?>
                                   <a href="booking_bike.php?booking=<?php echo $row['bike_id']; ?>"><button class="btn btn-success">Book Now!</button></a>  
                                <?php  }else{?>
                                    <p style="color:red;">please <a href="login/login.php">login</a> to book bike!</p>
                                <?php }


                                 ?>
                           </div>
                       </div>
                   </div>

               <?php } ?>
           </div>
       </div>
   <?php }else{

    echo "<h1 style='color:red;text-align:center;'>No Bike Found On This Location</h1>";
}





?>




<section style="margin-top: 30px; " id="footer">

    <section id="full_futtar">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="futtar_icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="futtar_text ">
                        <p>Copyright @ BY <span>Bike Rent Service </span>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<?php require 'inc/footer.php'; ?>



