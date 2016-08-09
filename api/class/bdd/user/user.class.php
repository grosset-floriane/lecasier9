<?php
/**
 * Bloc model.
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

/**
 * Bloc class.
 *
 * @category Class
 * @package  No
 * @author   Maxime GROSSET <contact@mail.com>
 * @license  tag in file comment
 * @link     No
 */
class User extends Root
{
    protected $id = 0;
    protected $mail = '';
    protected $checked = 0;
    protected $newsletter = 0;

    /**
     * Bloc constructor.
     *
     * @param {array} $data : Bloc data.
     * * param {int}    id          : Db id.
     * * param {string} content     : Content.
     * * param {string} moreInfo    : More info.
     * * param {int}    idCategory  : Category id.
     */

    public function __construct(array $data = array())
    {
        parent::__construct($data);
    }

    /**
     * Getter db id.
     *
     * @return {int} Db id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter db id.
     *
     * @param {int} $id : Db id.
     *
     * @return null
     */
    public function setId($id = 0)
    {
        $this->id = !empty($id) && is_numeric($id) ? (int) $id : 0;
    }

    /**
     * Getter type Bloc.
     *
     * @return {string} Type Bloc ('action'|'info'|'file').
     */
    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail = '')
    {
        $this->mail= !empty($mail) ? $mail : '';
    }

    /**
     * Getter content.
     *
     * @return {string} Content.
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Setter content.
     *
     * @param {string} $content : Content.
     *
     * @return null
     */
    public function setChecked($checked = 0)
    {
        $this->checked = !empty($checked) ? $checked : 0;
    }

    /**
     * Getter newsletter.
     *
     * @return {string} More info.
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Setter newsletter.
     *
     * @param {string} $newsletter : More info.
     *
     * @return null
     */
    public function setNewsletter($newsletter = 0)
    {
        $this->newsletter = !empty($newsletter) ? $newsletter : 0;
    }
}
