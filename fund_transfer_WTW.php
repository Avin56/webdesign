<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "nishulkpay";

    $con = mysqli_connect($server , $username, $password, $database);

    if(!$con){
        die("Connection failed due to".mysqli_connect_error());
    }
    echo "Your message has been sent. Thank you!";

    $aeps_fund  = $_POST['aeps_fund'];
    $funded_wallet = $_POST['funded_wallet'];
    $amount = $_POST['amount'];
    

    $sql = "INSERT INTO `fund_transfer_wallet_to_wallet` ( `aeps_fund`, `funded_wallet`, `amount`) VALUES ( '$aeps_fund', '$funded_wallet', '$amount');";

    //echo "$sql" ;

    if($con -> query($sql) == true){
        
    }
    else{
        echo "Error: $sql <br> $con ->error";
    }

    $con->close();
}
?>