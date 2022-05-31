<?php
include("header.php");

if (isset($_POST["submit"])) {
	if ($_POST["heading"]=="") {
		echo "Başlık giriniz";
	}
	else if ($_POST["text"]=="") {
		echo "içerik giriniz";
	}
	else{
		$heading = mysqli_real_escape_string($link, $_POST[heading]);
		$text = mysqli_real_escape_string($link, $_POST[text]);
		$sql=" INSERT INTO posts (heading , text) 
		VALUES('".$heading."', '".$text."')";
		if(mysqli_query($link, $sql)){
			header("Location: index.php");
	}
}
}

?>

<div class="container">
	<form method="post">
		<h2>Başlık</h2><br>
		<input type="text" class="heading" name="heading"><br>
		<h2>İçerik</h2><br>
		<textarea class="text" name="text"></textarea><br>
		<button type="submit" class="btn btn-danger m-4" name="submit">Yayınla</button>
	</form>
</div>