<!DOCTYPE html>
<html>
<head>
	<title>Insurance Payment Calculator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Insurance Payment Calculator</h1>
	<form>
		<label for="loan-amount">Loan Amount:</label>
		<input type="number" id="loan-amount" name="loan-amount" required>
<br><br>
		<label for="interest-rate">Interest Rate:</label>
		<input type="number" id="interest-rate" name="interest-rate" step="0.01" required>

		<input type="button" value="Calculate" onclick="calculateInsurance()">

		<label for="insurance-payment">Insurance Payment:</label>
		<input type="number" id="insurance-payment" name="insurance-payment" readonly>
	</form>

	<script>

function calculateInsurance() {
	const loanAmount = document.getElementById("loan-amount").value;
	const interestRate = document.getElementById("interest-rate").value;
	const insurancePayment = loanAmount * (interestRate / 100);

	document.getElementById("insurance-payment").value = insurancePayment.toFixed(2);
}

    </script>
</body>
</html>
