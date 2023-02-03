<?php
 $to = "su75369@gmail.com";


    $name = $_POST['nom'];
    $mail = $_POST['mail'];
    $objet = $_POST['objet'];
    $msg = $_POST['message'];
    $numtlf = $_POST['num'];
    $email_subject = "new msg";

    $email_body = "Name: {$name} numero de telephone: {$numtlf} Email: {$mail}  objet: {$objet} message: {$msg} ";
   
    $mail = mail($to,$email_subject,$email_body);
    
    if ($mail) {
        echo "<script> alert('Message envoyée.'); </script>";
      }else {
        echo "<script> alert('Message non envoyée.'); </script>";
      }
      echo "<script>
      window.location = 'contact.html';
      </script>";



?>