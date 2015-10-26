<?php

namespace Properties\Dummy;

/**
 * Class SimpleClass.
 */
class SimpleClass
{
    const MY_CONSTANT = 'foo';

    public $var6 = self::MY_CONSTANT;
    public $var7 = array(true, false);

    // This is allowed only in PHP 5.3.0 and later.
    public $var8 = <<<'EOD'
hello world
EOD;

    // As of PHP 5.3.0
    public $bar = <<<'EOT'
bar
EOT;
}
