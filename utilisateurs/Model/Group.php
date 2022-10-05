<?php
namespace Users\Model;

/**
 * Group class
 * @author FACQUEUR <facqueur.gatien@gmail.com>
 * @version 0.0.1
 * @license MIT
 */
class Group
{
    /**@var int $group_id The user group identifier */
    public int $group_id;
    /**@var string The user group name */
    public string $group_name;

    public function __construct(int $_group_id , string $_group_name)
    {
        $this->group_id = $_group_id;
        $this->group_name = $_group_name;
    }
}
