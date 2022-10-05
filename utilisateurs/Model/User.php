<?php

namespace Users\Model;

class User
{
    public int $user_id;
    public string $user_name;
    public string $user_email;
    public string $user_pass;
    public string $user_group_id;

    public function __construct(int $_user_id , string $_user_name ,string $_user_email , string $_user_pass , int $_user_group_id)
    {
        $this->user_id=$_user_id;
        $this->user_name=$_user_name;
        $this->user_email=$_user_email;
        $this->user_pass=$_user_pass;
        $this->user_group_id=$_user_group_id;
    }
}
