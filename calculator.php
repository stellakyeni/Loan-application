

<!DOCTYPE html>
<html>
<head>
  <title>Loan Calculator</title>
  <style>
.container {
  width: 400px;
  margin: 0 auto;
  text-align: center;
  border: 2px solid #ccc;
  padding: 20px;
  border-radius: 5px;
	/* border: 1px solid #ccc; */
	width: 300px;
	height:400px;
	margin: auto;
	border-radius: 10px;
	background-color: #f2f2f2;
}

}

input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #ccc;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}


  </style> 
   
</head>
<body>
  <div class="container">
    <h1>Loan Calculator</h1>
	(Input Net salary and years only)
    <form>
      <label for="net_salary">Net Salary:</label>
      <input type="number" id="net_salary" name="net_salary"><br><br>

      <label for="max_loan">Loan Amount:</label>
      <input type="number" id="max_loan" name="max_loan" readonly><br><br>

      <label for="years">Years:</label>
      <input type="number" id="years" name="years"><br><br>

      <label for="monthly_installment">Monthly Installment:</label>
      <input type="number" id="monthly_installment" name="monthly_installment" readonly><br><br>

      <label for="insurance_fees">Insurance Fees:</label>
      <input type="number" id="insurance_fees" name="insurance_fees" readonly><br><br>

      <label for="total_interest">Total Interest:</label>
      <input type="number" id="total_interest" name="total_interest" readonly><br><br>

      <button type="button" onclick="calculateLoan()">Calculate Loan</button>
    </form>
  </div>
  <script>
function calculateLoan() {
  var netSalary = document.getElementById("net_salary").value;
  var maxLoanAmount = Math.min(netSalary * 39.5, 4000000);
  document.getElementById("max_loan").value = maxLoanAmount;

  var years = document.getElementById("years").value;
  if (years > 7) {
    years = 7;
  }

  var monthlyInterestRate = 0.13 / 12; // Assuming an annual interest rate of 10%
  var months = years * 12;
  var monthlyInstallment = (maxLoanAmount * monthlyInterestRate) / (1 - Math.pow(1 + 
  monthlyInterestRate, -months));
  document.getElementById("monthly_installment").value = monthlyInstallment.toFixed(2);

  var insuranceFees = maxLoanAmount * 0.11;
  document.getElementById("insurance_fees").value = insuranceFees.toFixed(2);

  var totalInterest = (monthlyInstallment * months) - maxLoanAmount;
  document.getElementById("total_interest").value = totalInterest.toFixed(2);
}


  </script>
</body>
</html>
