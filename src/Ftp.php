<?php

namespace Enzyme\Parrot;

class Ftp extends Parrot
{
    public function alloc()
    {
        return $this->dispatch('ftp_alloc', func_get_args());
    }

    public function cdup()
    {
        return $this->dispatch('ftp_cdup', func_get_args());
    }

    public function chdir()
    {
        return $this->dispatch('ftp_chdir', func_get_args());
    }

    public function chmod()
    {
        return $this->dispatch('ftp_chmod', func_get_args());
    }

    public function close()
    {
        return $this->dispatch('ftp_close', func_get_args());
    }

    public function connect()
    {
        return $this->dispatch('ftp_connect', func_get_args());
    }

    public function delete()
    {
        return $this->dispatch('ftp_delete', func_get_args());
    }

    public function exec()
    {
        return $this->dispatch('ftp_exec', func_get_args());
    }

    public function fGet()
    {
        return $this->dispatch('ftp_fget', func_get_args());
    }

    public function fPut()
    {
        return $this->dispatch('ftp_fput', func_get_args());
    }

    public function getOption()
    {
        return $this->dispatch('ftp_get_option', func_get_args());
    }

    public function get()
    {
        return $this->dispatch('ftp_get', func_get_args());
    }

    public function login()
    {
        return $this->dispatch('ftp_login', func_get_args());
    }

    public function mdtm()
    {
        return $this->dispatch('ftp_mdtm', func_get_args());
    }

    public function mkdir()
    {
        return $this->dispatch('ftp_mkdir', func_get_args());
    }

    public function nbContinue()
    {
        return $this->dispatch('ftp_nb_continue', func_get_args());
    }

    public function nbFget()
    {
        return $this->dispatch('ftp_nb_fget', func_get_args());
    }

    public function nbFput()
    {
        return $this->dispatch('ftp_nb_fput', func_get_args());
    }

    public function nbGet()
    {
        return $this->dispatch('ftp_nb_get', func_get_args());
    }

    public function nbPut()
    {
        return $this->dispatch('ftp_nb_put', func_get_args());
    }

    public function nList()
    {
        return $this->dispatch('ftp_nlist', func_get_args());
    }

    public function pasv()
    {
        return $this->dispatch('ftp_pasv', func_get_args());
    }

    public function put()
    {
        return $this->dispatch('ftp_put', func_get_args());
    }

    public function pwd()
    {
        return $this->dispatch('ftp_pwd', func_get_args());
    }

    public function quit()
    {
        return $this->dispatch('ftp_quit', func_get_args());
    }

    public function raw()
    {
        return $this->dispatch('ftp_raw', func_get_args());
    }

    public function rawList()
    {
        return $this->dispatch('ftp_rawlist', func_get_args());
    }

    public function rename()
    {
        return $this->dispatch('ftp_rename', func_get_args());
    }

    public function rmdir()
    {
        return $this->dispatch('ftp_rmdir', func_get_args());
    }

    public function setOption()
    {
        return $this->dispatch('ftp_set_option', func_get_args());
    }

    public function site()
    {
        return $this->dispatch('ftp_site', func_get_args());
    }

    public function size()
    {
        return $this->dispatch('ftp_size', func_get_args());
    }

    public function sslConnect()
    {
        return $this->dispatch('ftp_ssl_connect', func_get_args());
    }

    public function sysType()
    {
        return $this->dispatch('ftp_systype', func_get_args());
    }
}