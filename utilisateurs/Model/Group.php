<?php

namespace Users\Model;

class Group
{
    public int $group_id;
    public string $group_name;

    public function __construct(int $_group_id , string $_group_name)
    {
        $this->group_id = $_group_id;
        $this->group_name = $_group_name;
    }
}
