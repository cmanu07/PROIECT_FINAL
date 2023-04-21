<?php

class ObiectiveController extends AppController
{
    public function __construct() {
        $this -> init();
    }

    public function init() {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['title'] = 'Contul meu - Obiective';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'obiectiveAuthView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            $data['title'] = 'Obiective turistice';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'obiectiveView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layout.html', $data);
        }
    }
}