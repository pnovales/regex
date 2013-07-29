<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Test Regex Phone</title>
	</head>
	<body>
		<header id="header">
			<h1>Regex Phone PHP</h1>
		</header>
		<section id="main">
			<form method="post" action="index.php">
				<input name="phone" type="tel" autofocus placeholder="Phone number">
				<input name="mybtn" type="submit" value="Submit">
			</form>
		</section>
		<footer id="info">
			<p>
				Written by <a href="mailto:pnovales@gmail.com">Pedro E Novales</a>
			</p>
		</footer>
	</body>
</html>
<?php
$phone = $_POST["phone"];
$pattern = "/^(\+?1[-. ]?)?\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/";
//valid values with contry code or not.

if (preg_match($pattern, $phone)) {
	echo "Valid value at US :) !!! " . $phone;
} else {
	echo "Invalid value at US :(";
}
?>
