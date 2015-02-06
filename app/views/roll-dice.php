<html>
<head>
	<title></title>
</head>

<body>
	<p><?= $computer ?></p>
	<p><?= $guess ?></p>
	<? if ($computer == $guess) : ?>
		<p>Your guess matched the roll.</p>
	<? endif; ?>
</body>
</html>