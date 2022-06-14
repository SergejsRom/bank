<?php
use Bankas\App;
use Bankas\Messages as M;

class LoginController {

    public function showLogin() {

        return App::view('login');
    }
}