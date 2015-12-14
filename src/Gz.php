<?php

namespace Enzyme\Parrot;

class Gz extends Parrot
{
    public function close()
    {
        return $this->dispatch('gzclose', func_get_args());
    }

    public function compress()
    {
        return $this->dispatch('gzcompress', func_get_args());
    }

    public function decode()
    {
        return $this->dispatch('gzdecode', func_get_args());
    }

    public function deflate()
    {
        return $this->dispatch('gzdeflate', func_get_args());
    }

    public function encode()
    {
        return $this->dispatch('gzencode', func_get_args());
    }

    public function eof()
    {
        return $this->dispatch('gzeof', func_get_args());
    }

    public function file()
    {
        return $this->dispatch('gzfile', func_get_args());
    }

    public function getC()
    {
        return $this->dispatch('gzgetc', func_get_args());
    }

    public function getS()
    {
        return $this->dispatch('gzgets', func_get_args());
    }

    public function getSs()
    {
        return $this->dispatch('gzgetss', func_get_args());
    }

    public function inflate()
    {
        return $this->dispatch('gzinflate', func_get_args());
    }

    public function open()
    {
        return $this->dispatch('gzopen', func_get_args());
    }

    public function passThru()
    {
        return $this->dispatch('gzpassthru', func_get_args());
    }

    public function putS()
    {
        return $this->dispatch('gzputs', func_get_args());
    }

    public function read()
    {
        return $this->dispatch('gzread', func_get_args());
    }

    public function rewind()
    {
        return $this->dispatch('gzrewind', func_get_args());
    }

    public function seek()
    {
        return $this->dispatch('gzseek', func_get_args());
    }

    public function tell()
    {
        return $this->dispatch('gztell', func_get_args());
    }

    public function uncompress()
    {
        return $this->dispatch('gzuncompress', func_get_args());
    }

    public function write()
    {
        return $this->dispatch('gzwrite', func_get_args());
    }

    public function readGzFile()
    {
        return $this->dispatch('readgzfile', func_get_args());
    }

    public function zlibDecode()
    {
        return $this->dispatch('zlib_decode', func_get_args());
    }

    public function zlibEncode()
    {
        return $this->dispatch('zlib_encode', func_get_args());
    }

    public function zlibGetCodingType()
    {
        return $this->dispatch('zlib_get_coding_type', func_get_args());
    }
}