<?php
class User {
    private $email = '';
    private $password = '123';
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
}