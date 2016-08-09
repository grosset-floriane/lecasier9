<?php

//New bdd

require_once dirname(__FILE__) . '/../dbConnect.php';

require_once dirname(__FILE__) . '/../class/bdd/user/userManager.class.php';

$theUserManager = new UserManager(
    array(
        'bdd' => $bdd
    )
);

//$user = $theUserManager->get(1);

//error_log($user);
//die();


$email = !empty($_POST['email']) ? $_POST['email'] : '';

//Chercher le mail dans la base de donnée
//Si il existe : error vue soit mail existe déjà soit verifier la boite mail
//Si il existe pas ajouter dans la base




//Envoie Le mail de confirmation

$jsonResult = array(
    'success' => false,
    'email' => $email,
    'code' => '',
    );



$user = $theUserManager->getFromMail($email);
error_log($user);
if (!empty($user))
{
    $jsonResult['code']= 'mailAlreadyExist';
    print json_encode($jsonResult);
    exit;
}

$user= new User(
    array(
        'mail' => $email)
    );

$user = $theUserManager->add($user);



// j'enregistre dans la base de donné le mail dans une table de mail + test si email n'existe pas deja sinon j'insère. recup id de la table correspondant.
// $id=$user->getId();

// // j'envoie le mail

// $message = 'Pour valider votre inscription à la newsletter du Casier 9, <a href="http://lecasier9.free.fr/index.php?r=validation&amp;tru=1&amp;id='.$id.'">cliquez ici</a>.';
// $objet = "Inscription à la newsletter du casier 9" ;

// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'From: lecasier9@free.fr' . "\r\n";

// $jsonResult['success'] = mail($email, $objet, $message, $headers);

print json_encode($jsonResult);
exit;
