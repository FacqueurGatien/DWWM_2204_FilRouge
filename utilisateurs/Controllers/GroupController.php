<?php
namespace Users\Controllers;

/**
 * GroupController class
 * @author FACQUEUR <facqueur.gatien@gmail.com>
 * @version 0.0.1
 * @license MIT
 */
class GroupController
{
    /**
     *  index function
     * @author FACQUEUR <facqueur.gatien@gmail.com>
     * @return void
     * Route /?page=groups
     */
    public function index():void
    {
        require '../View/groups.php';
    }

    /**
     * add function
     * @author FACQUEUR <facqueur.gatien@gmail.com>
     * @return void
     * Allow to add an user group in database
     */
    public function add():void
    {
        require '../View/groups.php';
    }
}