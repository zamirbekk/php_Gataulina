<?php

declare(strict_types=1);

namespace App;

class Point {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX($distance) {
        $this->x += $distance;
    }

    public function moveY($distance) {
        $this->y += $distance;
    }

    public function __toString() {
        return "Point({$this->x}, {$this->y})";
    }
}