



<?php

//New BDD






$email = !empty($_POST['email']) ? $_POST['email'] : '';


$jsonResult = array(
    'success' => false,
    'email' => $email
    );

    // j'enregistre dans la base de donné le mail dans une table de mail + test si email n'existe pas deja sinon j'insère. recup id de la table correspondant.
    $id=1;

    // j'envoie le mail

            $message = 'Pour valider votre inscription à la newsletter du Casier 9, <a href="http://lecasier9.free.fr/index.php?r=validation&amp;tru=1&amp;id='.$id.'">cliquez ici</a>.';
            $objet = "Inscription à la newsletter du casier 9" ;

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: lecasier9@free.fr' . "\r\n";

            $jsonResult['success'] = mail($email, $objet, $message, $headers);

print json_encode($jsonResult);
exit;
?>
