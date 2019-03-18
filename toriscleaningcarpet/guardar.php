<?php 
session_start();
include('conexion.php');
// Invisible reCaptcha

//verificamos que el token de la variable session sea igual al que se envio por el fomulario
if (!isset($_SESSION['token']) || $_SESSION['token'] != $_POST['token']) {
    //inmediatamente redireccionamos a la URL donde se encuentra el contact form
    echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
    echo '<script language="javascript"> window.setTimeout( window.location.href="testimonials.php",2000); </script>';
}else{  
  //destruimos la sesion
  session_destroy();
  $honeypot = $_POST['firstname'];
  if (!empty($honeypot)) {
      echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
      echo '<script language="javascript"> window.setTimeout( window.location.href="testimonials.php",1000); </script>';
  }else{
    if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]){    
      $nombre = isset($_POST['name']) ? $_POST['name']: ''; 
      $city = isset($_POST['city']) ? $_POST['city']: '';
      $star = isset($_POST['rating']) ? $_POST['rating']: ''; 
      $date = isset($_POST['date']) ? $_POST['date']: ''; 
      $project = isset($_POST['project']) ? $_POST['project']: '';
      $review = isset($_POST['review']) ? $_POST['review']: ''; 
      $stmt =  $dataBase->prepare('INSERT INTO reviews (name, city, project, rdate, review, star ) VALUES ( ?, ?, ?, ?, ?, ? )');
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
    else{
      die('<script language="javascript"> window.parent.alert("Captcha code not valid"); </script> <script language="javascript"> window.setTimeout( window.location.href="testimonials.php",2000); </script>');
    }
  }
}
?>
