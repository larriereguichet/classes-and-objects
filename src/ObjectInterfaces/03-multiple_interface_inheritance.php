<?php

namespace ObjectInterfaces;

use ObjectInterfaces\Dummy\CanFlyInterface;
use ObjectInterfaces\Dummy\CanSwimInterface;
use ObjectInterfaces\Dummy\Duck;
use ObjectInterfaces\Dummy\Eagle;
use ObjectInterfaces\Dummy\Penguin;

$birds = [
    new Penguin(),
    new Duck(),
    new Eagle()
];

foreach ($birds as $bird) {
    if ($bird instanceof CanFlyInterface) {
        $bird->fly();
    }

    if ($bird instanceof CanSwimInterface) {
        $bird->swim();
    }
}
