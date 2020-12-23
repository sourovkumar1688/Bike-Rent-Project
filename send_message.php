<?php include "config/config.php" ?>
<?php include "helpers/formate.php" ?>
<?php include "lib/database.php" ?>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
</head>
<body>
 <?php 

 if (isset($_POST['send'])) {
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $u_phone = $_POST['u_phone'];
    $subject = $_POST['subject'];
    $msg_content = $_POST['msg_content'];

    if (!empty($u_name) && !empty($u_email) && !empty($u_phone) && !empty($msg_content) ) {  

            $insert_query = "INSERT INTO user_message(user_name,user_email,user_phone,msg_subject,msg_content) VALUES('$u_name','$u_email','$u_phone','$subject','$msg_content') ";
            $rslt = $db->insert($insert_query);

            if ($rslt) {
                echo '<script type="text/javascript">Swal.fire({
                    icon: "success",
                    title: "Message Sent",
                    text: "Please Wait.We will contact you soon",
                    })
                    setTimeout(function(){
                        window.location.href = "index.php";
                        }, 3000);
                        </script>';
            }else{
             echo '<script type="text/javascript">Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Message is not sent",
                })
                setTimeout(function(){
                    window.location.href = "index.php";
                    }, 5000);
                    </script>'; 
                }

      
    }else{
        echo '<script type="text/javascript">Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Please Fill-up all field",
            })
            setTimeout(function(){
                window.location.href = "index.php";
                }, 5000);
                </script>';
            }
    }




        ?> 

</body>

</html>

