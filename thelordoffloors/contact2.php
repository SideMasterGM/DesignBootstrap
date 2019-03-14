<?php 


include "php/text.php";
/*********** Config ***************/
$companyName = $Company;
$companyEmail = $Mail.','.$Mail2; //1,2,3... correos
$emailForThanks = $Mail; // 1 correo nada mas
define("EMAILEOM", "contactform@eliteonlinemediateam.com");//Correo donde llegara los mensajes bloqueados por el token y el honeypot
/*********************************/

if (count($_POST['news_group']) > 0){
  $services = join(', ', $_POST['news_group']);
} else {
  $services = "-";
}

session_start();
if($_POST){
  //verificamos que el token de la variable session sea igual al que se envio por el fomulario
  if (!isset($_SESSION['token']) || $_SESSION['token'] != $_POST['token']) {
      //inmediatamente redireccionamos a la URL donde se encuentra el contact form
      echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
      echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",2000); </script>';
  }else{  
    //destruimos la sesion
    session_destroy();
    $honeypot = $_POST['firstname'];
    if (!empty($honeypot)) {
        //inmediatamente redireccionamos a la URL donde se encuentra el contact form
        echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
        echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",1000); </script>';
    }else{
      if(isset($_POST["captcha_code"])&&$_POST["captcha_code"]!=""&&$_SESSION["code"]==$_POST["captcha_code"]){    
        //declaramos las variables publicas en una clase
        class emailVariables
        {
            public $email;
            public $name;
            public $phone;
            public $address;
            public $referral;
            public $message;
        }
        //OBTENIENDO LAS VARIABLES
        //Elimina todos los caracteres menos letras, dígitos y !#$%&'*+-=?^_`{|}~@.[].
        $email = filter_input(INPUT_POST, 'custom-email', FILTER_SANITIZE_EMAIL);
        $name = strip_tags($_POST['custom-name']);
        //Elimina todos los caracteres excepto dígitos y los signos de suma y resta.
        $phone = filter_input(INPUT_POST, 'custom-phone', FILTER_SANITIZE_NUMBER_INT);
        //Esta función intenta devolver un string con todos los bytes NULL y las etiquetas HTML y PHP retirados de un str dado. 
        $address = strip_tags($_POST['custom-address']);
        $referral = strip_tags($_POST['custom-referral']);
        $message = strip_tags($_POST['custom-message']);
        function validarDatos($email,$name,$phone,$message){
          $out = new emailVariables();
          //comprobando que el campo email no esta vacio
          if (!empty($email)) {
              //con preg_match solo permitimos email con letras, numeros, -, _ y .
            if (!preg_match('/^[A-Za-z0-9-_.]+@[A-Za-z0-9-.]+.[A-Za-z]{2,4}$/', $email)) { 
              //si el email no es valido, destruimos la variable
                unset($email);
              die('<script language="javascript"> window.parent.alert("Invalid email!."); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
              } else{ // si el campo email es valido
                $out->email = $email;
              }
          }else{ // si el campo email esta vacio
            die('<script language="javascript"> window.parent.alert("Empty email field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          //Validando el campo name
          if (!empty($name)) { //comprobando si esta vacio
            if (preg_match("/^\p{L}([- ']\p{L}|\p{L})*$/u", $name)) {//comprobando caracteres no validos
                if (strlen($name) <= 60) {//comprobando longitud de caracters
                  $out->name = $name;
                }else{
                  die('<script language="javascript"> window.parent.alert("The name field contains more than 60 characters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
                }
            }else{
                die('<script language="javascript"> window.parent.alert("The name field contains invalid characters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
            }   
          }else{
            die('<script language="javascript"> window.parent.alert("Empty name field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          //comprobando que el campo phone no esta vacio
          if (!empty($phone)) {
            $out->phone = $phone;
          }else{
            die('<script language="javascript"> window.parent.alert("Empty phone field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          
          //comprobando que el campo message no esta vacio
          if (!empty($message)) {
            $out->message = $message;
          }else{
            die('<script language="javascript"> window.parent.alert("Empty message field"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          return $out;
        }//END FUNCTION validarDatos
        //Validamos los datos y limpiamos las variables
        $variablesLimpias = validarDatos($email,$name,$phone,$message);
        //variables limpias
        $email = $variablesLimpias->email;
        $name = $variablesLimpias->name;
        $phone = $variablesLimpias->phone;
        $message = $variablesLimpias->message;
        //Enviando email
              $mymail = $companyEmail;
              $cc = "New Message ['$companyName']"; //asunto por defecto
              $cabeceras = "From: " . $email . "\r\n";
              $cabeceras .= "Reply-To: ". $email . "\r\n";
              $cabeceras .= "MIME-Version: 1.0\r\n";
              $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
              $FrOm .= 'X-MAILER: PHP'.phpversion();
              $BoDy .= '
                          <html>
                          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                              <head>
                                  <title>Message sent from your website \ </title>
                                  <style type="text/css">
                                  th, td{
                                     width: 25%;
                                     text-align: left;
                                     vertical-align: top;
                                     border: 1px solid #000;
                                     border-collapse: collapse;
                                     padding: 0.3em;
                                     caption-side: bottom;                                   
                                 }
                                 th{
                                    background: #eee;
                                 }
                                 caption {
                                     padding: 0.3em;
                                     color: #fff;
                                     background: #000;
                                  }
                                     </style>
                              </head>

                              <body>
                              <header>
                                <h2>-Este correo electrónico fue enviado desde un formulario de contacto en ('.$companyName.')</h2>
                              </header>
                              <div class="container">
                              <table rules="all" style="border: 1px solid #000;" cellpadding="10">
                                  <caption>Información al cliente</caption>                                
                                  <tr>
                                       <th><strong>Date:</strong></th>
                                       <td>'.date(DATE_RFC2822).'</td>
                                   </tr>';
                                      $BoDy .= '
                                   <tr>
                                      <th><strong>Email Address:</strong></th>
                                      <td>' . $email . '</td>
                                   </tr>
                                   <tr>
                                      <th><strong>Fist and last name:</strong></th>
                                      <td>' . $name . '</td>
                                   </tr> 
                                   <tr>
                                      <th><strong>Phone:</strong></th>
                                      <td>' . $phone . '</td>
                                   </tr> 
                                   <tr>
                                      <th><strong>Address:</strong></th>
                                      <td>' . $address . '</td>
                                   </tr> 
                                   <tr>
                                      <th><strong>Message:</strong></th>
                                      <td>' . $message . '</td>
                                   </tr>
                                   <tr>
                                      <th><strong>Referral:</strong></th>
                                      <td>' . $referral . '</td>
                                   </tr>
                                   <tr>
                                      <th><strong>Services of interest:</strong></th>
                                      <td>' . $services . '</td>
                                   </tr>
                              </table>
                              </div>
                              </body>
                          </html>';
              $send = mail("$mymail", "$cc", "$BoDy", "$cabeceras");
              ///Redirección después de enviar el mensaje
              if($send){
          $to = $email;
              $subjectResp = "Thanks for Trusting $companyName";
              $txt = "Your message has received. You'll hear from us very soon. Thank you!";
              $headers = "From: $emailForThanks";
                mail($to,$subjectResp,$txt,$headers);
              echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
                echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",1000); </script>';
              }
      }else{
        die('<script language="javascript"> window.parent.alert("Captcha code not valid"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
      }//END ELSE CAPTCHA
    }//END ELSE HONEYPOT
  }//END ELSE TOKEN
}else{
  
}