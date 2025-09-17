<?php
class WC_Language_Handler {
    private $languages = ['en' => 'English', 'de' => 'Deutsch', 'hi' => 'Hindi'];

    public function __construct() {
        add_action('init', [$this, 'set_language']);
    }

    public function set_language() {
        if (isset($_POST['language']) && array_key_exists($_POST['language'], $this->languages)) {
            setcookie('language', $_POST['language'], time()+3600, '/');
            $_COOKIE['language'] = $_POST['language'];
        }
    }
}
