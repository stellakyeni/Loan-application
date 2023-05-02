<?php
include "intro.php";
?>

<div id="menu">
	<a href="home.php">HOME</a> |
	<?php
	if(!isset($_SESSION["ID"]))
	{	

		?>
		<a href="home.php">Home</a> | <a href="create.php">Account</a> |<a href="login.php">LOGIN</a>
		<?php
}
	else
	{
?>	  
| <a href="apply.php">Apply Loan</a> |  <a href="">Contact</a>  | <a href="details.php">Loan details</a> | <a href="logout.php">LOG OUT</a> 
<?php
	}
	 ?>

				
			</div>
			<div id="main">
			<div id="content">