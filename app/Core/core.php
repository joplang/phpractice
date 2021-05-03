<?php

/**
 * (var_)dump variable(s)
 * No params, just get vars from func_get_args function
 */
function dd()
{
    $args = func_get_args();

    if (count($args))
    {
        echo "<pre>";

        foreach ($args as $arg)
        {
            var_dump($arg);
        }

        echo "</pre>";

        die();
    }
}