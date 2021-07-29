<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $paymentmode;

 if($_SERVER['REQUEST_METHOD']=='POST'){
//    if(isset($_POST["name"])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("Could not connect to this database".mysqli_connect_error());
    }
echo "connection successfully established";
    $depositor_name=$_POST['name'];
    $inlineRadioOptions=$_POST['inlineRadioOptions'];
    $D_date=$_POST['D_date'];
    $amount=$_POST['amount'];
    $T_id=$_POST['T_id'];
    $location=$_POST['location'];
    $card_number=$_POST['card_number'];
    $A_id=$_POST['A_id'];
    $remark=$_POST['remark'];
    $mobile_num=$_POST['mobile_num'];
    // $payment_mode="cdm";
    $sql="INSERT INTO `nishulk`.`trial` (`depositor_name`,`inlineRadioOptions`,`D_date`,`amount`,`T_id`,`location`,`card_number`,`A_id`,`remark`,`mobile_num`)
     VALUES ('$depositor_name','$inlineRadioOptions','$D_date','$amount','$T_id','$location','$card_number','$A_id','$remark','$mobile_num')";
      echo $sql;
      
      echo $paymentmode;
      if($paymentmode=="option1"){
            echo "cdm is selected<br><br><br>"; 
            if (isset($_POST["cdm_sbi"])) {
                echo "sbi is set";  
                $sbi=$_POST['cdm_sbi'];
                $sql1="INSERT INTO `nishulk`.`cdm` (`sbi`) VALUES ('$sbi')";
                if($con->query($sql1)==true){
                    echo "<br><br><br>successfully inserted cdm query";
                }
                else{
                    echo "ERROR:$sql<br>$con->error";
                }  
            }         
      }
      else if($paymentmode=='option2'){
        echo "branch_deposit is selected";
        if (isset($_POST["bd_sbi"])) {
            echo "sbi is set";  
            $bd_sbi=$_POST['bd_sbi'];
            $sql2="INSERT INTO `nishulk`.`branch_deposit` (`sbi`) VALUES ('$bd_sbi');";
           
            if($con->query($sql2)==true){
                echo "<br><br><br>successfully inserted branch deposit query";
            }
            else{
                echo "ERROR:$sq2<br>$con->error";
            }  
        }      
      } 
      else if($paymentmode=="option4"){
        echo "upi is selected<br><br><br>"; 
        if (isset($_POST["upi_sbi"])) {
            echo "sbi is set";  
            $sbi=$_POST['upi_sbi'];
            $sql1="INSERT INTO `nishulk`.`upi` (`sbi`) VALUES ('$sbi')";
            if($con->query($sql1)==true){
                echo "<br><br><br>successfully inserted cdm query";
            }
            else{
                echo "ERROR:$sql<br>$con->error";
            }  
        }         
  }

        if($con->query($sql)==true){
            echo "successfully inserted";
        }
        else{
            echo "ERROR:$sql<br>$con->error";
        }
      $con->close();
    }

?>





































<!--?php

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

   $depositor_name = $_POST['depositor_name'];
    $contact = $_POST['contact'];
    $inlineRadioOptions = $_POST['inlineRadioOptions'];
    $d_date = $_POST['d_date'];
    $amount = $_POST['amount'];
    $transaction_id = $_POST['transaction_id'];
    $location = $_POST['location'];
    $card_number = $_POST['card_number'];
    $atm_id = $_POST['atm_id'];
    $remark = $_POST['remark'];
    

    $sql = "INSERT INTO `wbrequest` ( `depositor_name`, `contact`, `inlineRadioOptions`, `d_date`, `amount`, `transaction_id`, `location`, `card_number`, `atm_id`, `remark`) VALUES ( '$depositor_name', '$contact', '$inlineRadioOptions', '$d_date', '$amount', '$transaction_id', '$location', '$card_number', '$atm_id', '$remark');";

    //echo "$sql" ;

    if($con -> query($sql) == true){
        
    }
    else{
        echo "Error: $sql <br> $con ->error";
    }

    if($inlineRadioOptions == "option1"){
       
        echo "sucess";
    }
    else{
        echo "Error: $sql <br> $con ->error";
    }

    $con->close();
}

?-->


