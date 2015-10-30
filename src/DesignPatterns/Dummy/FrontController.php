<?php

namespace DesignPatterns\Dummy;

/**
 * Class FrontController.
 */
class FrontController
{
    /**
     * @param string $page
     *
     * @return string
     */
    public function handle($page)
    {
        switch ($page) {
            case 'home':
                return 'Welcome to the homepage.' . "\n";
                break;
            case 'contact':
                return 'Leave us a message.' . "\n";
                break;
            default:
                return 'This page does not exists.' . "\n";
                break;
        }
    }
}
