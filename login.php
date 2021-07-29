<?php


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

   $mobile = $_POST['mobile'];
   $password = $_POST['password'];

    $sql = "INSERT INTO `log` ( `mobile`, `password`) VALUES ( '$mobile', '$password');";

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








