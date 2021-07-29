
<!DOCTYPE HTML>  
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="css/contact.css" rel="stylesheet">
<style>
.error {color: #FF0000;}
.cdm_box , .branchdeposit_box,.upi_box{
		display: none;
	}
</style>
</head>
<body>
<div class="cdm_container">
</div>  

<?php
// define variables and set to empty values
$nameErr = $paymentmodeErr="";
$name =$paymentmode= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
 
    
  
  if (empty($_POST["paymentmode"])) {
    $paymentmodeErr = "payment mode is required";
  } else {
    $paymentmode = test_input($_POST["paymentmode"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="tab-pane" id="wb_request" role="tabpanel"><h5>CREATE WB REQUEST FORM</h5>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="form-row">
    <div class="col">
      <label class="control-label required">DEPOSITOR NAME</label>
      <input type="text" class="form-control" name="name" id="depositor_name" placeholder="" required="required">
    </div>
     <div class="col">
      <label class="control-label required">Mobile Number</label>
      <input type="number" class="form-control" id="mobile_num" name="mobile_num" required="required">
    </div>
</div>
<div class="form-row">
    <div class="col">
      <label class="control-label required">PaymentMode:</label>&nbsp;
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="paymentmode" value="cdm" id="cdm">CDM</div>
      <div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" name="paymentmode" id="branchdeposit" value="branchdeposit">Branch Deposit</div>
   <div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" name="paymentmode" value="onlinetransfer" id="onlinetransfer">Online Transfer</div>
  <div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" name="paymentmode" value="upi" id="upi">UPI</div>
   <div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" name="paymentmode" value="iCollection" id="iCollection">I-Collection</div>
   <div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" name="paymentmode" value="ecollection" id="ecollection">E-collection</div>
  <span class="error"><?php echo $paymentmodeErr;?></span>
    </div>
 </div>

  <!-- -------------------------------------- -->
  <div class="cdm_box box">
		<label class="control-label required">CDM Bank</label><br>
        <select name="cdm_sbi" class="form-control" id="sbi" placeholder="SBI" required="required">
            <option value="sbi">SBI</option>
            <option value="pnb">PNB</option>
        </select>
	</div>

  <div class="branchdeposit_box box">
		<label class="control-label required">BD Bank</label><br>
		<select name="bd_sbi" id="bd_sbi" class="form-control" placeholder="SBI" required="required">
            <option value="sbi">SBI</option>
            <option value="pnb">PNB</option>
        </select>
	</div>
     <!-- ------------------------------------------------- -->

      <div class="onlinetransfer_box box">
         <div class="col-sm-6">
      <label class="control-label required">ONLINE MODE</label>
      <select id="online_mode" class="form-control" name="online_sb" required="required">
        <option  value="sbi">SBI</option>
        <option value="pnb">PNB</option>
      </select>
     </div><br>
    <h6><B><u>BANK INFORMATION</u></B></h6>
    <label class="control-label required">BANK NAME</label>
      <select id="bank_name" class="form-control" name="bank_name" required="required">
        <option value="sbi">SBI</option>
        <option value="sbi">PNB</option>
      </select>
      
    <!--div class="form-row">
    <div class="col">
    <label for="amount" class="control-label required"> SENDER AMOUNT</label>
      <input type="number" class="form-control" name="sender_amount" id="amount"  required="required">
       </div>
     <div class="col">
    <label  class="control-label required">SENDER BANK</label>
    <input type="varchar" class="form-control" name="sender_bank"required="required" id="sender_bank">
 </div></div>
 <div class="form-row">
   <div class="col">
    <label class="control-label required">IFSC</label>
      <input type="varchar" class="form-control" id="ifsc" name="ifsc" required="required">
    </div></div-->
</div></div></div>
      <!-- ------------------------------------------------- -->

    <div class="upi_box box">
		<label class="control-label required" reuired="">UPI BANK</label><br>
        <select name="upi_sbi" id="sbi" class="form-control" placeholder="SBI" required="required">
            <option value="sbi">SBI</option>
            <option value="pnb">PNB</option>
        </select>
	</div>
    <div class="iCollection_box box">
        <label class="control-label required" reuired="">I-Collection BANK</label><br>
        <select id="iCollection" name="iCollection_sbi" class="form-control" required="required">
        <option>SBI</option>
        <option>PNB</option>
      </select>
    </div>
    <div class="ecollection_box box">
    <label class="control-label required">E-COLLECTION BANK</label>
      <select id="ecollection" name="eCollection_sbi" class="form-control" required="required">
        <option>SBI</option>
        <option>PNB</option>
      </select></div>
     <br><br>
  <!-- ------------------------------------------------- -->
   <div class="form-row">
     <div class="col">
    <label  class="control-label required">DEPOSIT DATE</label>
    <input type="date" class="form-control select-date" id="d_date" name="D_date" required="required">
  </div><br>
    <div class="col">
    <label for="amount" class="control-label required">AMOUNT</label>
      <input type="number" class="form-control" id="amount" name="amount" required="required">
    </div>
  </div><br>
  <div class="form-row">
     <div class="col">
    <label  class="control-label required">TRANSACTION ID</label>
    <input type="varchar" class="form-control" id="t_id" name="T_id" required="required">
  </div><br>
    <div class="col">
    <label class="control-label required">LOCATION</label>
      <input type="varchar" class="form-control" id="location" name="location"  required="required">
    </div>
  </div><br>
    <div class="form-row">
     <div class="col">
    <label  class="control-label required">CARD NUMBER</label>
    <input type="varchar" class="form-control" name="card_number" id="c_number" required="required">
  </div><br>
    <div class="col">
    <label class="control-label required">ATM ID</label>
      <input type="varchar" class="form-control" id="a_id" name="A_id" required="required">
    </div>
  </div><br>
  <div class="form-row">
     <div class="col">
    <label  class="control-label required">REMARK</label>
    <input type="varchar" class="form-control" name="remark" id="remark" required="required">
  </div>
 
</div><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

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
    $paymentmode=$_POST['paymentmode'];
    $D_date=$_POST['D_date'];
    $amount=$_POST['amount'];
    $T_id=$_POST['T_id'];
    $location=$_POST['location'];
    $card_number=$_POST['card_number'];
    $A_id=$_POST['A_id'];
    $remark=$_POST['remark'];
    $mobile_num=$_POST['mobile_num'];
    // $payment_mode="cdm";
    $sql="INSERT INTO `nishulk`.`wb_request` (`depositor_name`,`payment_mode`,`D_date`,`amount`,`T_id`,`location`,`card_number`,`A_id`,`remark`,`mobile_num`)
     VALUES ('$depositor_name','$paymentmode','$D_date','$amount','$T_id','$location','$card_number','$A_id','$remark','$mobile_num')";
      echo $sql;
      
      echo $paymentmode;
      if($paymentmode=="cdm"){
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
      else if($paymentmode=='branchdeposit'){
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
      else if($paymentmode=='onlinetransfer'){
        echo "onlinetransfer is selected";
        if (isset($_POST["online_sb"])) {
            echo "sbi is set";  
            $online_sb=$_POST['online_sb'];
            $bank_name=$_POST['bank_name'];
            $sender_amount=$_POST['sender_amount'];
            $sql2="INSERT INTO `nishulk`.`online` (`online_sb`, `bank_name`, `sender_amount`) VALUES ('$online_sb', '$bank_name', '$sender_amount');";
           
            if($con->query($sql2)==true){
                echo "<br><br><br>successfully inserted branch deposit query";
            }
            else{
                echo "ERROR:$sq2<br>$con->error";
            }  
        }      
      } 
      

      else if($paymentmode=="upi"){
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
        else if($paymentmode=="iCollection"){
        echo "upi is selected<br><br><br>"; 
        if (isset($_POST["iCollection_sbi"])) {
            echo "sbi is set";  
            $sbi=$_POST['iCollection_sbi'];
            $sql1="INSERT INTO `nishulk`.`iCollection` (`sbi`) VALUES ('$sbi')";
            if($con->query($sql1)==true){
                echo "<br><br><br>successfully inserted iCollection query";
            }
            else{
                echo "ERROR:$sql<br>$con->error";
            }  
        }         
  }
        else if($paymentmode=="ecollection"){
        echo "upi is selected<br><br><br>"; 
        if (isset($_POST["eCollection_sbi"])) {
            echo "sbi is set";  
            $sbi=$_POST['eCollection_sbi'];
            $sql1="INSERT INTO `nishulk`.`eCollection` (`sbi`) VALUES ('$sbi')";
            if($con->query($sql1)==true){
                echo "<br><br><br>successfully inserted eCollection query";
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
<script type="text/javascript">
		$(document).ready(function(){
    	$('input[type="radio"][id$="cdm"]').click(function(){
         $(".cdm_box").show('slow');
    });
    $('input[type="radio"][id$="branchdeposit"]').click(function(){
         $(".branchdeposit_box").show('slow');
    });

     $('input[type="radio"][id$="onlinetransfer"]').click(function(){
         $(".onlinetransfer_box").show('slow');
    });

    $('input[type="radio"][id$="upi"]').click(function(){
         $(".upi_box").show('slow');
    	});
    $('input[type="radio"][id$="iCollection"]').click(function(){
         $(".iCollection_box").show('slow');
        });
     $('input[type="radio"][id$="ecollection"]').click(function(){
         $(".ecollection_box").show('slow');
        });
});
		
</script>
</body>
</html>