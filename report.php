<?php include("./header.php"); ?>
<div class="wallet">
<div class="row">
  <div class="side">
<div class="col-12">  
<div class="list-group" id="myList" role="tablist">
  <h5><img src="image/report.PNG">&nbsp;Report</h5>
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account_statement" role="tab">ACCOUNT STATEMENT</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#All_transactions_report" role="tab">All Transactions Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#DMT_transaction_report" role="tab">DMT Transaction Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Sender_transaction" role="tab">Sender Transaction Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Wallet_balance_report" role="tab">Wallet Balance Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Fund_request_report" role="tab">Fund Request Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Push_wb_report" role="tab">Push WB Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#WB_request_status" role="tab">WB Request Status</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Agent_Push_back_report" role="tab">Agent Push Back Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#e_atm_transaction_report" role="tab">E-ATM Transaction Report</a>
</div>
</div>
</div>
<div class="col"> 
<div class="tab-content">
  <!--////////////ACCOUNT BALANCE REPORT/////////////-->
  <div class="tab-pane active" id="account_statement" role="tabpanel">
  	<div class="para" id="go_wallet_para">
	<h5>ACCOUNT BALANCE REPORT</h5>
	<div class="form-row">
<div class="col">
    <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
  </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
      <label class="control-label required">WALLET</label>
      <select id="wname" name="wallet" class="form-control" required="required">
        <option selected   value="go_wallet">Funded Wallet</option>
        <option value="funded_wallet">AEPS Wallet</option>
        <option value="bank_wallet">Go Agent Wallet</option>
      </select>
    </div>
    <div class="col">
      &nbsp;&nbsp;
    	<button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
</div>
</div><br>
<button class="btn btn-secondary" type="submit">COPY</button>
<button class="btn btn-secondary" type="submit">Download Excel</button>
</div>
<!--//////////// close ACCOUNT BALANCE REPORT/////////////-->


<!--////////////All Transactions Report/////////////-->
 <div class="tab-pane" id="All_transactions_report" role="tabpanel">
   <div class="para" id="All_transactions_report">
  <h5>All Transactions Report</h5>
  <div class="form-row">
    <div class="col">
       <label  class="control-label required">Service</label>
    <select id="service" name="service" class="form-control" required="required">
        <option selected value="DMT">DMT </option>
        <option value="Recharge">Recharge</option>
        <option value="AEPS">AEPS </option>
        <option value="BBPS">BBPS</option>
        <option value="Cash_Collection">Cash-Collection</option>
        <option value="Micro_ATM">Micro ATM</option>
        <option value="indo_Nepal">indo Nepal</option>
        <option value="Bank_Account_Verification">Bank Account Verification</option>
        <option value="Paytm_Wallet_Load">Paytm Wallet Load</option>
        <option value="Move_To_Bank ">Move To Bank </option>
        <option value="Aadhaar_Pay">Aadhaar Pay</option>
         <option value="Gold_Loan_Lead ">Gold Loan Lead </option>
        <option value="Credit_card_Payments">Credit card Payments</option>
      </select>
    </div>
    <div class="col">
       <label  class="control-label required">Status</label>
    <select id="status" name="status" class="form-control" required="required">
        <option selected   value="all">All</option>
        <option value="success">Success</option>
        <option value="pending">Pending</option>
        <option value="failed">Failed</option>
      </select>
    </div>
<div class="col">
    <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
  </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
      &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
</div>
</div>
</div>
<!--////////////close All Transactions Report/////////////-->


<!--////////////DMT Transaction Report/////////////-->
<div class="tab-pane" id="DMT_transaction_report" role="tabpanel">
  <div class="para" id="DMT_transaction_report">
  <h5>DMT Transaction Report</h5>
  <div class="form-row">
    <div class="col">
       <label  class="control-label required">Service</label>
    <select id="service" name="service" class="form-control" required="required">
        <option selected   value="DMT ">DMT </option>
        <option value="indo_Nepal">indo Nepal</option>
         </select>
    </div>
       <div class="col">
       <label  class="control-label required">Status</label>
    <select id="status" name="status" class="form-control" required="required">
        <option selected   value="all">All</option>
        <option value="success">Success</option>
        <option value="pending">Pending</option>
         <option value="Refund">Refund</option>
        <option value="failed">Failed</option>
         <option value="Refund_pending">Refund pending</option>
      </select>
    </div>
    <div class="col">
      <label class="control-label required">Mobile Number</label>
      <input type="number" class="form-control" id="mobile_num" name="mobile_num" required="required">
    </div>
    <div class="col">
       <label class="control-label required">ACCOUNTNO:</label>
      <input type="number" class="form-control" name="accountno" id="accountno" required="required">
    </div>
    <div class="col">
    <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
  </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
</div>
</div><br>
  <button class="btn btn-primary" type="submit">SUBMIT</button>
</div>
<!--//////////// close DMT Transaction Report/////////////-->


<!--////////////Sender Transaction Report/////////////-->
<div class="tab-pane" id="Sender_transaction" role="tabpanel">
   <div class="para" id="Sender_transaction">
  <h5>Sender Transaction Report</h5>
  <div class="form-row">
    <div class="col">
      <label class="control-label required">Sender MobileNo:</label>
      <input type="number" class="form-control" id="Sender_mobile" name="Sender_mobile" required="required">
    </div>
    <div class="col">
       <label class="control-label required">ACCOUNT NO:</label>
      <input type="number" class="form-control" name="account_no" id="accountno" required="required">
    </div>
     <div class="col">
    <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
  </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
     <div class="col">
      &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
    </div>
</div>
</div>
</div>
<!--//////////// close DMT Transaction Report/////////////-->


<!--////////////Wallet Balance Report/////////////-->
<div class="tab-pane" id="Wallet_balance_report" role="tabpanel">
  <div class="para" id="Wallet_balance_report">
  <h5>Wallet Balance Report</h5>
  <div class="form-row">
    <div class="col">
      <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
    </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
  &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
 <div class="col"></div>
  </div>
</div>
</div>
<!--////////////close Wallet Balance Report/////////////-->


<!--////////////Fund Request Report/////////////-->
<div class="tab-pane" id="Fund_request_report" role="tabpanel">
  <div class="para" id="Fund_request_report">
  <h5>Fund Request Report</h5>
  <div class="form-row">
    <div class="col">
      <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
    </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
  &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
 <div class="col"></div>
  </div>
</div><br>
<button class="btn btn-secondary" type="submit">DOWNLOAD REPORT</button>
</div>
<!--//////////// close Fund Request Report/////////////-->


<!--////////////Push Wb Report/////////////-->
<div class="tab-pane" id="Push_wb_report" role="tabpanel">
  <div class="para" id="Push_wb_report">
  <h5>Push Wb Report</h5>  
  <div class="form-row">
    <div class="col">
      <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
    </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
  &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
 <div class="col"></div>
  </div>
</div><br>
</div>
<!--////////////close Push Wb Report/////////////-->


<!--////////////WB Request Status/////////////-->
<div class="tab-pane" id="WB_request_status" role="tabpanel">
  <div class="para" id="WB_request_status">
 <h5>WB Request Status</h5>  
  <div class="form-row">
    <div class="col">
      <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
    </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
  &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
 <div class="col"></div>
  </div>
</div><br>
<button class="btn btn-secondary" type="submit">EXPORT TABLE DATA INTO EXCEL</button>

</div>

<!--////////////close WB Request Status/////////////-->


<!--////////////Agent Push Back Report/////////////-->
<div class="tab-pane" id="Agent_Push_back_report" role="tabpanel">
  <div class="para" id="Agent_Push_back_report">
<h5>Agent Push Back Report</h5>  
  <div class="form-row">
    <div class="col">
      <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
    </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
  &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
 <div class="col"></div>
  </div>
</div><br>
<button class="btn btn-secondary" type="submit">EXPORT TABLE DATA INTO EXCEL</button>
</div>
<!--//////////// close Agent Push Back Report/////////////-->


<!--////////////E ATM Transaction Report/////////////-->
<div class="tab-pane" id="e_atm_transaction_report" role="tabpanel">
 <div class="para" id="e_atm_transaction_report">
  <h5>E ATM Transaction Report</h5>
  <div class="form-row">
  <div class="col">
      <label  class="control-label required">From Date</label>
    <input type="date" class="form-control select-date" required="required">
    </div>
    <div class="col">
    <label for="amount" class="control-label required">To Date</label>
      <input type="date" class="form-control select-date"  required="required">
    </div>
    <div class="col">
       <label  class="control-label required">Status</label>
    <select id="status" name="status" class="form-control" required="required">
        <option selected   value="all">All</option>
        <option value="success">Success</option>
        <option value="pending">Pending</option>
        <option value="failed">Failed</option>
        <option value="Confirmation_Pending">Confirmation Pending</option>
        <option value="Reversal">Reversal</option>
      </select>
    </div>
     <div class="col">
  &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
</div>
</div>
<!--////////////close E ATM Transaction Report/////////////-->
</div>
</div>
</div>
</div>

</body>
</html>