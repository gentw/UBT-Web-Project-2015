<form action="contact.php" method="post">
	<input type="text" placeholder="Name..." name="name">
	<input type="email" placeholder="Email..." name="email">
	<textarea placeholder="Message" rows="5" cols="22" name="message"></textarea>
	<input type="submit" value="Submit" name="submit">
</form>

<?php			
	
	if(isset($_POST['submit'])) {
		
		$name 				= $_POST['name'];
		$email 				= $_POST['email'];
		$message			= $_POST['message'];
			
			
		$msg = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message . "";
			
		mail("email@gmail.com", "Nje mesazh i ri", $msg);
		
			
		header("Location: index.php");
	
	}
?>