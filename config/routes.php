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
        'title' => 'Le Casier 9',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/welcome.php',
        'menu' => ''
    ),

    'archives' => array(
        'isView' => true,
        'title' => 'Archives',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/archives.php',
        'menu' => 'archives'
    ),

    'casier' => array(
        'isView' => true,
        'title' => 'Casier Itinérant',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/casier.php',
        'menu' => ''
    ),

    'about' => array(
        'isView' => true,
        'title' => 'À propos',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/about.php',
        'menu' => 'about'
    ),


    'contact' => array(
        'isView' => true,
        'title' => 'Contact',
        'assets' => array(
            'js' => array(
                'contact/contact'
            ),
            'css' => array(
            ),
        ),
        'path' =>'/static/contact.php',
        'menu' => 'contact'
    ),

    'external_link' => array(
        'isView' => true,
        'title' => 'Liens externes',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/external_link.php',
        'menu' => 'external_link'
    ),















    'mathilde_bennett' => array(
        'isView' => true,
        'title' => 'Mathilde Bennett',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/mathilde_bennett.php',
    ),

    'melusine_caillau' => array(
        'isView' => true,
        'title' => 'Mélusine Caillau',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/melusine_caillau.php',
    ),

    'jeanne_dubois' => array(
        'isView' => true,
        'title' => 'Jeanne Dubois Pacquet',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/jeanne_dubois.php',
    ),

    'floriane_grosset' => array(
        'isView' => true,
        'title' => 'Floriane Grosset',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/floriane_grosset.php',
    ),

    'camille_guillaud' => array(
        'isView' => true,
        'title' => 'Camille Guillaud',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/camille_guillaud.php',
    ),

    'lola_jacrot' => array(
        'isView' => true,
        'title' => 'Lola Jacrot',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/lola_jacrot.php',
    ),

    'woorim_moon' => array(
        'isView' => true,
        'title' => 'Woorim Moon',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/woorim_moon.php',
    ),

    'camille_ragnaud' => array(
        'isView' => true,
        'title' => 'Camille Ragnaud',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/camille_ragnaud.php',
    ),













    'cellules' => array(
        'isView' => true,
        'title' => 'Cellules de mort',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/cellules.php',
    ),

    'ecorche' => array(
        'isView' => true,
        'title' => 'Ecorché',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/ecorche.php',
    ),

    'racines' => array(
        'isView' => true,
        'title' => 'Racines',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/racines.php',
    ),

    'phaeophyceae' => array(
        'isView' => true,
        'title' => 'Phaeophyceae',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/phaeophyceae.php',
    ),

    'a_travers' => array(
        'isView' => true,
        'title' => 'À travers',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/a_travers.php',
    ),

    'arbrologie' => array(
        'isView' => true,
        'title' => 'Arbrologie',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/arbrologie.php',
    ),

    'un_autre' => array(
        'isView' => true,
        'title' => 'L\' un dans l\'autre',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/un_autre.php',
    ),

    'reveries' => array(
        'isView' => true,
        'title' => 'Rêveries',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/reveries.php',
    ),

    'chou' => array(
        'isView' => true,
        'title' => 'Empreintes de chou',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/chou.php',
    ),

    'ombres' => array(
        'isView' => true,
        'title' => 'Ombres',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/ombres.php',
    ),

    'trajets' => array(
        'isView' => true,
        'title' => 'Trajets de poche',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/trajets.php',
    ),

    'parcours' => array(
        'isView' => true,
        'title' => 'Parcours visuel',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/parcours.php',
    ),

    'machine' => array(
        'isView' => true,
        'title' => 'La machine, l\'oiseau et l\'ananas',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/machine.php',
    ),

    'os' => array(
        'isView' => true,
        'title' => 'Os',
        'assets' => array(
            'css' => array(
                'os'
            ),
        ),
        'path' =>'/static/projets/os.php',
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
