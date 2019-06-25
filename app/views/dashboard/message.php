<?php if (isset($data['error'])){
	echo "<div class='alert alert-danger' role='alert'>";
	echo $data['error'];
	echo "</div>";
}
?>

<?php if (isset($data['message'])){
	echo "<div class='alert alert-success' role='alert'>";
	echo $data['message'];
	echo "</div>";
}
?>

<?php if (isset($data['validation_errors'])) {
		echo "<div class='alert alert-danger' role='alert'>";
	echo "<ul>";
		foreach($data['validation_errors'] as $error) {
			echo "<li>".$error."</li>";
		}
	echo "</ul>";
	}

	echo "</div>";

?>