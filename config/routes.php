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


    'sommaire' => array(
            'isView' => true,
            'title' => 'Sommaire',
            'assets' => array(
                'css' => array(
                ),
            ),
            'path' =>'/static/sommaire.php'
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








    'organique' => array(
            'isView' => true,
            'title' => 'Organique',
            'assets' => array(
                'css' => array(
                ),
            ),
            'path' =>'/static/organique.php'
    ),

    'traces' => array(
            'isView' => true,
            'title' => 'Traces',
            'assets' => array(
                'css' => array(
                ),
            ),
            'path' =>'/static/traces.php'
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
        'path' =>'/static/etudiant/camille_guillaud.php',
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

    'juliette_guiot' => array(
        'isView' => true,
        'title' => 'Juliette Guiot',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/juliette_guiot.php',
    ),

    'arthur_billaud' => array(
        'isView' => true,
        'title' => 'Arthur Billaud',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/arthur_billaud.php',
    ),

    'sandy_kalaydjian' => array(
        'isView' => true,
        'title' => 'Sandy Kalaydjian',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/sandy_kalaydjian.php',
    ),

    'stanley_obobogo' => array(
        'isView' => true,
        'title' => 'Stanley Obobogo',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/stanley_obobogo.php',
    ),

    'rudy_dumas' => array(
        'isView' => true,
        'title' => 'Rudy Dumas Djandolo',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/rudy_dumas.php',
    ),

    'stanca_soare' => array(
        'isView' => true,
        'title' => 'Stanca Soare',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/stanca_soare.php',
    ),

    'maylis_breton' => array(
        'isView' => true,
        'title' => 'Maylïs Breton',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/etudiant/maylis_breton.php',
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
                'machine'
            ),
        ),
        'path' =>'/static/projets/machine.php',
    ),

    'balaena' => array(
        'isView' => true,
        'title' => 'Balaena',
        'assets' => array(
            'css' => array(
                'os'
            ),
        ),
        'path' =>'/static/projets/balaena.php',
    ),

    'protecteurs' => array(
        'isView' => true,
        'title' => 'Les Protecteurs',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/protecteurs.php',
    ),

    'betes' => array(
        'isView' => true,
        'title' => 'Bêtes',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/betes.php',
    ),

    'aquariophiles' => array(
        'isView' => true,
        'title' => 'Tentatives aquariophiles',
        'assets' => array(
            'css' => array(
                'aquariophiles'
            ),
        ),
        'path' =>'/static/projets/aquariophiles.php',
    ),

    'ecrivain' => array(
        'isView' => true,
        'title' => 'L\'écrivain ou capricorne velutinus',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/ecrivain.php',
    ),

    'bestiaire' => array(
        'isView' => true,
        'title' => 'Bestiaire',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/bestiaire.php',
    ),

    'veau' => array(
        'isView' => true,
        'title' => 'Le veau',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/veau.php',
    ),

    'corde' => array(
        'isView' => true,
        'title' => 'La cinquième corde',
        'assets' => array(
            'css' => array(
            ),
        ),
        'path' =>'/static/projets/corde.php',
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
