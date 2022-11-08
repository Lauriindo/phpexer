<?php
class User {
    private $email;
    private $password;
    private $cpf;
    private $name;
    
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($pass) {
        $this->password = $pass;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($Cpf) {
        $this->cpf = $cpf;
    }
}
