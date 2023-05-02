<?php  include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loan Calculator</title>
    <style>
        .calculator {
	border: 1px solid #ccc;
	padding: 20px;
	width: 100px;
	height:300px;
	margin: auto;
	border-radius: 10px;
	background-color: #f2f2f2;
}

input[type="number"], button {
	margin: 10px 0;
}

label {
	display: block;
	margin-bottom: 15px;
}

p {
	margin-top: 10px;
	font-weight: bold;
}
div{
	font-size: 10px;
   
	padding: 1px;
  

}


    </style>



	<body>

	<div class="calculator">
	<div class="row">
		<h6>Loan Calculator</h6>
		<label>Gross Salary:</label>
		<input type="number" id="grossSalary">
		<label>Net Salary:</label>
		<input type="number" id="netSalary">
		<button onclick="calculateLoan()">Calculate Loan</button>
		<p>Loan amount you qualify for: <span id="QualifiedLoan"></span></p>
		<br>
    </div>
    <div class="column">
		<h3></h3>
      <?php
	  include "calculator.php";
	  ?>
    </div>

  </div>
</div>



</head>

		
    </div>
</fieldset>

	<script> 
    function calculateLoan() {
  var grossSalary = parseInt(document.getElementById("gross_Salary").value);
  var netSalary = parseInt(document.getElementById("netSalary").value);
  var QualifiedLoan = 0;
  if (grossSalary > 0 && netSalary > 0) {
    loanAmount = Math.min(grossSalary, netSalary) * 10;
    QualifiedLoan = Math.min(QualifiedLoan, 4000000);
  }
  document.getElementById("QualifiedLoan").innerHTML = QualifiedLoan.toLocaleString();
}
function calculateInsurance() {
	const loanAmount = document.getElementById("loan_amount").value;
	const interestRate = document.getElementById("interest_rate").value;
	const insurancePayment = QualifiedLoan * (Interest_Rate / 100);

	document.getElementById("insurance-payment").value = insurancePayment.toFixed(2);
}

    </script>



<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "calculator2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the loan calculator table
$sql = "CREATE TABLE loan_calculator (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Gross_Salary FLOAT(10,2) NOT NULL,
    Net_salary FLOAT(10,2) NOT NULL,
    Qualified_Loan FLOAT(10,2) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table loan_calculator created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Insert sample data
$max_loan = 4000000;
$gross_salary = 50000;
$net_salary = 40000;
$qualified_loan = $net_salary * 12 * 7;

if ($qualified_loan > $max_loan) {
    $qualified_loan = $max_loan;
}

$sql = "INSERT INTO loan_calculator (gross_salary, net_salary, qualified_loan)
        VALUES ('$gross_salary', '$net_salary', '$qualified_loan')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>


	
</body>
</html>
