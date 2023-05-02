<?php
session_start();

require_once 'server/controller.php';

$controller=new controller();

if(!isset($_SESSION['user'])){
	header("location:index.php");
	die();
}

if(isset($_SESSION['user'])){

$cuseremail = $_SESSION['user'];

$data = $controller->current_user($cuseremail);

$current_id = $data['id'];
$current_name = $data['name'];
$current_dob = $data['dob'];
$current_email = $data['email'];
$current_profile = $data['profile'];
$current_gender = $data['gender'];
$current_nationality = $data['nationality'];
$current_phone = $data['phone'];
$current_kra = $data['kra'];
}
?>
<!DOCTYPE html>
<html>

	<title>
		Light Loan
	</title>
	<style>
    body {
	margin: 0;
	padding: 0;
}

header {
	background-color: #e412c1;
	color: #ccbfbf;
	padding: 20px;
}

h1 {
	margin: 0;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

nav li {
	display: inline-block;
	margin: 0 10px;
}

nav a {
	color: #ffffff;
	text-decoration: none;
}

nav a:hover {
	color: #ccc;
}


    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	<center>
	<header>
		<h1><marquee direction="left" scrollamount="3">Light Loan Application</marquee></h1>

		<nav>
			<ul>
				<?php if(isset($_SESSION['user'])){ ?>
				<img src="server/<?= $current_profile; ?>" width="50" height="50">
        <li><a href="#"><?= $current_name; ?> </a></li>
		<li><a href="calculator.php">Calculator</a></li>
				<li><a href="server/logout.php">Logout</a></li>
			<?php }else{ ?>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Login </a></li>
				<li><a href="contact.php">Contact Us</a></li>
			<?php } ?>
			</ul>
		</nav>
	</header>
	</center>

</body>
</html>
