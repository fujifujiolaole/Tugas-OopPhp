<?php
 class Models
{
    protected $datas = ["adiadi","kharis"];
    private $password = "rahasia pokoe";
    
    public function getPassword()
    {
        return $this->password;
    }
}
class User extends Models
{
    public function getUser()
    {
        return $this->datas;
    }
}

 
$user = new User;
// echo $user->getUser()

$models = new Models;
// echo $models->getDatas();
echo $models->getPassword();