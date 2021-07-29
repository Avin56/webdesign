<?php
 $server = "localhost";
    $username = "root";
    $password = "";
    $database = "nishulkpay";

    $con = new mysqli($server , $username, $password, $database);
      

    if(!$con){
        die("Connection failed due to".mysqli_connect_error());
    }


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mobile_num = $_POST['mobile_num'];
    $sql = "INSERT INTO    paytm(mobile_num) VALUES ('$mobile_num')";
    if ($con->query($sql) === TRUE) {
        echo "Your message has been sent. Thank you!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    $con->close();
}

?>