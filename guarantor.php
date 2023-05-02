<!DOCTYPE html>
<html>
<head>
	<title>Guarantor Details</title>
	<style type="text/css">
		/* CSS code for styling the form */
		form {
			max-width: 300px;
			margin: 0 auto;
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="submit"] {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
        h1{ 
        background-color: #ff008c;
  color: #fff;
  text-align: center;
  margin: 0;
  padding: 1rem;}

    label {
      display: block;
      margin-bottom: 5px;
	</style>
</head>
<body>
    <fieldset> 
        <h1><legend>Guarantor Details</legend></h1>
	<form method="post" action="submit_guarantor.php">
		 
		<label for="guarantor_name">Name:</label>
		<input type="text" id="guarantor_name" name="guarantor_name" required>

		<label for="guarantor_email">Email:</label>
		<input type="email" id="guarantor_email" name="guarantor_email" required>

		<label for="guarantor_phone">Phone:</label>
		<input type="tel" id="guarantor_phone" name="guarantor_phone" required>

		<label for="guarantor_address">Address:</label>
		<textarea id="guarantor_address" name="guarantor_address" required></textarea>

        <label for="kra pin">KRA PIN:</label>
		<input type="text" id="kra pin" name="kra pin" required>

        <label for="employer">Employer</label>
    <select id="employer" name="employer" required>
      <option value="employer">--select employer--</option>
      <option value="tsc">Teacher Service Commision</option>
      <option value="psc">Public service commission</option> <br><b>
       </select><br><br> 
		<label for="pf number">Pf Number:</label>
		<input type="text" id="pf number" name="pf number" required>

		<label for="net salary">Net Salary:</label>
		<input type="tel" id="net salary" name="net salary" required>

		<input type="submit" value="Submit">
    </form>
    </fieldset>
        <script>
// JavaScript code for validating the form
const form = document.querySelector('form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const phoneInput = document.querySelector('#phone');
const addressInput = document.querySelector('#address');
const guarantorNameInput = document.querySelector('#guarantor_name');
const guarantorEmailInput = document.querySelector('#guarantor_email');
const guarantorPhoneInput = document.querySelector('#guarantor_phone');
const guarantorAddressInput = document.querySelector('#guarantor_address');

form.addEventListener('submit', (event) => {
	// prevent the form from submitting
	event.preventDefault();

	// validate the form inputs
	if (nameInput.value === '' || emailInput.value === '' || phoneInput.value === '' || addressInput.value === '' || guarantorNameInput.value === '' || guarantorEmailInput.value === '' || guarantorPhoneInput.value === '' || guarantorAddressInput.value === '') {
		alert('Please fill in all the fields');
		return;
	}

	// submit the form
	form.submit();
});

            
        
        </script>
	
</body>
</html>
