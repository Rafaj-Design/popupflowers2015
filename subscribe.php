<?php
//$_GET['email'] = json_encode($_GET);
if (isset($_GET['email'])) {
	$text = $_GET['email']."\n";
	$filename = "emails.txt";
	$fh = fopen($filename, "a");
	$success = fwrite($fh, $text);
	fclose($fh);
}
else {
	$success = false;
}
?>{ 'success': <?php echo $success ? 'true' : 'false';?> }