<?php
session_start();

if(isset($_SESSION['user'])){
	header("location:apply.php");
	die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bank Account Registration</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
}

h3 {
  background-color: #ff00dd;
  color: #fff;
  text-align: center;
  margin: 0;
  padding: 1rem;
}

form {
  width: 40%;
  margin: 2rem auto;
  padding: 2rem;
  background-color: #f2f2f2;
  border-radius: 0.5rem;
  length: 70%;
  margin-bottom: 350px;
  margin-right: 350px;
  margin-left: 350px;
  font-size: 7px;
  border-color: green;
}

label {
  display: block;
  margin-top: 1rem;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="ID/password"],
{
  width: 50%;
  padding: 0.5rem;
  border: none;
  border-radius: 0.9rem;
  margin-top: 0.5rem;
}

button[type="submit"] {
  display: block;
  margin-top: 2rem;
  padding: 1rem;
  background-color: #ff00aa;
  color: #fff;
  border: none;
  border-radius: 0.5rem;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

    </style>
  </head>
  <body>
    <h3>Create a Bank Account</h3>
    <form action="server/action.php" method="post" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="cpassword" required>

      <label for="">D.O.B:</label>
     <input type="date" name="dob" required>

      <label for="">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="">--Select gender--</option>
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="other">other</option>
      </select>

      <label for="name">ID/passport:</label>
      <input type="number" id="ID" name="idno" required>

      <label for="name">Nationality:</label>
      <select id="nationality" name="nationality" required>
        <option value="">--Select nationality--</option>
        <option value="kenyan">Kenyan</option>
        <option value="foreigner">Foreigner</option>
      </select>
        <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" required>
    <label for="name">Kra:</label>
      <input type="text" id="name" name="kra" required>
      <label for="profile">Profile Photo:</label><br><br>
    <input type="file" id="profile" name="profile" required>
      <button type="submit" name="signup_btn">Create</button>
    </form>

  </body>
</html>
