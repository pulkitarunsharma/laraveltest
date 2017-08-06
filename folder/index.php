<?php
class Login{
    public $username;
    
    public $password;
    
    protected function login($username,$password){
        
        $this->username=$username;
        $this->password=$password;
    }
}
?>
