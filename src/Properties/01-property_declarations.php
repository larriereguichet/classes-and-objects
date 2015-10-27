<?php

namespace Properties;

use Properties\Dummy\SimpleClass;

/**
 * Various way of declaring properties.
 */

$test = new SimpleClass();
var_dump(get_object_vars($test));
