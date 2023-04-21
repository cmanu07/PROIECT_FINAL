<?php

class LogInController extends AppController
{
    public function __construct() {
        $this -> init();
    }

    public function init() {
        $uName = $_POST['userName'];
        $uPass = $_POST['parolaLog'];
        $user = new UserModel;
        $myUser = $user -> isAuth($uName, $uPass);
        if ($myUser) {
            session_start();
            $_SESSION['user'] = $uName;
            $data['userN'] = $myUser['UserName'];
            $data['title'] = 'Contul meu';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'welcomeView.html', $data);
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
            // header("Refresh: 2; url = rezervari");
        } else {
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'eroareLogInView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutLoad.html', $data);
            header("Refresh: 1.5; url = home");
        }
    }
}

// date de logare: username - manu07 si parola - 123