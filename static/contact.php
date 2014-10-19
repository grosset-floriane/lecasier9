<div class="col_droite court">
    <h1 class="titre_principal">Contact</h1>


    <article class="article about">
        <p>Vous pouvez nous joindre à tous moments l'adresse mail du casier : <a class="lien" href="mailto:lecasier9@free.fr">lecasier9@free.fr</a></p>

<?php
    if(isset($_GET['email'])) // On vérifie que la variable $_GET['email'] existe.
    {

        if( !empty($_POST['email']) AND $_GET['email']==1 AND isset($_POST['new'])) /* On vérifie que la variable $_POST['email'] contient bien quelque chose, que la variable $_GET['email'] est égale à 1 et que la variable $_POST['new'] existe. */
        {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) // On vérifie qu'on a bien rentré une adresse e-mail valide.
        {

            if($_POST['new']==0) // Si la variable $_POST['new'] est égale à 0, cela signifie que l'on veut s'inscrire.
            {

            // On définit les paramètres de l'e-mail.
            $email = $_POST['email'];
            $message = 'Pour valider votre inscription à la newsletter du Casier 9, <a href="http://lecasier9.free.fr/index.php?r=insciption?tru=1&amp;email='.$email.'">cliquez ici</a>.';

            $destinataire = $email;
            $objet = "Inscription à la newsletter du casier 9" ;

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: lecasier9@free.fr' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) // On envoie l'e-mail.
                {

                echo "Pour valider votre inscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                }
                else
                {
                echo "Il y a eu une erreur lors de l'envoi du mail pour votre inscription.";
                }
            }
            elseif($_POST['new']==1) // Si la variable $_POST['new'] est égale à 1, cela signifie que l'on veut se désinscrire.
            {

            // On définit les paramètres de l'e-mail.
            $email = $_POST['email'];
            $message = 'Pour valider votre désinscription de la newsletter du casier 9, <a href="http://lecasier9.free.fr/index.php?r=desinscription?tru=1&amp;email='.$email.'">cliquez ici</a>.';

            $destinataire = $email;
            $objet = "Désinscription de la newsletter du casier 9" ;

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: lecasier9@free.fr' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) )
                {

                echo "Pour valider votre désinscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                }
                else
                {
                echo "Il y a eu une erreur lors de l'envoi du mail pour votre désinscription.";
                }
            }
            else
            {
            echo "Il y a eu une erreur !";
            }
        }
        else
        {
        echo "Vous n\'avez pas entré une adresse e-mail valide ! Veuillez recommencer !";
        }
        }
        else
        {
        echo "Il y a eu une erreur.";
        }
    }
    else // Si les champs n'ont pas été remplis.
    {
?>
        <strong class="strong">Inscription à la news letter</strong>
        <form method="post" action="index.php?r=contact?email=1">
        Adresse e-mail : <input type="text" name="email" size="25" /><br />
        <input type="radio" name="new" value="0" />S''inscrire
        <input type="radio" name="new" value="1" />Se désinscrire<br />
        <input type="submit" value="Envoyer" name="submit" /> <input type="reset" name="reset" value="Effacer" />
        </form>
        <?php
            }
        ?>



        <p>Toute candidature sera limitée à un travail par étudiant de l’Esam en deuxième année sur le thème de la prochaine exposition communiquée un mois à l’avance sur la page Facebook au moment de la mise en ligne de l’exposition la précédant. </p>

        <strong class="strong">L’email de candidature devra comporter :</strong>

        <ul>
            <li class="liste">Objet du mail : Candidature : (thème de l’exposition à venir) ; Nom Prénom</li>
            <li class="liste">Texte rapide descriptif sur le travail général de l'étudiant (note d'intention)</li>
            <li class="liste">Nom du travail présenté</li>
            <li class="liste">Texte sur le travail présenté</li>
            <li class="liste">Photographies (300pixel/cm ; largeur minimum : 1200px) ; Vidéo (tout format, bonne qualité) ; Audio (tout format, bonne qualité)</li>
            <li class="liste">Les dimensions voulu de présentation du travail (si besoin est)</li>
            <li class="liste">Les dimensions réelles du travail (si besoin est)</li>
            <li class="liste">Matériaux et technique(s)</li>
            <li class="liste">Date de réalisation</li>
        </ul>

        <p>Pour tous fichiers un peu lourd, n'hésitez pas à utiliser le site <a class="lien" href="http://wetransfer.com">WeTransfer.</a></p>

    </article>

</div>
