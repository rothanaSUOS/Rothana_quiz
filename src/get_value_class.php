<?php

class get_info {

    public function getname() {
        $this->name = $_POST['name'];
    }
    public function getgender() {
        $this->gender = $_POST['gender'];
    }
    public function getprovince() {
        $this->province = $_POST['province'];
    }
    public function  getemail() {
        $this->email = $_POST['email'];
    }
}