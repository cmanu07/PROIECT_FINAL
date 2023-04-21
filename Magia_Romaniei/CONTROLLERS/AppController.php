<?php

class AppController
{
    protected $routes = [
        'home' => 'HomeController',
        'regiuni' => 'RegiuniController',
        'obiective' => 'obiectiveController',
        'rezervari' => 'RezervariController',
        'login' => 'LogInController',
        'signup' => 'SignUpController',
        'logout' => 'LogOutController',
    ];

    public function __construct() {
        $this -> init();
    }
// navigarea intre pagini/controllers
    public function init() {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else $page = 'home';

        if (array_key_exists($page, $this -> routes)) {
            $className = $this -> routes[$page];
        } else $className = $this -> routes['home'];

        new $className;
    }
// render continut pagina
    public function render($page, $data=array()) {
        $template = file_get_contents($page);

        preg_match_all("[{{\w+}}]", $template, $matches);
        foreach($matches[0] as $value) {
            $item = str_replace('{{', '', $value);
            $item = str_replace('}}', '', $item);

            if (array_key_exists($item, $data)) $template = str_replace($value, $data[$item], $template);  
        }
        return $template;
    }
}