<?php
/**
 * Description : Permet de se connecter a la bdd
 *
 * PHP version 5
 *
 * @category Inc
 * @package  No
 * @author   Maxime GROSSET <contact@mail.com>
 * @license  tag in file comment
 * @link     No
 */

/*global
    ROOT_DIR
*/

try {

    $_localConfigPath = ROOT_DIR . '/config/local.inc.php';

    if (file_exists($_localConfigPath)) {
        include_once $_localConfigPath;
    } else {
        throw new Exception("Local config file is missing.");
    }

    if (empty($_localConfig) || empty($_localConfig['bdd'])) {
        throw new Exception('No bdd config found in your local config file.');
    }

    $configBdd = $_localConfig['bdd'];

    $host = isset($configBdd['host']) ? $configBdd['host'] : 'localhost';
    $bddName = isset($configBdd['name']) ? $configBdd['name'] : 'promeeting';
    $port = isset($configBdd['port']) ? $configBdd['port'] : '';
    $login = isset($configBdd['login']) ? $configBdd['login'] : 'root';
    $pwd = isset($configBdd['pwd']) ? $configBdd['pwd'] : 'root';

    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

    $pdo = 'mysql:host=' . $host . ';dbname=' . $bddName . ';';
    $pdo .= $port ? 'port=' . $port : '';

    $bdd = new PDO($pdo, $login, $pwd, $pdo_options);
    //return $bdd;

} catch (Exception $e) {
    // Si la connexion a la bdd a echouee
    die('Bdd connection error : ' . $e->getMessage());
}
