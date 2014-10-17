<?php

define('ROOT_DIR', dirname(__FILE__));

/**
 * Description :
 *
 * @param {string} $url : Url to load.
 *
 * @return null
 */
function redirect ($url)
{
    if (!headers_sent()) {
        header('Location: ' . $url); exit;
    } else {
        echo '<script type="text/javascript">'
            . 'window.location.href="' . $url . '";'
            . '</script>'
            . '<noscript>'
            . '<meta http-equiv="refresh" content="0;url=' . $url . '" />'
            .'</noscript>';
        exit;
    }
}

//redirect('/construction.html');

// Modules - Views - App
// ---------------------
$_routes = array(
    'welcome' => array(
        'isView' => true,
        'title' => 'Le Casier 9',
        'assets' => array(
            'css' => array(
                'welcome',
            ),
        ),
        'path' => '/vues/welcome.php',
        'menu' => ''
    ),

    'galerie' => array(
        'isView' => true,
        'title' => 'Sommaire',
        'assets' => array(
            'css' => array(
                'sommaire'
            ),
        ),
        'path' => '/vues/sommaire.php',
        'menu' => '',
    ),

    'casier' => array(
        'isView' => true,
        'title' => 'Casier itinérant',
        'assets' => array(
            'css' => array(
                'casier'
            ),
        ),
        'path' => '/vues/casier.php',
        'menu' => 'casier',
    ),

    'about' => array(
        'isView' => true,
        'title' => 'A propos',
        'assets' => array(
            'css' => array(
                'about'
            ),
        ),
        'path' => '/vues/about.php',
        'menu' => 'about',
        ),

    'external_link' => array(
        'isView' => true,
        'title' => 'Liens externes',
        'assets' => array(
            'css' => array(
                'external_link'
            ),
        ),
        'path' => '/vues/external_link.php',
        'menu' => 'external_link',
        ),

    'contact' => array(
        'isView' => true,
        'title' => 'Contact',
        'assets' => array(
            'css' => array(
                'contact'
            ),
        ),
        'path' => '/vues/contact.php',
        'menu' => 'contact',
        ),

    'archives' => array(
        'isView' => true,
        'title' => 'Archives',
        'assets' => array(
            'css' => array(
                'archives'
            ),
        ),
        'path' => '/vues/archives.php',
        'menu' => 'archives',
        ),












    'camille_guillaud' => array(
        'isView' => true,
        'title' => 'Camille Guillaud',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'lola_jacrot' => array(
        'isView' => true,
        'title' => 'Lola Jacrot',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'camille_ragnaud' => array(
        'isView' => true,
        'title' => 'Camille Ragnaud',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'woorim_moon' => array(
        'isView' => true,
        'title' => 'Woorim Moon',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'melusine_caillaud' => array(
        'isView' => true,
        'title' => 'Mélusine Caillaud',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'jeanne_dubois' => array(
        'isView' => true,
        'title' => 'Jeanne Dubois-Pacquet',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'maylis_breton' => array(
        'isView' => true,
        'title' => 'Maylis Breton',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'floriane_grosset' => array(
        'isView' => true,
        'title' => 'Floriane Grosset',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'mathilde_bennett' => array(
        'isView' => true,
        'title' => 'Mathilde Bennett',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),







    'reveries' => array(
        'isView' => true,
        'title' => 'Rêveries',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/reveries.php',
        'menu' => '',
        ),

    'chou' => array(
        'isView' => true,
        'title' => 'Empreintes de chou rouge',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/chou.php',
        'menu' => '',
        ),

    'ombres' => array(
        'isView' => true,
        'title' => 'Ombres',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/ombres.php',
        'menu' => '',
        ),

    'trajets' => array(
        'isView' => true,
        'title' => 'Trajets de poche',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'parcours' => array(
        'isView' => true,
        'title' => 'Parcours visuel',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/parcours.php',
        'menu' => '',
        ),

    'cellules' => array(
        'isView' => true,
        'title' => 'Cellules de mort',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/cellules.php',
        'menu' => '',
        ),

    'ecorche' => array(
        'isView' => true,
        'title' => 'Ecorché',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/ecorche.php',
        'menu' => '',
        ),

    'racines' => array(
        'isView' => true,
        'title' => 'Racines',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/racines.php',
        'menu' => '',
        ),

    'phaeophyceae' => array(
        'isView' => true,
        'title' => 'Phaeophyceae',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/phaeophyceae.php',
        'menu' => '',
        ),

    'a_travers' => array(
        'isView' => true,
        'title' => 'A travers',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/a_travers.php',
        'menu' => '',
        ),

    'arbrologie' => array(
        'isView' => true,
        'title' => 'Arbrologie',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/arbrologie.php',
        'menu' => '',
        ),

    'un_autre' => array(
        'isView' => true,
        'title' => 'L\'un dans l\'autre',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/un_autre.php',
        'menu' => '',
        ),


);

$_r = !empty($_GET['r']) ? $_GET['r'] : 'welcome';


$assetsRouteCss = '';

if (!empty($_routes[$_r]['assets']) && !empty($_routes[$_r]['assets']['css'])) {
    foreach ($_routes[$_r]['assets']['css'] as $key => $pathAsset) {
        $assetsRouteCss .= '<link rel="stylesheet" href="/css/' . $pathAsset . '.css" type="text/css" media="screen"/>';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php
                if (!empty($_routes[$_r]['link'])) {
                    include_once ROOT_DIR . '/vues/link.php' ;
                }
                ?>

        <title><?php echo $_routes[$_r]['title'] ?></title>
        <link rel="stylesheet" href="/css/global.css" type="text/css" media="screen"/>
        <?php echo $assetsRouteCss; ?>
    </head>

    <body>
        <div class="global">
            <?php
                    if (!empty($_routes[$_r]['menu'])) {
                        include_once ROOT_DIR . '/vues/menu.php';
                    }
                    ?>

            <?php
                if (!empty($_routes[$_r]['path'])) {
                    include_once ROOT_DIR . $_routes[$_r]['path'];
                 }
            ?>

        </div>
    </body>
<html>
