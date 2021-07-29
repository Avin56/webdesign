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
    $aeps_wallet = $_POST['aeps_wallet'];
    $amount = $_POST['amount'];
    $sql = "INSERT INTO    push(aeps_wallet, amount) VALUES ('$aeps_wallet', '$amount')";
    if ($con->query($sql) === TRUE) {
        echo "Your message has been sent. Thank you!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    $con->close();
}

?>