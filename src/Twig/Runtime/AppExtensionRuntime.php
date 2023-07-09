<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function doSomething($value)
    {
        // ...
    }

    public function pluralize(int $count, string $singular, string $plural): string
    {
        $result = $count > 1 ? $plural : $singular;
        return "$count $result";
    }
}
