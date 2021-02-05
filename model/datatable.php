<?php
    class Student{
        var $nim, $nama, $prodi, $email1;

        function __construct($stdnim, $stdnama, $stdprodi, $stdemail){
            $this->nim =$stdnim;
            $this->nama =$stdnama;
            $this->prodi=$stdprodi;
            $this->email1=$stdemail;
        }

        public function getnim () {
            return $this->nim;
        }
        public function getnama() {
            return $this->nama;
        }
        public function getprodi() {
            return $this->prodi;
        }
        public function getemail(){
            return $this->email1;
        }
        public function setnim($str) {
            $this->nim =$str;
        }
        public function setnama($str) {
            $this->nama=$str;
        }
        public function setprodi($str) {
            $this->prodi=$str;
        }
        public function setemail($str) {
            $this->email1=$str;
        }
    }
?>