<?php

namespace Enzyme\Parrot;

class MySql extends Parrot
{
    public function affectedRows()
    {
        return $this->dispatch('mysql_affected_rows', func_get_args());
    }

    public function clientEncoding()
    {
        return $this->dispatch('mysql_client_encoding', func_get_args());
    }

    public function close()
    {
        return $this->dispatch('mysql_close', func_get_args());
    }

    public function connect()
    {
        return $this->dispatch('mysql_connect', func_get_args());
    }

    public function createDb()
    {
        return $this->dispatch('mysql_create_db', func_get_args());
    }

    public function dataSeek()
    {
        return $this->dispatch('mysql_data_seek', func_get_args());
    }

    public function dbName()
    {
        return $this->dispatch('mysql_db_name', func_get_args());
    }

    public function dbQuery()
    {
        return $this->dispatch('mysql_db_query', func_get_args());
    }

    public function dropDb()
    {
        return $this->dispatch('mysql_drop_db', func_get_args());
    }

    public function errNo()
    {
        return $this->dispatch('mysql_errno', func_get_args());
    }

    public function error()
    {
        return $this->dispatch('mysql_error', func_get_args());
    }

    public function escapeString()
    {
        return $this->dispatch('mysql_escape_string', func_get_args());
    }

    public function fetchArray()
    {
        return $this->dispatch('mysql_fetch_array', func_get_args());
    }

    public function fetchAssoc()
    {
        return $this->dispatch('mysql_fetch_assoc', func_get_args());
    }

    public function fetchField()
    {
        return $this->dispatch('mysql_fetch_field', func_get_args());
    }

    public function fetchLengths()
    {
        return $this->dispatch('mysql_fetch_lengths', func_get_args());
    }

    public function fetchObject()
    {
        return $this->dispatch('mysql_fetch_object', func_get_args());
    }

    public function fetchRow()
    {
        return $this->dispatch('mysql_fetch_row', func_get_args());
    }

    public function fieldFlags()
    {
        return $this->dispatch('mysql_field_flags', func_get_args());
    }

    public function fieldLen()
    {
        return $this->dispatch('mysql_field_len', func_get_args());
    }

    public function fieldName()
    {
        return $this->dispatch('mysql_field_name', func_get_args());
    }

    public function fieldSeek()
    {
        return $this->dispatch('mysql_field_seek', func_get_args());
    }

    public function fieldTable()
    {
        return $this->dispatch('mysql_field_table', func_get_args());
    }

    public function fieldType()
    {
        return $this->dispatch('mysql_field_type', func_get_args());
    }

    public function freeResult()
    {
        return $this->dispatch('mysql_free_result', func_get_args());
    }

    public function getClientInfo()
    {
        return $this->dispatch('mysql_get_client_info', func_get_args());
    }

    public function getHostInfo()
    {
        return $this->dispatch('mysql_get_host_info', func_get_args());
    }

    public function getProtoInfo()
    {
        return $this->dispatch('mysql_get_proto_info', func_get_args());
    }

    public function getServerInfo()
    {
        return $this->dispatch('mysql_get_server_info', func_get_args());
    }

    public function info()
    {
        return $this->dispatch('mysql_info', func_get_args());
    }

    public function insertId()
    {
        return $this->dispatch('mysql_insert_id', func_get_args());
    }

    public function listDbs()
    {
        return $this->dispatch('mysql_list_dbs', func_get_args());
    }

    public function listFields()
    {
        return $this->dispatch('mysql_list_fields', func_get_args());
    }

    public function listProcesses()
    {
        return $this->dispatch('mysql_list_processes', func_get_args());
    }

    public function listTables()
    {
        return $this->dispatch('mysql_list_tables', func_get_args());
    }

    public function numFields()
    {
        return $this->dispatch('mysql_num_fields', func_get_args());
    }

    public function numRows()
    {
        return $this->dispatch('mysql_num_rows', func_get_args());
    }

    public function pConnect()
    {
        return $this->dispatch('mysql_pconnect', func_get_args());
    }

    public function ping()
    {
        return $this->dispatch('mysql_ping', func_get_args());
    }

    public function query()
    {
        return $this->dispatch('mysql_query', func_get_args());
    }

    public function realEscapeString()
    {
        return $this->dispatch('mysql_real_escape_string', func_get_args());
    }

    public function result()
    {
        return $this->dispatch('mysql_result', func_get_args());
    }

    public function selectDb()
    {
        return $this->dispatch('mysql_select_db', func_get_args());
    }

    public function setCharset()
    {
        return $this->dispatch('mysql_set_charset', func_get_args());
    }

    public function stat()
    {
        return $this->dispatch('mysql_stat', func_get_args());
    }

    public function tableName()
    {
        return $this->dispatch('mysql_tablename', func_get_args());
    }

    public function threadId()
    {
        return $this->dispatch('mysql_thread_id', func_get_args());
    }

    public function unbufferedQuery()
    {
        return $this->dispatch('mysql_unbuffered_query', func_get_args());
    }
}