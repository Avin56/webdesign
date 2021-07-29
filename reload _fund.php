<?php include("./header.php"); ?>

<div class="wallet">
<div class="row">
  <div class="side">
<div class="col-12">  
<div class="list-group" id="myList" role="tablist">
<h5><img src="image/wallet.png">&nbsp;RELOAD FUND</h5>
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#go_wallet" role="tab">Go Wallet</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#funded_wallet" role="tab">Funded Wallet</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#wb_request" role="tab">WB Request</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#fund_transfer" role="tab">Fund Transfer Wallet to Wallet</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#push_distributor" role="tab">Push to Distributor</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#paytm_wallet" role="tab">Paytm Wallet Load</a>
</div>
</div>
</div>
<!-- Tab panes -->
<div class="col"> 
<div class="tab-content">
  <!--////////////GO-WALLET/////////////-->
  <div class="tab-pane active" id="go_wallet" role="tabpanel"><div class="para" id="go_wallet_para">
    <p>Please Contact to Sales representative to Enable the PG service<br>
you can download and submit the PG subscription form to us manually the signed from has to be couriered to our office address. Once it is verified by us, your PG service will be activated . This manual process can take upto 7 working days for us to activate the PG</p>
<button class="btn btn-primary" type="download">DOWNLOAD MANUAL PG ACTIVATION FORM</button>
</div></div>
 <!--////////////End GO-WALLET/////////////-->


  <!--////////////FUNDED WALLET/////////////-->
  <div class="tab-pane" id="funded_wallet" role="tabpanel"><h5>REQUEST FOR FUND</h5>
  <form action="funded.php" method="post">
  <div class="form-row">
    <div class="col">
      <label class="control-label required">WALLET NAME</label>
      <select id="wname" name="wallet" class="form-control" required="required">
        <option selected   value="funded_wallet">Funded Wallet</option>
        <!--option value="bank_wallet">bank WALLET</option-->
      </select>
    </div>
    <div class="col">
       <label for="amount" class="control-label required">AMOUNT</label>
      <input type="number" name="amount" class="form-control" id="amount"  required="required">
    </div>
  </div>
       <button class="btn btn-primary" type="submit">Fund Transfer</button>
</form>
</div>
 <!--////////////End FUNDED WALLET/////////////-->


  <!--////////////WB REQUEST/////////////-->
  <div class="tab-pane" id="wb_request" role="tabpanel"><h5>CREATE WB REQUEST FORM</h5>
    <form>
  <div class="form-row">
    <div class="col">
      <label class="control-label required">DEPOSITOR NAME</label>
      <input type="text" class="form-control" id="depositor_name" placeholder="" required="required">
    </div>
    <div class="col">
      <label class="control-label required">Mobile Number</label>
      <input type="number" class="form-control" id="mobile_num" placeholder="" required="required">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label class="control-label required">PAYMENT MODE</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">CDM</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Branch Deposit</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Online Transfer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
  <label class="form-check-label" for="inlineRadio3">UPI</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
  <label class="form-check-label" for="inlineRadio3">I-Collection</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
  <label class="form-check-label" for="inlineRadio3">E-collection</label>
</div>

<div class="option1 box"><label class="control-label required">CDM BANK</label>
      <select id="cdm" class="form-control" required="required">
        <option>SBI</option>
        <!--option>PNP</option-->
      </select>
    </div>
    <div class="option2 box"><label class="control-label required">BD BANK</label>
      <select id="bd_bank" class="form-control" required="required">
        <option>SBI</option>
        <!--option>PNP</option-->
      </select>
    </div>
    <div class="option3 box">
      <div class="col-sm-6">
      <label class="control-label required">ONLINE MODE</label>
      <select id="online_mode" class="form-control" required="required">
        <option>SBI</option>
        <!--option>PNP</option-->
      </select>
    </div>
    <h6><B><u>BANK INFORMATION</u></B></h6>
    <div class="form-row">
     <div class="col">
    <label class="control-label required">BANK NAME</label>
      <select id="bank_name" class="form-control" required="required">
        <option>SBI</option>
        <!--option>PNP</option-->
      </select>
  </div>
    <div class="col">
    <label for="amount" class="control-label required"> SENDER AMOUNT</label>
      <input type="number" class="form-control" id="amount"  required="required">
    </div>
  </div>
  <div class="form-row">
     <div class="col">
    <label  class="control-label required">SENDER BANK</label>
    <input type="varchar" class="form-control" required="required" id="sender_bank">
  </div>
    <div class="col">
    <label class="control-label required">IFSC</label>
      <input type="varchar" class="form-control" id="ifsc"  required="required">
    </div>
  </div>
    </div>
    <div class="option4 box"><label class="control-label required">UPI BANK</label>
      <select id="upi" class="form-control" required="required">
        <option>SBI</option>
        <!--option>PNP</option-->
      </select>
    </div>
    <div class="option5 box"><label class="control-label required">I-COLLECTION BANK</label>
      <select id="icollect" class="form-control" required="required">
        <option>SBI</option>
        <!--option>PNP</option-->
      </select>
    </div>
    <div class="option6 box"><label class="control-label required">E-COLLECTION BANK</label>
      <select id="ecollect" class="form-control" required="required">
        <option>SBI</option>
        <!--option>PNP</option-->
      </select>
    </div>
    </div>
  </div>

  <div class="form-row">
     <div class="col">
    <label  class="control-label required">DEPOSIT DATE</label>
    <input type="date" class="form-control select-date" required="required">
  </div>
    <div class="col">
    <label for="amount" class="control-label required">AMOUNT</label>
      <input type="number" class="form-control" id=""  required="required">
    </div>
  </div>
  <div class="form-row">
     <div class="col">
    <label  class="control-label required">TRANSACTION ID</label>
    <input type="varchar" class="form-control" required="required">
  </div>
    <div class="col">
    <label class="control-label required">LOCATION</label>
      <input type="varchar" class="form-control" id=""  required="required">
    </div>
  </div>
    <div class="form-row">
     <div class="col">
    <label  class="control-label required">CARD NUMBER</label>
    <input type="varchar" class="form-control" required="required">
  </div>
    <div class="col">
    <label class="control-label required">ATM ID</label>
      <input type="varchar" class="form-control" id=""  required="required">
    </div>
  </div>
  <div class="form-row">
     <div class="col">
    <label  class="control-label required">REMARK</label>
    <input type="varchar" class="form-control" required="required">
  </div>
</div>
   <button class="btn btn-primary" type="submit">SUBMIT</button>
   <button class="btn btn-primary" type="reset">RESET</button>
</form>
  </div>
  <!--////////////End WB REQUEST/////////////-->


  <!--////////////FUND TRANSFER WALLET TO WALLET-->

  <div class="tab-pane" id="fund_transfer" role="tabpanel">
    <h5>FUND TRANSFER WALLET TO WALLET</h5>
  <form method="post" action="fund_transfer_WTW.php">
  <div class="form-row">
    <div class="col">
      <label class="control-label required">AEPS WALLET</label>
      <select id="aeps" class="form-control" required="required" name="aeps_fund">
        <option value="aeps_wal">AEPS Wallet</option>
        <!--option value="bank_transfer">Bank transfer</option-->
      </select>
    </div>
    <div class="col">
       <label class="control-label required">DEPOSIT WALLET NAME</label>
      <select id="fund" class="form-control" required="required" name="funded_wallet">
        <option value="funded">Funded Wallet</option>
        <!--option value="bank_transfer">Bank transfer</option-->
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
    <label for="amount" class="control-label required">AMOUNT</label>
      <input type="number" class="form-control" id="amount"  required="required" name="amount">
    </div>
  </div>

   <button class="btn btn-primary" type="submit">Fund Transfer</button>
</form>
</div>
<!--////////////End FUND TRANSFER WALLET TO WALLET-->


<!--////////////PUSH DISTRIBUTOR/////////////-->

  <div class="tab-pane" id="push_distributor" role="tabpanel"><h5>REQUEST FOR FUND</h5>
  <form action="pushwallet.php" method="post">
  <div class="form-row">
    <div class="col">
      <label class="control-label required">Agent AEPS Wallet:</label>
      <select id="aeps_wallet" name="aeps_wallet" class="form-control" required="required">
        <option selected value="AEPS_Wallet">AEPS Wallet</option>
        <!--option value="Wallet">Wallet</option-->
      </select>
    </div>
    <div class="col">
       <label for="amount" class="control-label required">AMOUNT</label>
      <input type="number" name="amount" class="form-control" id="amount"  required="required">
    </div>
  </div>
       <button class="btn btn-primary" type="submit">PUSH TO DISTRIBUTOR</button>
</form></div>
<!--////////////End PUSH DISTRIBUTOR/////////////-->


  <!--////////////PAYTM WALLET LOAD/////////////-->
   <div class="tab-pane" id="paytm_wallet" role="tabpanel">
     <h5>PAYTM ADD MONEY TO WALLET</h5>
    <form action="paytmwallet.php" method="post">
    <div class="form-row">
    <div class="col-md-6 mb-3">
    <label for="" class="control-label required">CUSTOMER MOBILE NUMBER</label>
      <input type="number" name="mobile_num" class="form-control" id="mobile_num"  required="required">
      <h5>This Service Will Avilable Soon</h5>
    </div>
  </div>

   <button class="btn btn-primary" type="submit">GET CUSTOMER</button>
</form> 
   </div>
     <!--////////////End PAYTM WALLET LOAD/////////////-->
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
</body>
</html>