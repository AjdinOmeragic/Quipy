<?php
require_once __DIR__ . '/BaseDaov2.php';

class UserDao extends BaseDaov2
{
    public function __construct()
    {
        parent::__construct('users');
    }
}