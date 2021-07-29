<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<h1 style="text-align: center; color:white;">Register As Distributor</h1>
<section>
  <div class="container">
    <form action="ndis1.php" method="post">
 <h3 style="text-align: center;"><i class="fa fa-user icon" style="font-size:36px" >&nbsp;</i>Register As Distributor</h3>
      <div class="step step-1 active">
        <div class="form-group">
          <label for="firstName">First Name<span class="req">*</span></label>
          <input type="text" id="firstName" name="first_name" required="">
        </div>
        <div class="form-group">
          <label for="lastName">Last Name<span class="req">*</span></label>
          <input type="text" id="lastName" name="last_name" required="">
        </div><br>
		
		<div class="form-row">
     <div class="col">
    <label  class="control-label required"style=" margin-top: 20px;font-weight: 300px;font-size:20px;font-style: normal;">Gender<span class="req">*</span> </label><br><br>
      <input type="radio" class="btn" name="gender" value="male" checked="checked"><span>Male</span>
       <input type="radio" class="btn" name="gender" value="female"><span>Female</span>
      </div>
	  </div>
	 
        <div class="form-group">
           <label for="email">Email<span class="req">*</span></label>
          <input type="text" id="email" name="Email" required="">
        </div>
		 <div class="form-group">
           <label for="phone">Phone<span class="req">*</span></label>
          <input type="number" id="phone" name="phone_no" required="">
        </div>
		<div class="form-group">
           <label for="cspcode">Address<span class="req">*</span></label>
          <input type="text" id="address" name="address" required="">
        </div>
	<button type="button" class="next-btn">Next</button>
      </div>

      <div class="step step-2">
        <div class="form-group">
          <label for="Pan_Card">Pan Card Number<span class="req">*</span></label>
          <input type="varchar" id="pan_number" name="pan_number" required="">
        </div>
        <div class="form-group">
          <label for="Adhaar">Adhaar Number<span class="req">*</span></label>
          <input type="number" id="phone" name="a_number" required="">
        </div>
		<div class="form-group">
          <label for="Adhar_image">Aadhar Card Image<span class="req">*</span></label>
          <input type="file" name="a_image" id="image_file" required="">
        </div>
        <div class="form-group">
          <label for="pan_image">Pan Card Image<span class="req">*</span></label>
          <input id="image_file" type="file" name="p_image" required="">
        </div>
        <button type="button" class="previous-btn">Prev</button>
      <button type="submit" class="submit-btn">Submit</button>
      </div>


      <!--div class="step step-3">
        <div class="form-group">
          <label for="country">country</label>
          <input type="text" id="country" name="country">
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" id="city" name="city">
        </div>
        <div class="form-group">
          <label for="postCode">Post Code</label>
          <input type="text" id="postCode" name="post-code">
        </div>
        <button type="button" class="previous-btn">Prev</button>
        <button type="submit" class="submit-btn">Submit</button>
      </div-->

    </form>
  </div>
</section>
<script>
const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});
prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const inputs = [];
  form.querySelectorAll("input").forEach((input) => {
    const { name, value } = input;
    inputs.push({ name, value });
  });
  console.log(inputs);
  form.submit();
});

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active");
  index = steps.indexOf(active);
  steps[index].classList.remove("active");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active");
}



</script>
 </body>
  </html>