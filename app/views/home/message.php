<?php if (isset($data['error'])){
	echo "<div class='alert alert-danger' role='alert'>". $data['error'] ."</div>";
	// echo $data['error'];
	// echo "</div>";
}
?>

<?php if (isset($data['message'])){
	echo "<div class='alert alert-success' role='alert'>". $data['message'] ."</div>";
	// echo $data['message'];
	// echo "</div>";
}
?>

<?php if (isset($data['validation_errors'])) {
		echo "<div class='alert alert-danger' role='alert'> <ul>";
			foreach($data['validation_errors'] as $error) {
				echo "<li>".$error."</li>";
			}
		echo "</ul></div>";
	}


?>