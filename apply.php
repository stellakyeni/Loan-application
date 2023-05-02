<?php  include "server/header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Light Loan</title>
  <style>
    /* CSS styles */

    div{
 

  background-repeat: no-repeat;
  background-size: cover;
  font-size: 13px;
   border: 1px solid #ccc;

 padding: 5px;
   /* height: 480px;
   justify-content: center;
  background-repeat: no-repeat;
  background-size: cover;   */
    }
    h1 {
  background-color: #ff008c;
  color: #fff;
  text-align: center;
  margin: 0;
  padding: 1rem;

    }
  
    label {
      display: block;
      margin-bottom: 5px;
    }
    fieldset{
      border: 1px solid #ccc;
	padding: 100px;
	width: 70px;
	margin: auto;
  width: 50%;
  margin: 2rem auto;
  padding: 2rem;
  background-color: #f2f2f2;
  border-radius: 0.5rem;

    }
    h2 {
  background-color: #00d9ff;
  color: #fff;
  text-align: center;
  margin: 0;
  padding: 1rem;
    }
    h3{
      color: white;
    }
    /* input[type="text"], input[type="email"], select {
      width: 50%;
      padding: 5px;
      margin-bottom: 50px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
      width: 50%;
  margin: 2rem auto;
  padding: 2rem;
  background-color: #f2f2f2;
  border-radius: 0.5rem;
    } */
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
form{
  background-color: red ;
  background-repeat: repeat;
  background-size: cover;
  background-position: center;

  Margin-top: 30px;
  margin-bottom: 20px;
  margin-right: 100px;
  margin-left: 100px;
  border-color: green;
border: 10px;
  font-size: 12px;
  font-weight: bold;
  padding: 10px;

}
lable{
  color: red;

}
  </style>
</head>
<body>



<form action="server/action.php" method="post" enctype="multipart/form-data">
 
   
<div class="column col-lg-12">
<fildset>
<h3><legend>Personal Details</legend></h3>

    <label for="name">Name</label>
    <input type="text" id="name" name="name" required> <br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" required><br><br>
    <label for="employee-id">IDno:</label>
    <input type="text" id="employee-id" name="empid" required>
    <br><br>
    <label for="employer">Marital Status</label>
    <select id="Marital Status" name="marital" required>
      <option value="employer">--select Marital Status--</option>
      <option value="Marrried">married</option>
      <option value="single">Single</option>
      <option value="widow">Widow</option>
      <option value="widower">Widower</option>
      <br><b>
       </select>
</div>
    


  <div class="column col-lg-12">
  <h3><legend>Employment Details</legend></h3>
  <label for="pf number">Pf:</label>
    <input type="text" id="employee-id" name="pf" required><br><br>
    <label for="Kra">Kra:</label>
    <input type="text" id="kra" name="kra" required>
    <br><br>
    <label for="">Date </label>
      <input type="date" name="dob" required> <br><br>
    <label for="employer">Employer</label>
    <select id="employer" name="employer" required>
      <option value="employer">--select employer--</option>
      <option value="tsc">Teacher Service Commision</option>
      <option value="psc">Public service commission</option> <br><b>
       </select><br><br>

       <label for="appointment letter">Appointment Letter:</label>
    <input type="file" id="appointment" name="appointment" required><br><br>

      <label for="residential"> Residential detail</label>
      <select id="employer" name="residential" required>
      <option value="residential">--select residential detail--</option>
      <option value="owned">Owned</option>
      <option value="rented">Rented</option> <br><b>
       </select><br><br>
      
      </div>
       
  <div class="column col-lg-12"><h3><legend>Loan Details</legend></h3>
 

      <label for="loan type">Loan Type</label>
      <select id="laon" name="loan" required>
        <option value="">--select loan type--</option>
        <option value="personal loan">Personal loan</option>
        <option value="business loan">Business loan</option>
        <option value="car loan">car loan</option></select>
        <br><br>
        <label for="loanAmount">Loan Amount</label>
    <input type="text" id="phone" name="loanamount" required><br><br>
    <label for="loanAmount">Period (in years)</label>
    <input type="text" id="period" name="period" required><br><br>
    <label for="phone">Monthly Installment</label>
    <input type="text" id="MonthlyInstallment" name="installment" required><br><br>
    <label for="phone">insuarnce </label>
    <input type="text" id="insuarance" name="insuarance" required><br><br>

  <label for="phone">Account Number</label>
    <input type="text" id="phone" name="number" required><br><br>

    <label for="branch">Branch</label>
    <select id="branch" name="branch" required>
      <option value="">--select branch--</option>
      <option value="Personal">Nairobi</option>
      <option value="Business">Mombasa</option>
      <option value="Personal">Kitui</option>
      <option value="Business">kilifi</option>
      <option value="Personal">kiambu</option>
      <option value="Business">turkana</option>
      <option value="Personal">siaya</option>
      <option value="Business">eldoret</option>
      <option value="Personal">kericho</option>
      <option value="Business">meru</option>
    </select> <br><br>
    <label for="branch">Have you ever borrowed from the bank Bank?</label>
    <select id="branch" name="choose" required>
      <option value="yes">Yes</option>
      <option value="no">No</option>
</select> <br><br>  
  if yes, indicate loan balance
  <input type="text" id="phone" name="balance" required><br><br>
  <label for="payslip">Upload Payslips:</label><br><br>
    <input type="file" id="payslip" name="payslip1" required><br><br>
    <input type="file" id="payslip" name="payslip2" required><br><br>
    <input type="file" id="payslip" name="payslip3" required><br><br>
  </div>

  <div class="column col-lg-12">
<h3><legend>Next of Kin</legend></h3>
<label for="full_name">Full Name:</label>
    <input type="text" id="full name" name="kinname" required><br><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="kinphone" required><br><br>

    <label for="relationship">Relationship:</label>
    <input type="text" id="nok_relationship" name="nok" required><br><br>

    <label for="kra">Krapin:</label>
    <input type="tel" id="kra" name="kinkra" required><br><br><br>
    <button class="btn btn-primary" type="submit" name="mtoto_btn">Submit</button> <br>
</div>

</div>
</fieldset></div>
</form>

<!-- <?php
include_once "server/footer.php";
 ?> -->

</body>
</html>
