<?php
    class User{
        var $email, $role, $password;

        function __construct($unemail, $urole, $upassword){
            $this->email=$unemail;
            $this->role=$urole;
            $this->password =$upassword;
        }

        public function getemail(){
            return $this->email;
        }
        public function getrole(){
            return $this->role;
        }
        public function getpassword(){
            return $this->password;
        }
        public function setemail($str){
            $this->email=$str;
        }
        public function setrole($str){
            $this->role=$str;
        }
        public function setpassword($str){
            $this->password=$str;
        }
    }
?>