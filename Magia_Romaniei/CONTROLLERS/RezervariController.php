<?php

class RezervariController extends AppController
{
    public function __construct() {
        $this -> init();
    }

    public function init() {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['title'] = 'Contul meu - Rezervări';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'rezervariAuthView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            $data['title'] = 'Rezervări';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'rezervariView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layout.html', $data);
        }
    }
}