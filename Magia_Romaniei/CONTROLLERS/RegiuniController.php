<?php

class RegiuniController extends AppController
{
    public function __construct() {
        $this -> init();
    }

    public function init() {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['title'] = 'Contul meu - Regiuni';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'regiuniAuthView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            $data['title'] = 'Regiuni turistice';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'regiuniView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layout.html', $data);
        }
    }
}