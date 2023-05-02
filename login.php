<?php
session_start();

if(isset($_SESSION['user'])){
	header("location:apply.php");
	die();
}
?>
<a href="index.php">Home<a/>
<h3> Login </h3>
<form action="server/action.php" method="post">
	<table >

<tr><td>Email:</td><td><input type="text" name="email" placeholder="enter your email"></td></tr>
<tr><td>Password:</td><td><input type="Password" name="password" required="" placeholder="enter your password"></td></tr>

<tr><td colspan="2"><input type="submit" name="login_btn" value="login"></td></tr>

</table>
</form>
<a href="create.php" class="btn-primary">Signup</a>
<?php
include "server/footer.php";
?>
