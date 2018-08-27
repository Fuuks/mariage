<?php




     // Plusieurs destinataires
     $to  = 'fukiwony@gmail.com'; // notez la virgule

     // Sujet
     $subject = 'Calendrier des anniversaires pour Août';

     // message
     $message = 'Bonjour je mapelle fuki';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     
     
     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));

?>