<?php 
include "../lib/session.php";
Session::check_login();


 ?>

<?php include "../config/config.php" ?>
<?php include "../helpers/formate.php" ?>
<?php include "../lib/database.php" ?>
<?php 
 $db = new Database();
 $frmt = new formate();




?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
               <div class="log_wrap">
                    <h2 class="text-center">User Login</h2>
                    <a style="margin: 0px 44%;" class="text-center" href="../index.php">Home</a>

                <form action="login.php" method="post">
                    <div class="imgcontainer">
                        <img src="img_avatar2-3.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label for="email"><b>Username</b> </label>
                        <input type="text" placeholder="Enter email" name="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <input  type="submit" class="btn btn-success btn-block" name="login" value="Login" /><br>
                        <p>haven't an account? <a href="../signup/signup.php">Register</a> now!</p>
                        
                    </div>
                </form>
                </div> 
            </div>
        </div>
    </div>

    

</body>

</html>

<?php 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $select_query = "SELECT * FROM user WHERE user_email = '$email' AND user_pass = '$psw' ";
    $reslt = $db->select($select_query);
    if ($reslt) {
        $row = mysqli_fetch_array($reslt);

        Session::set("login", true);
        Session::set("userId", $row['user_id']);
        Session::set("userName", $row['user_name']);
        Session::set("userEmail", $row['user_email']);
        header("Location:../user/user_profile.php");
    }else{
        echo '<script type="text/javascript">Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Email or Password Wrong",
                            })
                            setTimeout(function(){
            window.location.href = "login.php";
         }, 2000);
                        </script>';
    }
}



 ?>