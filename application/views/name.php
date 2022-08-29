<!DOCTYPE html>
<html lang="en">

<?php 
// $data['judul'] = "coba name";
$this->load->view('_partials/head');
?>

<body>
<?php 
$this->load->view('_partials/navbar');
?>
<div class="container">
    <div class="row">	
    <h1>name</h1>
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
    <?php
    $i = 0;
    echo "<table class='table table-striped'>";
    echo "<th> nomor </th>";
    echo "<th> nama </th>";
    while ($i < count($names))
    {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$names[$i]."</td>";
        $i++;
    }
    echo "</table>"

    ?>
    </div>
</div>
    <?php 
$this->load->view('_partials/footer');
?>	
</body>

</html>