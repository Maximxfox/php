<?php
class Point {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX($deltaX) {
        $this->x += $deltaX;
    }

    public function moveY($deltaY) {
        $this->y += $deltaY;
    }
}
?>