<?php

namespace ClassConstants\Dummy;

/**
 * Class MyClass.
 */
class MyClass
{
    const CONSTANT = 'constant value';
    const ONE = 1;
    // As of PHP 5.3.0
    const BAR = <<<'EOT'
bar
EOT;
    // As of PHP 5.3.0
    const BAZ = <<<EOT
baz
EOT;

    // As of PHP 5.6.0
    const TWO = self::ONE * 2;
    const THREE = self::ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;

    function getConstant()
    {
        return self::CONSTANT."\n";
    }
}
