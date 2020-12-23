      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Bike Rent</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
           
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
                <li><a href="#">Another Item</a></li>
                <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li> -->
            <li><a href="../admin/view_all_user.php"><i class="fa fa-user"></i> View User</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Rent Option <b class="caret"></b></a>
              <ul class="dropdown-menu">
                 <li><a href="rent_request.php"></i>Rent Request</a></li>
                <li><a href="../admin/confirmed_rent.php">On Going Rent</a></li>
                <li><a href="../admin/completed_rent.php">Completed Rent</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Bikes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../admin/add_bike.php"></i> Add Bike</a></li>
                <li><a href="../admin/view_all_bike.php">All Bikes</a></li>
                <li><a href="../admin/available_bike.php">Availabe Bikes</a></li>
                <li><a href="../admin/booked_bike.php">Booked Bikes</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Message <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../admin/message.php">Unread MSG</a></li>
                <li><a href="../admin/read_message.php">Read MSG</a></li>
              </ul>
            </li>
          </ul>

          <?php require 'include/navigation.php'; ?>
        </div><!-- /.navbar-collapse -->
      </nav>