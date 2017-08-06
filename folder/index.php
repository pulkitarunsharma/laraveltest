<?php
class Login{
    public $username;
    
    public $password;
    
    protected function login($username,$password){
        
        $this->username=$username;
        $this->password=$password;
    }
    
    protected function logout($username,$password){
        
        $this->username='';
        $this->password='';
    }
}


?>
