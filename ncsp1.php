<?php
/*use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';*/


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "login";

    $con = mysqli_connect($server , $username, $password, $database);

    if(!$con){
        die("Connection failed due to".mysqli_connect_error());
    }
    echo "Thank you!";

   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $gender = $_POST['gender'];
   $Email = $_POST['Email'];
   $phone_no = $_POST['phone_no'];
   $bank_name = $_POST['bank_name'];
   $csp_code = $_POST['csp_code'];
   $address = $_POST['address'];
   $pan_number = $_POST['pan_number'];
   $a_number = $_POST['a_number'];
   $a_image = $_POST['a_image'];
   $p_image = $_POST['p_image'];
   $bank_image = $_POST['bank_image'];
   $csp_image = $_POST['csp_image'];

    $sql = "INSERT INTO `ncd` ( `first_name`, `last_name`, `gender`, `Email`, `phone_no`, `bank_name`, `csp_code`, `address`, `pan_number`, `a_number`, `a_image`, `p_image`, `bank_image`, `csp_image`) VALUES ( '$first_name', '$last_name', '$gender', '$Email', '$phone_no', '$bank_name', '$csp_code', '$address', '$pan_number', '$a_number', '$a_image', '$p_image', '$bank_image', '$csp_image');";

    //echo "$sql" ;

    if($con -> query($sql) == true){
        echo"Thank You";
    }

    else{
        echo "Error...!!".mysqli_error($con);
    }

    $con->close();
}
?>








