<?php

class LogOutController extends AppController
{
    public function __construct() {
        $this -> init();
    }

    public function init() {
        session_start();
        session_destroy();
        $data['mainContent'] = $this -> render(APP_PATH . VIEWS . 'loadingView.html');
        echo $this -> render(APP_PATH . VIEWS . 'layoutLoad.html', $data);
        header("Refresh: 1.5; url = home");
    }
}