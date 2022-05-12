<?php
class User {
    protected static function getCompanyName()
    {
        return 'User, Inc.';
    }
}

class UserAuth extends User{
    public $companyName;
    public function __construct()
    {
        $this-> companyName = parent::getCompanyName();
    }
}

$use = new UserAuth;
//echo $use -> companyName;
echo User::getCompanyName();