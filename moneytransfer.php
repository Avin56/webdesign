<?php include("./header.php"); ?>
<div class="wallet">
<div class="row">
  <div class="side">
<div class="col-12">  
<div class="list-group" id="myList" role="tablist">
<h5><img src="image/monetransfer.png">&nbsp;MONEY TRANSFER</h5>
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#Send_Money" role="tab">Send Money</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Sender_Report" role="tab">Sender Report</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Indo_Nepal" role="tab">Indo Nepal</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Report" role="tab">Report</a>
</div>
</div>
</div>
<div class="col"> 
<div class="tab-content">
  <!--////////////ACCOUNT BALANCE REPORT/////////////-->
  <div class="tab-pane active" id="Send_Money" role="tabpanel">
    <div class="para" id="Send_Money">
  <h5>SEND MONEY</h5>
  <div id="form1">
  <div class="form-row">
<div class="col form-one" id="form1">
       <label class="control-label required">Sender mobile number</label><br>
        <input type="number" class="form-control" id="mobile_num" name="mobile_num" pattern="[ 0-9]{3}-[0-9]{2}-[0-9]{3}" required ><br>
    <div class="form-check form-check-inline">
      <label  class="control-label required"></label><br>
      <input type="radio" class="btn" name="radio" value="IMPS" checked="checked"><span>IMPS</span>&nbsp;
       <input type="radio" class="btn" name="radio" value="NEFT"><span>NEFT</span>&nbsp;&nbsp;&nbsp;
           <input type="button" class="btn btn-primary" id="first-form" value="GO" type="go">
 </div>

 
</div>
</div>
</div>
 <div class="option1 box second-form">
      <div class="col-sm-6">
           <form action="" method="post" id="form2" >
<div class="form-row">
    <div class="col" id="form2">
          <label class="control-label required">Phone No</label>
        <input type="varchar" class="form-control" name="phone_no" placeholder="+91" required="">
      </div>
      <div class="col">
      <label class="control-label required">Name</label>
      <input type="text"class="form-control" name="name" id="name" placeholder="" required="required">
      </div>
  </div><br>
  <div class="form-row">
    <div class="col">
      <label class="control-label required">PIN Code </label>
        <input type="varchar" class="form-control" name="pin_code" placeholder="" required="">
  </div>
  <div class="col">
   <label class="control-label required">Address </label>
        <input type="varchar" class="form-control" name="address" placeholder="" required="">
  </div>
  </div><br>
   <button class="btn btn-primary" type="submit" >SUBMIT</button>
  </div>
</form>
</div>
</div>
   </div>

   
    <div class="tab-pane" id="Sender_Report" role="tabpanel">
   <div class="para" id="Sender_Report">
  <h5>Sender Report</h5>
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
 <div class="tab-pane" id="Indo_Nepal" role="tabpanel">
  <div class="para" id="Indo_Nepal">
  <h5>Indo Nepal</h5>
  <div class="form-row">
<div class="col">
   Indo_Nepal
  </div></div>
  </div>
</div>
 <div class="tab-pane" id="Report" role="tabpanel">
<div class="para" id="Report">
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
      &nbsp;&nbsp;
      <button class="btn btn-primary" type="submit">SUBMIT</button>
 </div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
   $(document).ready(function(){
        $('.second-form').hide();
  $('#first-form').click(function(){
        // $(this).hide();
        var mobile_num= $('#mobile_num').val();
        if(mobile_num.length<10){
          alert("Not a Vlaid number")
        }
        else{
        $('.second-form').show();
        $('.form-one').hide()

          

        }
        // var mbl_numbr= 
        // $('.second-form').removeClass('hide')
  });

  // $('button[type="go"]').click(function(){
  //       var inputValue = $(this).attr("value");
  //       var targetBox = $("." + inputValue);
  //       $(".box").hide();
  //       $(targetBox).show();
  //   });
});
</script>
</body>
</html>