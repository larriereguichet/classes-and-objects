<?php

use TheBasics\Dummy\SimpleClass;

/**
 * Object assignment example and reference.
 *
 * @see http://php.net/manual/en/language.oop5.references.php
 */

$instance = new SimpleClass();

$assigned  = $instance;
$reference =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
