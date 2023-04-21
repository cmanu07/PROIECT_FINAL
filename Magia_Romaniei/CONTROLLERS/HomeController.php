<?php

class HomeController extends AppController
{
    public function __construct() {
        $this -> init();
    }

    public function init() {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['title'] = 'Contul meu - Acasă';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'homeAuthView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            $data['title'] = 'Magia Romaniei';
            $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'homeView.html');
            $data['mainContent'] .= $this -> render(APP_PATH . VIEWS . 'despreView.html');
            echo $this -> render(APP_PATH . VIEWS . 'layout.html', $data);
        }
    }
}