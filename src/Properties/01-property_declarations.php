<?php

namespace Properties;

use Properties\Dummy\SimpleClass;

$test = new SimpleClass();
var_dump(get_object_vars($test));
