<?php
defined ('_JEXEC') or die('Restricted access');

class User
{
    private $id, $username, $role;
    
    public function __construct($id, $username) 
    {
        $this->id = $id;
        $this->username = $username;
    }
    
    public function setRole($role)
    {
        $this->role = $role;
    }
    
    public function getID()
    {
        return $this->id;
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function getRole()
    {
        return $this->role;
    }
}
