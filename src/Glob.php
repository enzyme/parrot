<?php

namespace Enzyme\Parrot;

class Glob extends Parrot
{
    const MARK = GLOB_MARK;
    const NOSORT = GLOB_NOSORT;
    const NOCHECK = GLOB_NOCHECK;
    const NOESCAPE = GLOB_NOESCAPE;
    const BRACE = GLOB_BRACE;
    const ONLYDIR = GLOB_ONLYDIR;
    const ERR = GLOB_ERR;

    public function execute()
    {
        return $this->dispatch('glob', func_get_args());
    }
}
