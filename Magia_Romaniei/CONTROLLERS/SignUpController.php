<?php

class SignUpController extends AppController
{
    public function __construct() {
        $this -> init();
    }

    public function init() {
        $user = $_POST['nameSUp'];
        $userN = $_POST['userNameSUp'];
        $userE = $_POST['emailSUp'];
        $userP = $_POST['parolaSUp'];

        $newUser = new UserModel;

        if ($newUser -> signUpUser($user, $userN, $userE, $userP)) {
            session_start();
            $_SESSION['user'] = $userN;
            $data['title'] = 'Contul meu';
            $data['userN'] = $_SESSION['user'];
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'welcomeView.html', $data);
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'eroareSignUpView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutLoad.html', $data);
            header("Refresh: 2; url = home");
        }
    }
}