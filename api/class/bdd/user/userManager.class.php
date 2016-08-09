<?php
/**
 * Bloc manager.
 *
 * PHP version 5
 *
 * @category Class
 * @package  No
 * @author   Maxime GROSSET <contact@mail.com>
 * @license  tag in file comment
 * @link     No
 */

require_once dirname(__FILE__) . '/../../Root.class.php';
require_once dirname(__FILE__) . '/user.class.php';

/**
 * Bloc manager class.
 *
 * @category Class
 * @package  No
 * @author   Maxime GROSSET <contact@mail.com>
 * @license  tag in file comment
 * @link     No
 */
class UserManager extends Root
{

    protected $bdd;

    /**
     * BlocManager constructor.
     *
     * @param {array} $data : Bloc manager data.
     * * param {PDO} db : Db connector.
     */
    public function __construct(array $data = array())
    {
        parent::__construct($data);
    }

    /**
     * Setter db connector.
     *
     * @param {PDO} $db : Db connector.
     *
     * @return null
     */
    public function setBdd($bdd = null)
    {
        $this->bdd = !empty($bdd) ? $bdd : null;
    }

    /**
     * Delete a bloc.
     *
     * @param {Bloc/Bloc} $bloc : Bloc to delete.
     *
     * @return null
     */
    public function delete(Bloc $bloc)
    {
        $id = $bloc->getId();
        $rep = $this->bdd->exec('DELETE FROM bloc WHERE id = ' . $id);

        if (!$rep) {
            throw new Exception('No bloc deleted with "id" => "' . $id . '"', 0);
        }
    }

    /**
     * Update a bloc.
     *
     * @param {Bloc/Bloc} $bloc : Bloc to update.
     *
     * @return null
     */
    public function update(User $user)
    {
        $this->addOrUpdate($bloc, false);
    }

    /**
     * Add a new bloc.
     *
     * @param {Bloc/Bloc} $bloc : Bloc to add.
     *
     * @return null
     */
    public function add(User $user)
    {
        $mail = $user->getMail();
        $checked = $user->getChecked();
        $newsletter = $user->getNewsletter();

        $query = 'INSERT INTO user (id, mail, checked, newsletter) VALUES (NULL, "'.$mail.'", '.$checked.', '.$newsletter.')';
        error_log($query);
        $q = $this->bdd->exec($query);

        // Get bdd id of the added category.
        $rep = $this->bdd->query('SELECT LAST_INSERT_ID() AS lastId');
        $data = $rep->fetch();
        $user->setId($data['lastId']);
        error_log($data['lastId']);
        error_log($user->getId());
        error_log($user);
        return $user;
    }

    /**
     * Get one bloc.
     *
     * @param {int} $id : Bloc id to get.
     *
     * @return {Bloc/Action|Bloc/Info|Bloc/File} $bloc : Bloc instance.
     */
    public function get($id = 0)
    {
        $id = (int) $id;

        $q = $this->bdd->query('SELECT * FROM user WHERE id = ' . $id);
        $data = $q->fetch(PDO::FETCH_ASSOC);

        if (is_array($data)) {
            $user = $this->createUser($data);
        } else {
            $user = null;
        }

        return $user;
    }

    /**
     * Get from mail.
     *
     * @param {int} $id : Bloc id to get.
     *
     * @return {Bloc/Action|Bloc/Info|Bloc/File} $bloc : Bloc instance.
     */
    public function getFromMail($mail)
    {
        $query = 'SELECT * FROM user WHERE  mail = :mail';

        $q = $this->bdd->prepare($query);


        $q->bindValue(':mail', $mail, PDO::PARAM_STR);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);

        if (is_array($data)) {
            $user = $this->createUser($data);
        } else {
            $user = null;
        }



        return $user;
    }

    /**
     *
     *
     */
    protected function createUser($userData = array())
    {
        $user = new User ($userData);
        return $user;
    }
}
















