<?php

spl_autoload_register(
    /**
     * @param $class
     *
     * @return bool
     */
    function ($class) {
        if (0 === strpos($class, 'IbanGenerator\Tests\\')) {
            $path = __DIR__ . '/../tests/' . strtr($class, '\\', '/') . '.php';

            if (file_exists($path) && is_readable($path)) {
                require_once $path;

                return true;
            }
        } elseif (0 === strpos($class, 'IbanGenerator\\')) {
            $path =
                __DIR__ .
                '/../src/' .
                ($class = strtr($class, '\\', '/')) .
                '.php';

            if (file_exists($path) && is_readable($path)) {
                require_once $path;

                return true;
            }
        }
    }
);
