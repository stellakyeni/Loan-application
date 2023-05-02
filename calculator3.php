<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        .calculator {
	border: 1px solid #ccc;
	padding: 20px;
	width: 300px;
	margin: auto;
	border-radius: 10px;

}

input[type="number"], button {
	margin: 10px 0;
}

label {
	display: block;
	margin-bottom: 5px;
}

p {
	margin-top: 10px;
	font-weight: bold;
}

    </style>

</head>
<body><fieldset>
	<div class="calculator">
		<h2><legend>Loan Calculator</h2></legend>
		<label>Gross Salary:</label>
		<input type="number" id="grossSalary">
		<label>Net Salary:</label>
		<input type="number" id="netSalary">
		<button onclick="calculateLoan()">Calculate Loan</button>
		<p>Loan amount you qualify for: <span id="loanAmount"></span></p>
		<br>
		
	<a href="calculator.html">proceed</a>
    </div>
</fieldset>

	<script> 
    function calculateLoan() {
  var grossSalary = parseInt(document.getElementById("grossSalary").value);
  var netSalary = parseInt(document.getElementById("netSalary").value);
  var loanAmount = 0;
  if (grossSalary > 0 && netSalary > 0) {
    loanAmount = Math.min(grossSalary, netSalary) * 10;
    loanAmount = Math.min(loanAmount, 4000000);
  }
  document.getElementById("loanAmount").innerHTML = loanAmount.toLocaleString();
}
function calculateInsurance() {
	const loanAmount = document.getElementById("loan-amount").value;
	const interestRate = document.getElementById("interest-rate").value;
	const insurancePayment = loanAmount * (interestRate / 100);

	document.getElementById("insurance-payment").value = insurancePayment.toFixed(2);
}

    </script>
</body>
</html>
