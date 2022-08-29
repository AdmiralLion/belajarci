<!DOCTYPE html>
<html lang="en">

<?php 
// $data['judul'] = "Hubungi kami";
// $this->load->view('head',$data);
$this->load->view('_partials/head.php');
?>

<body>
<?php $this->load->view('_partials/navbar.php'); ?>


	<h1>Contact Us</h1>
	<p>Hubungi kami melalui form berikut</p>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="your name" required/>
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="your email address" required/>
		</div>
		<div>
			<label for="messaage">Message</label><br>
			<textarea name="message" cols="30" rows="5" placeholder="write your message" required></textarea>
		</div>

		<div>
			<input type="submit" value="Kirim">
			<input type="reset" value="Reset">
		</div>
	</form>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>