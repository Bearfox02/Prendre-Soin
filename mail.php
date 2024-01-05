<?php
  $retour = mail('jybourbon@gmx.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: moimeme@monsite.fr');
  if ($retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
  }
?>
