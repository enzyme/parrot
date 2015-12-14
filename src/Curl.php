<?php

namespace Enzyme\Parrot;

class Curl extends Parrot
{
    public function close()
    {
        return $this->dispatch('curl_close', func_get_args());
    }

    public function copyHandle()
    {
        return $this->dispatch('curl_copy_handle', func_get_args());
    }

    public function errno()
    {
        return $this->dispatch('curl_errno', func_get_args());
    }

    public function error()
    {
        return $this->dispatch('curl_error', func_get_args());
    }

    public function escape()
    {
        return $this->dispatch('curl_escape', func_get_args());
    }

    public function exec()
    {
        return $this->dispatch('curl_exec', func_get_args());
    }

    public function fileCreate()
    {
        return $this->dispatch('curl_file_create', func_get_args());
    }

    public function getInfo()
    {
        return $this->dispatch('curl_getinfo', func_get_args());
    }

    public function init()
    {
        return $this->dispatch('curl_init', func_get_args());
    }

    public function multiAddHandle()
    {
        return $this->dispatch('curl_multi_add_handle', func_get_args());
    }

    public function multiClose()
    {
        return $this->dispatch('curl_multi_close', func_get_args());
    }

    public function multiExec()
    {
        return $this->dispatch('curl_multi_exec', func_get_args());
    }

    public function multiGetcontent()
    {
        return $this->dispatch('curl_multi_getcontent', func_get_args());
    }

    public function multiInfoRead()
    {
        return $this->dispatch('curl_multi_info_read', func_get_args());
    }

    public function multiInit()
    {
        return $this->dispatch('curl_multi_init', func_get_args());
    }

    public function multiRemoveHandle()
    {
        return $this->dispatch('curl_multi_remove_handle', func_get_args());
    }

    public function multiSelect()
    {
        return $this->dispatch('curl_multi_select', func_get_args());
    }

    public function multiSetopt()
    {
        return $this->dispatch('curl_multi_setopt', func_get_args());
    }

    public function multiStrerror()
    {
        return $this->dispatch('curl_multi_strerror', func_get_args());
    }

    public function pause()
    {
        return $this->dispatch('curl_pause', func_get_args());
    }

    public function reset()
    {
        return $this->dispatch('curl_reset', func_get_args());
    }

    public function setOptArray()
    {
        return $this->dispatch('curl_setopt_array', func_get_args());
    }

    public function setOpt()
    {
        return $this->dispatch('curl_setopt', func_get_args());
    }

    public function shareClose()
    {
        return $this->dispatch('curl_share_close', func_get_args());
    }

    public function shareInit()
    {
        return $this->dispatch('curl_share_init', func_get_args());
    }

    public function shareSetopt()
    {
        return $this->dispatch('curl_share_setopt', func_get_args());
    }

    public function strError()
    {
        return $this->dispatch('curl_strerror', func_get_args());
    }

    public function unescape()
    {
        return $this->dispatch('curl_unescape', func_get_args());
    }

    public function version()
    {
        return $this->dispatch('curl_version', func_get_args());
    }
}