<?php
  $destinatario = 'dam788@gmail.com';
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $consulta = $_POST["consulta"];
  $mensajeCompleto = "NOMBRE: ". $nombre . "\nCORREO: " . $email . "\nTELEFONO: " . $tel . "\nMENSAJE: " . $consulta;
  $asunto = "web SION GRAFIX";

  $mail = mail( $destinatario, $asunto , $mensajeCompleto );

  if ( $mail ){
    echo "<script> alert('Mensaje enviado exitosamente!') </script>";
    echo "<script> setTimeout(\"location.href='index.html'\",3000) </script>";
  }

?>
