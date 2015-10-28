<?php
/**
 * Created by PhpStorm.
 * User: trainingPC
 * Date: 10/27/2015
 * Time: 2:41 PM
 */
class View {

    function __construct() {
       //echo "This is a view <br />";
    }

    public function render($name) {

        require 'views/' . $name . '.php';
    }
}