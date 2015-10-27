<?php

use Exception\Dummy\Math;

try {
    echo Math::inverse(5) . "\n";
    echo Math::inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
