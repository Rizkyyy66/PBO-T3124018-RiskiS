<?php
class user {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = md5($password);
    }

    private function password() {
        return $this->password;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() { 
        return $this->password;
    }

}

$user = new user("Riski", "12345");
echo $user->getUsername();
?>