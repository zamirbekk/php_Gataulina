<?php

use App\Point;
use App\Vector;

require 'vendor/autoload.php';

$T1 = new Point(3, 4);

$V1 = new Vector(2, 5);

$V2 = new Vector(0, 0);

$V3 = new Vector(-$V1->y, $V1->x);

echo "Length of V1: " . $V1->length() . "\n";
echo "Length of V2: " . $V2->length() . "\n";
echo "Length of V3: " . $V3->length() . "\n";

echo "V3 and V1 are perpendicular: " . ($V3->isPerpendicular($V1) ? "Yes" : "No") . "\n";

$T1->moveX($V1->x);
$T1->moveY($V1->y);
echo "New position of T1: $T1\n";