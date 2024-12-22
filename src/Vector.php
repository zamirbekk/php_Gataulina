<?php

declare(strict_types=1);

namespace App;

class Vector {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function length() {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    public function isZero() {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicular(Vector $other) {
        return ($this->x * $other->x + $this->y * $other->y) == 0;
    }

    public function __toString() {
        return "Vector({$this->x}, {$this->y})";
    }
}

