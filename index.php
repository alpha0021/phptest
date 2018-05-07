<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>
<body>
	<?php
		$name = "rushdi";

		$length = strlen($name);

		$randNumber = rand(1,$length);

		$randLtr = substr($name, $randNumber-1 , 1);

		echo $randLtr;
	?>

	<h1>provides the  random  letter of my  name</h1>

</body>

</html>