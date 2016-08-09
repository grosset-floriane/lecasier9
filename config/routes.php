<?php
/**
* Description : Allowed routes
*
* PHP version 5
*
* @category Config_-_Routes
* @package No
* @author Maxime GROSSET <contact@mail.com>
* @license tag in file comment
* @link No
*/
$_routes = array();
// Modules - Views - App
// ---------------------
$_routes += array(
    'welcome' => array(
        'isView' => true,
        'title' => 'Accueil',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/accueil.php',
        'menu' => ''
    ),

    'sommaire' => array(
        'isView' => true,
        'title' => 'Portfolio',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/sommaire.php',
        'menu' => ''
    ),

    'about' => array(
        'isView' => true,
        'title' => 'A propos',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/about.php',
        'menu' => ''
    ),

    'route1' => array(
        'isView' => true,
        'title' => 'Route 1',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/route1.php',
        'menu' => ''
    ),

    'labyrinthe' => array(
        'isView' => true,
        'title' => 'Labyrinthe',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/labyrinthe.php',
        'menu' => ''
    ),

    'fuite' => array(
        'isView' => true,
        'title' => 'La fuite',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/fuite.php',
        'menu' => ''
    ),

    'blivre' => array(
        'isView' => true,
        'title' => 'Boîte-livre',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/blivre.php',
        'menu' => ''
    ),

    'bimage' => array(
        'isView' => true,
        'title' => 'Boîte-image',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/bimage.php',
        'menu' => ''
    ),

    '70miles' => array(
        'isView' => true,
        'title' => '70 miles à l\'heure',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/70miles.php',
        'menu' => ''
    ),

    'lanterne' => array(
        'isView' => true,
        'title' => 'Lanterne magique',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/lanterne.php',
        'menu' => ''
    ),

    'casier' => array(
        'isView' => true,
        'title' => 'Le Casier 9',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/casier.php',
        'menu' => ''
    ),

    'panoramique' => array(
        'isView' => true,
        'title' => 'Panoramique de poche',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/panoramique.php',
        'menu' => ''
    ),

    'trailer' => array(
        'isView' => true,
        'title' => 'Bande-annonce',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/trailer.php',
        'menu' => ''
    ),

    'corps_etranger' => array(
        'isView' => true,
        'title' => 'Corps Etranger',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/corps_etranger.php',
        'menu' => ''
    ),

    'casier' => array(
        'isView' => true,
        'title' => 'Le Casier 9',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/casier.php',
        'menu' => ''
    ),

    'batiments' => array(
        'isView' => true,
        'title' => 'Bâtiments impertubables',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/batiments.php',
        'menu' => ''
    ),

    'vu' => array(
        'isView' => true,
        'title' => 'Vu !',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/vu.php',
        'menu' => ''
    ),

    'objets' => array(
        'isView' => true,
        'title' => 'Objets trouvés',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/projets/objets.php',
        'menu' => ''
    ),

    'photogrammes' => array(
        'isView' => true,
        'title' => 'Photogrammes',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/recherches/photogramme.php',
        'menu' => ''
    ),

    'natale' => array(
        'isView' => true,
        'title' => 'Ville natale',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/recherches/natale.php',
        'menu' => ''
    ),

    'relief' => array(
        'isView' => true,
        'title' => 'Lunettes à relief',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/recherches/relief.php',
        'menu' => ''
    ),

    'pellicules' => array(
        'isView' => true,
        'title' => 'Film en pellicules',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/recherches/pellicules.php',
        'menu' => ''
    ),

    'echangeur' => array(
        'isView' => true,
        'title' => 'Echangeur d\'autoroute',
        'assets' => array(
            'css' => array(
                ),
            ),
        'path' => '/static/recherches/echangeur.php',
        'menu' => ''
    ),






    'status_403' => array(
        'isView' => true,
        'path' => '/public/errors/status_403.php',
        'title' => 'Error 403',
        'dont_check_auth' => true,
    ),
    'status_404' => array(
        'isView' => true,
        'path' => '/public/errors/status_404.php',
        'title' => 'Error 404',
        'dont_check_auth' => true,
    ),




    'aquariophiles' => array(
        'isView' => true,
        'title' => 'Tentatives aquariophiles',
        'assets' => array(
            'css' => array(
                'aquariophiles'
            ),
        ),
        'path' =>'/static/projets/bestiaire/aquariophiles.php',
    ),





);




// API - Scripts
// -------------
$_routes += array(
    'inscription_s' => array(
        'isScript' => true,
        'path' => '/api/script/inscription_json.php',
    ),
);
// Static - Views - Errors
// -----------------------
$_routes += array(
    'status_403' => array(
        'isView' => true,
        'path' => '/public/errors/status_403.phtml',
        'title' => 'Error 403',
        'dont_check_auth' => true,
    ),

    'status_404' => array(
        'isView' => true,
        'path' => '/public/errors/status_404.phtml',
        'title' => 'Error 404',
        'dont_check_auth' => true,
    ),
);
