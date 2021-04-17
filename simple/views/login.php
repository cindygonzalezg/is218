<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php
		echo $reslt;
	?>
	<form action="" method="POST">
		<p>
			<label>Username</label>
			<input type="text" name="username" required>		
		</p>
		<p>
			<label>Password</label>
			<input type="password" name="password" required>
		</p>
		<br />
		<p>
			<button type="submit" name="submit">
				<span>
					Login
				</span>		
			</button>
		</p>
	</form>
</body>
</html>