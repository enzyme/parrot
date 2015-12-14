<?php

namespace Enzyme\Parrot;

class File extends Parrot
{
    public function basename()
    {
        return $this->dispatch('basename', func_get_args());
    }

    public function chgrp()
    {
        return $this->dispatch('chgrp', func_get_args());
    }

    public function chmod()
    {
        return $this->dispatch('chmod', func_get_args());
    }

    public function chown()
    {
        return $this->dispatch('chown', func_get_args());
    }

    public function clearStatCache()
    {
        return $this->dispatch('clearstatcache', func_get_args());
    }

    public function copy()
    {
        return $this->dispatch('copy', func_get_args());
    }

    public function delete()
    {
        return $this->dispatch('delete', func_get_args());
    }

    public function dirName()
    {
        return $this->dispatch('dirname', func_get_args());
    }

    public function diskFreeSpace()
    {
        return $this->dispatch('disk_free_space', func_get_args());
    }

    public function diskTotalSpace()
    {
        return $this->dispatch('disk_total_space', func_get_args());
    }

    public function close()
    {
        return $this->dispatch('fclose', func_get_args());
    }

    public function eof()
    {
        return $this->dispatch('feof', func_get_args());
    }

    public function flush()
    {
        return $this->dispatch('fflush', func_get_args());
    }

    public function getC()
    {
        return $this->dispatch('fgetc', func_get_args());
    }

    public function getCsv()
    {
        return $this->dispatch('fgetcsv', func_get_args());
    }

    public function getS()
    {
        return $this->dispatch('fgets', func_get_args());
    }

    public function getSs()
    {
        return $this->dispatch('fgetss', func_get_args());
    }

    public function exists()
    {
        return $this->dispatch('file_exists', func_get_args());
    }

    public function getContents()
    {
        return $this->dispatch('file_get_contents', func_get_args());
    }

    public function putContents()
    {
        return $this->dispatch('file_put_contents', func_get_args());
    }

    public function aTime()
    {
        return $this->dispatch('fileatime', func_get_args());
    }

    public function cTime()
    {
        return $this->dispatch('filectime', func_get_args());
    }

    public function group()
    {
        return $this->dispatch('filegroup', func_get_args());
    }

    public function inode()
    {
        return $this->dispatch('fileinode', func_get_args());
    }

    public function mTime()
    {
        return $this->dispatch('filemtime', func_get_args());
    }

    public function owner()
    {
        return $this->dispatch('fileowner', func_get_args());
    }

    public function perms()
    {
        return $this->dispatch('fileperms', func_get_args());
    }

    public function size()
    {
        return $this->dispatch('filesize', func_get_args());
    }

    public function type()
    {
        return $this->dispatch('filetype', func_get_args());
    }

    public function lock()
    {
        return $this->dispatch('flock', func_get_args());
    }

    public function nMatch()
    {
        return $this->dispatch('fnmatch', func_get_args());
    }

    public function open()
    {
        return $this->dispatch('fopen', func_get_args());
    }

    public function passThru()
    {
        return $this->dispatch('fpassthru', func_get_args());
    }

    public function putCsv()
    {
        return $this->dispatch('fputcsv', func_get_args());
    }

    public function puts()
    {
        return $this->dispatch('fputs', func_get_args());
    }

    public function read()
    {
        return $this->dispatch('fread', func_get_args());
    }

    public function scanf()
    {
        return $this->dispatch('fscanf', func_get_args());
    }

    public function seek()
    {
        return $this->dispatch('fseek', func_get_args());
    }

    public function stat()
    {
        return $this->dispatch('fstat', func_get_args());
    }

    public function tell()
    {
        return $this->dispatch('ftell', func_get_args());
    }

    public function truncate()
    {
        return $this->dispatch('ftruncate', func_get_args());
    }

    public function write()
    {
        return $this->dispatch('fwrite', func_get_args());
    }

    public function glob()
    {
        return $this->dispatch('glob', func_get_args());
    }

    public function isDir()
    {
        return $this->dispatch('is_dir', func_get_args());
    }

    public function isExecutable()
    {
        return $this->dispatch('is_executable', func_get_args());
    }

    public function isFile()
    {
        return $this->dispatch('is_file', func_get_args());
    }

    public function isLink()
    {
        return $this->dispatch('is_link', func_get_args());
    }

    public function isReadable()
    {
        return $this->dispatch('is_readable', func_get_args());
    }

    public function isUploadedFile()
    {
        return $this->dispatch('is_uploaded_file', func_get_args());
    }

    public function isWritable()
    {
        return $this->dispatch('is_writable', func_get_args());
    }

    public function isWriteable()
    {
        return $this->dispatch('is_writeable', func_get_args());
    }

    public function lChgrp()
    {
        return $this->dispatch('lchgrp', func_get_args());
    }

    public function lChown()
    {
        return $this->dispatch('lchown', func_get_args());
    }

    public function link()
    {
        return $this->dispatch('link', func_get_args());
    }

    public function linkInfo()
    {
        return $this->dispatch('linkinfo', func_get_args());
    }

    public function lStat()
    {
        return $this->dispatch('lstat', func_get_args());
    }

    public function mkdir()
    {
        return $this->dispatch('mkdir', func_get_args());
    }

    public function moveUploadedFile()
    {
        return $this->dispatch('move_uploaded_file', func_get_args());
    }

    public function parseIniFile()
    {
        return $this->dispatch('parse_ini_file', func_get_args());
    }

    public function parseIniString()
    {
        return $this->dispatch('parse_ini_string', func_get_args());
    }

    public function pathInfo()
    {
        return $this->dispatch('pathinfo', func_get_args());
    }

    public function pClose()
    {
        return $this->dispatch('pclose', func_get_args());
    }

    public function pOpen()
    {
        return $this->dispatch('popen', func_get_args());
    }

    public function readFile()
    {
        return $this->dispatch('readfile', func_get_args());
    }

    public function readLink()
    {
        return $this->dispatch('readlink', func_get_args());
    }

    public function realpathCacheGet()
    {
        return $this->dispatch('realpath_cache_get', func_get_args());
    }

    public function realpathCacheSize()
    {
        return $this->dispatch('realpath_cache_size', func_get_args());
    }

    public function realpath()
    {
        return $this->dispatch('realpath', func_get_args());
    }

    public function rename()
    {
        return $this->dispatch('rename', func_get_args());
    }

    public function rewind()
    {
        return $this->dispatch('rewind', func_get_args());
    }

    public function rmdir()
    {
        return $this->dispatch('rmdir', func_get_args());
    }

    public function setFileBuffer()
    {
        return $this->dispatch('set_file_buffer', func_get_args());
    }

    public function fStat()
    {
        return $this->dispatch('fstat', func_get_args());
    }

    public function symlink()
    {
        return $this->dispatch('symlink', func_get_args());
    }

    public function tempNam()
    {
        return $this->dispatch('tempnam', func_get_args());
    }

    public function tmpFile()
    {
        return $this->dispatch('tmpfile', func_get_args());
    }

    public function touch()
    {
        return $this->dispatch('touch', func_get_args());
    }

    public function umask()
    {
        return $this->dispatch('umask', func_get_args());
    }

    public function unlink()
    {
        return $this->dispatch('unlink', func_get_args());
    }
}