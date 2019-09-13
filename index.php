<?php
for($i = 0; $i < 100; $i++)
{

    echo  "fuji".$i;
    echo "\n";
}

$arrays = ["condong", "mbae", "zezen", "minul" ,"voli", "futsal", "basket"];

foreach ($arrays as $array) {
    echo $array;
    echo "\n";  
   
}

// class => schema / Templet untuk membuat object
class User
{
    //  property => variabel di dalam class
    public $username;


    // method => function di dalam class
    public function getUsername($username)
    {
        return $this->username = $username;
    }
}
//  object => sebuan komponen yang terdiri dari property dan method
$object = new user;
echo $object ->getUsername("subianto");