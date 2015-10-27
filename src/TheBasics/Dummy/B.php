<?php

namespace TheBasics\Dummy;

/**
 * Class B.
 */
class B
{
    public function bar()
    {
        // Note: the next line will issue a warning if E_STRICT is enabled.
        A::foo();
    }
}
