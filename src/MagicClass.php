<?php

declare(strict_types=1);

namespace App;

class MagicClass {

    public function __construct() {
        echo "__construct\n";
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
        return [];
    }

    public function __wakeup() {
        echo "__wakeup\n";
    }

    public function __toString() {
        echo "__toString\n";
        return "MagicClass";
    }

    public function __invoke(): void
    {
        echo "__invoke\n";
    }

    public static function __set_state($array) {
        echo "__set_state\n";
        return new self();
    }

    public function __clone() {
        echo "__clone\n";
    }

    public function __debugInfo() {
        echo "__debugInfo\n";
        return [];
    }

    public function __serialize() {
        echo "__serialize\n";
        return [];
    }

    public function __unserialize($data) {
        echo "__unserialize\n";
    }
}