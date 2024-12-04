<?php
namespace App;

class MagicClass {
    public $exampleVar; 
    public function __construct() { 
        echo "__construct\n"; 
        $this->exampleVar = "example"; 
    }
    public function __destruct() {
        echo "__destruct\n";
    }
    public function __call($name, $arguments) {
        echo "__call\n";
    }
    public static function __callStatic($name, $arguments) {
        echo "__callStatic\n";
    }
    public function __get($name) {
        echo "__get\n";
    }
    public function __set($name, $value) {
        echo "__set\n";
    }
    public function __isset($name) {
        echo "__isset\n";
    }
    public function __unset($name) {
        echo "__unset\n";
    }
    public function __sleep() {
        echo "__sleep\n";
        return ['exampleVar'];
    }
    public function __wakeup() {
        echo "__wakeup\n";
    }
    public function __toString() {
        return "__toString\n";
    }
    public function __invoke() {
        echo "__invoke\n";
    }
    public static function __set_state($array) {
        echo "__set_state\n";
    }
    public function __clone() {
        echo "__clone\n";
    }
    public function __debugInfo() {
        return ["__debugInfo"];
    }
}
?>