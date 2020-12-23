<?php include "../config/config.php" ?>
<?php include "../helpers/formate.php" ?>
<?php include "../lib/database.php" ?>
<?php 
 $db = new Database();
 $frmt = new formate();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="signup.css">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
</head>

<body>
    <div id="login-box">
        <div class="left-box">
            <h1>Sign UP</h1>
             <a style="margin: 0px 35%;" class="text-center" href="../index.php">Home</a>
            <form style="margin-top: 10px" action="signup.php" method="post">
                <input type="text" name="email" placeholder="Email" />
                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="phone" placeholder="Contact Number" />
                <input type="text" name="nid" placeholder="Your NID" />
                <input type="Password" name="password" placeholder="Password" />
                <input type="Password" name="Password2" placeholder="Retype Password" />
                <input type="submit" name="submit" value="Register Now !"/><br>
                <p>Already have an account? <a href="../login/login.php">login</a> here</p>
            </form>
        </div>
    </div>

</body>

</html>

<?php 


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nid = $_POST['nid'];
    $password = $_POST['password'];
    $Password2 = $_POST['Password2'];

    if (!empty($username) && !empty($email) && !empty($phone) && !empty($nid) && !empty($password) && !empty($Password2) ) {  

        if ($password===$Password2) {

            $inser_query = "INSERT INTO user(user_name,user_email,phone,nid,user_pass) VALUES('$username','$email','$phone','$nid','$password') ";
            $rslt = $db->insert($inser_query);

            if ($rslt) {
                echo '<script type="text/javascript">Swal.fire({
                            icon: "success",
                            title: "Congratulation",
                            text: "Your Registration has been successfull",
                            })
                            setTimeout(function(){
            window.location.href = "../login/login.php";
         }, 3000);
                        </script>';
            }else{
               echo '<script type="text/javascript">Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Somthing went Wrong",
                            })
                            setTimeout(function(){
            window.location.href = "signup.php";
         }, 5000);
                        </script>'; 
            }
           
        }else{
            echo '<script type="text/javascript">Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Please input same password",
                            })
                            setTimeout(function(){
            window.location.href = "signup.php";
         }, 5000);
                        </script>';
        }
    }else{
        echo '<script type="text/javascript">Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Field can not be empty",
                            })
                            setTimeout(function(){
            window.location.href = "signup.php";
         }, 5000);
                        </script>';
    }
}




 ?>