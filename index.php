<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Form</title>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
	<header class="body">
		<h1>A Simple Contact Form</h1>
	</header>

	<section class="body">

		<form method="post" action="email.php">
			<input name="typeHere" class="typeHere" >
		    <label>Name</label>
		    <input name="name" placeholder="Type Here" required>
		            
		    <label>Email</label>
		    <input name="email" type="email" placeholder="Type Here" required>
		            
		    <label>Message</label>
		    <textarea name="message" placeholder="Type Here" required></textarea>

		    <br>
		    <input  id="submit" name="submit" type="submit" value="Submit">
		        
		</form>
	</section>


	<footer class="body">

	</footer>
</body>
</html>