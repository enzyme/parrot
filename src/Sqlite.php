<?php

namespace Enzyme\Parrot;

class Sqlite extends Parrot
{
    public function arrayQuery()
    {
        return $this->dispatch('sqlite_array_query', func_get_args());
    }

    public function busyTimeout()
    {
        return $this->dispatch('sqlite_busy_timeout', func_get_args());
    }

    public function changes()
    {
        return $this->dispatch('sqlite_changes', func_get_args());
    }

    public function close()
    {
        return $this->dispatch('sqlite_close', func_get_args());
    }

    public function column()
    {
        return $this->dispatch('sqlite_column', func_get_args());
    }

    public function createAggregate()
    {
        return $this->dispatch('sqlite_create_aggregate', func_get_args());
    }

    public function createFunction()
    {
        return $this->dispatch('sqlite_create_function', func_get_args());
    }

    public function current()
    {
        return $this->dispatch('sqlite_current', func_get_args());
    }

    public function errorString()
    {
        return $this->dispatch('sqlite_error_string', func_get_args());
    }

    public function escapeString()
    {
        return $this->dispatch('sqlite_escape_string', func_get_args());
    }

    public function exec()
    {
        return $this->dispatch('sqlite_exec', func_get_args());
    }

    public function factory()
    {
        return $this->dispatch('sqlite_factory', func_get_args());
    }

    public function fetchAll()
    {
        return $this->dispatch('sqlite_fetch_all', func_get_args());
    }

    public function fetchArray()
    {
        return $this->dispatch('sqlite_fetch_array', func_get_args());
    }

    public function fetchColumnTypes()
    {
        return $this->dispatch('sqlite_fetch_column_types', func_get_args());
    }

    public function fetchObject()
    {
        return $this->dispatch('sqlite_fetch_object', func_get_args());
    }

    public function fetchSingle()
    {
        return $this->dispatch('sqlite_fetch_single', func_get_args());
    }

    public function fetchString()
    {
        return $this->dispatch('sqlite_fetch_string', func_get_args());
    }

    public function fieldName()
    {
        return $this->dispatch('sqlite_field_name', func_get_args());
    }

    public function hasMore()
    {
        return $this->dispatch('sqlite_has_more', func_get_args());
    }

    public function hasPrev()
    {
        return $this->dispatch('sqlite_has_prev', func_get_args());
    }

    public function key()
    {
        return $this->dispatch('sqlite_key', func_get_args());
    }

    public function lastError()
    {
        return $this->dispatch('sqlite_last_error', func_get_args());
    }

    public function lastInsertRowid()
    {
        return $this->dispatch('sqlite_last_insert_rowid', func_get_args());
    }

    public function libEncoding()
    {
        return $this->dispatch('sqlite_libencoding', func_get_args());
    }

    public function libVersion()
    {
        return $this->dispatch('sqlite_libversion', func_get_args());
    }

    public function next()
    {
        return $this->dispatch('sqlite_next', func_get_args());
    }

    public function numFields()
    {
        return $this->dispatch('sqlite_num_fields', func_get_args());
    }

    public function numRows()
    {
        return $this->dispatch('sqlite_num_rows', func_get_args());
    }

    public function open()
    {
        return $this->dispatch('sqlite_open', func_get_args());
    }

    public function pOpen()
    {
        return $this->dispatch('sqlite_popen', func_get_args());
    }

    public function prev()
    {
        return $this->dispatch('sqlite_prev', func_get_args());
    }

    public function query()
    {
        return $this->dispatch('sqlite_query', func_get_args());
    }

    public function rewind()
    {
        return $this->dispatch('sqlite_rewind', func_get_args());
    }

    public function seek()
    {
        return $this->dispatch('sqlite_seek', func_get_args());
    }

    public function singleQuery()
    {
        return $this->dispatch('sqlite_single_query', func_get_args());
    }

    public function udfDecodeBinary()
    {
        return $this->dispatch('sqlite_udf_decode_binary', func_get_args());
    }

    public function udfEncodeBinary()
    {
        return $this->dispatch('sqlite_udf_encode_binary', func_get_args());
    }

    public function unbufferedQuery()
    {
        return $this->dispatch('sqlite_unbuffered_query', func_get_args());
    }

    public function valid()
    {
        return $this->dispatch('sqlite_valid', func_get_args());
    }
}