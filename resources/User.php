<?php

class User
{
    public $id;
    public $username;
    public $email;

    public function __construct(int $id, string $username, string $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }
}
