<?php

namespace Enzyme\Parrot;

abstract class Parrot
{
    /**
     * Dispatches the function call to the system.
     *
     * @param string $function  The function to dispatch.
     * @param array  $arguments User supplied arguments.
     *
     * @return mixed
     */
    public function dispatch($function, $arguments)
    {
        if (function_exists($function) === false) {
            throw new ParrotException("The function [{$function}] does not exist.");
        }

        return call_user_func_array($function, $arguments);
    }
}