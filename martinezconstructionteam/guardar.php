<?php 
include('conexion.php');
require_once('recaptchaphp-1.11/recaptchalib.php');
$privatekey = "6LdDETEUAAAAAOOSL9I70WfvEGKVC79562ZWdig1";
$resp = recaptcha_check_answer ($privatekey,
                              $_SERVER["REMOTE_ADDR"],
                              $_POST["recaptcha_challenge_field"],
                              $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  // What happens when the CAPTCHA was entered incorrectly
  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
  "(reCAPTCHA said: " . $resp->error . ")");
} else {
$nombre = isset($_POST['name']) ? $_POST['name']: ''; 
$city = isset($_POST['city']) ? $_POST['city']: '';
$star = isset($_POST['rating']) ? $_POST['rating']: ''; 
$date = isset($_POST['date']) ? $_POST['date']: ''; 
$project = isset($_POST['project']) ? $_POST['project']: '';
$review = isset($_POST['review']) ? $_POST['review']: ''; 
$stmt =  $dataBase->prepare('INSERT INTO reviews ( name, city, project, rdate, review, star ) VALUES ( ?, ?, ?, ?, ?, ? )');
$stmt->bindParam(1, $nombre, SQLITE3_TEXT);
$stmt->bindParam(2, $city, SQLITE3_TEXT);
$stmt->bindParam(3, $project, SQLITE3_TEXT);
$stmt->bindParam(4, $date, SQLITE3_TEXT);
$stmt->bindParam(5, $review, SQLITE3_TEXT);
$stmt->bindParam(6, $star, SQLITE3_TEXT);

try{
	$stmt->execute();
	header("Location: ./testimonials.php");
}catch(Exception $e){
	echo 'Caught exception: ' . $e->getMessage();
	$respuestaNegativa ='<div class="alert alert-warning" id="respuestaNegativa"><strong><i class="fa fa-exclamation-triangle"></i> Error!</strong> Error en el sistema, no se ha guardado.</div>';
	echo $respuestaNegativa;
}
$dataBase->close(); 
unset($dataBase); 
}
?>
