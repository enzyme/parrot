<?php

namespace Enzyme\Parrot;

class PostgreSql extends Parrot
{
    public function affectedRows()
    {
        return $this->dispatch('pg_affected_rows', func_get_args());
    }

    public function cancelQuery()
    {
        return $this->dispatch('pg_cancel_query', func_get_args());
    }

    public function clientEncoding()
    {
        return $this->dispatch('pg_client_encoding', func_get_args());
    }

    public function close()
    {
        return $this->dispatch('pg_close', func_get_args());
    }

    public function connectPoll()
    {
        return $this->dispatch('pg_connect_poll', func_get_args());
    }

    public function connect()
    {
        return $this->dispatch('pg_connect', func_get_args());
    }

    public function connectionBusy()
    {
        return $this->dispatch('pg_connection_busy', func_get_args());
    }

    public function connectionReset()
    {
        return $this->dispatch('pg_connection_reset', func_get_args());
    }

    public function connectionStatus()
    {
        return $this->dispatch('pg_connection_status', func_get_args());
    }

    public function consumeInput()
    {
        return $this->dispatch('pg_consume_input', func_get_args());
    }

    public function convert()
    {
        return $this->dispatch('pg_convert', func_get_args());
    }

    public function copyFrom()
    {
        return $this->dispatch('pg_copy_from', func_get_args());
    }

    public function copyTo()
    {
        return $this->dispatch('pg_copy_to', func_get_args());
    }

    public function dbName()
    {
        return $this->dispatch('pg_dbname', func_get_args());
    }

    public function delete()
    {
        return $this->dispatch('pg_delete', func_get_args());
    }

    public function endCopy()
    {
        return $this->dispatch('pg_end_copy', func_get_args());
    }

    public function escapeBytea()
    {
        return $this->dispatch('pg_escape_bytea', func_get_args());
    }

    public function escapeIdentifier()
    {
        return $this->dispatch('pg_escape_identifier', func_get_args());
    }

    public function escapeLiteral()
    {
        return $this->dispatch('pg_escape_literal', func_get_args());
    }

    public function escapeString()
    {
        return $this->dispatch('pg_escape_string', func_get_args());
    }

    public function execute()
    {
        return $this->dispatch('pg_execute', func_get_args());
    }

    public function fetchAllColumns()
    {
        return $this->dispatch('pg_fetch_all_columns', func_get_args());
    }

    public function fetchAll()
    {
        return $this->dispatch('pg_fetch_all', func_get_args());
    }

    public function fetchArray()
    {
        return $this->dispatch('pg_fetch_array', func_get_args());
    }

    public function fetchAssoc()
    {
        return $this->dispatch('pg_fetch_assoc', func_get_args());
    }

    public function fetchObject()
    {
        return $this->dispatch('pg_fetch_object', func_get_args());
    }

    public function fetchResult()
    {
        return $this->dispatch('pg_fetch_result', func_get_args());
    }

    public function fetchRow()
    {
        return $this->dispatch('pg_fetch_row', func_get_args());
    }

    public function fieldIsNull()
    {
        return $this->dispatch('pg_field_is_null', func_get_args());
    }

    public function fieldName()
    {
        return $this->dispatch('pg_field_name', func_get_args());
    }

    public function fieldNum()
    {
        return $this->dispatch('pg_field_num', func_get_args());
    }

    public function fieldPrtlen()
    {
        return $this->dispatch('pg_field_prtlen', func_get_args());
    }

    public function fieldSize()
    {
        return $this->dispatch('pg_field_size', func_get_args());
    }

    public function fieldTable()
    {
        return $this->dispatch('pg_field_table', func_get_args());
    }

    public function fieldTypeOid()
    {
        return $this->dispatch('pg_field_type_oid', func_get_args());
    }

    public function fieldType()
    {
        return $this->dispatch('pg_field_type', func_get_args());
    }

    public function flush()
    {
        return $this->dispatch('pg_flush', func_get_args());
    }

    public function freeResult()
    {
        return $this->dispatch('pg_free_result', func_get_args());
    }

    public function getNotify()
    {
        return $this->dispatch('pg_get_notify', func_get_args());
    }

    public function getPid()
    {
        return $this->dispatch('pg_get_pid', func_get_args());
    }

    public function getResult()
    {
        return $this->dispatch('pg_get_result', func_get_args());
    }

    public function host()
    {
        return $this->dispatch('pg_host', func_get_args());
    }

    public function insert()
    {
        return $this->dispatch('pg_insert', func_get_args());
    }

    public function lastError()
    {
        return $this->dispatch('pg_last_error', func_get_args());
    }

    public function lastNotice()
    {
        return $this->dispatch('pg_last_notice', func_get_args());
    }

    public function lastOid()
    {
        return $this->dispatch('pg_last_oid', func_get_args());
    }

    public function loClose()
    {
        return $this->dispatch('pg_lo_close', func_get_args());
    }

    public function loCreate()
    {
        return $this->dispatch('pg_lo_create', func_get_args());
    }

    public function loExport()
    {
        return $this->dispatch('pg_lo_export', func_get_args());
    }

    public function loImport()
    {
        return $this->dispatch('pg_lo_import', func_get_args());
    }

    public function loOpen()
    {
        return $this->dispatch('pg_lo_open', func_get_args());
    }

    public function loReadAll()
    {
        return $this->dispatch('pg_lo_read_all', func_get_args());
    }

    public function loRead()
    {
        return $this->dispatch('pg_lo_read', func_get_args());
    }

    public function loSeek()
    {
        return $this->dispatch('pg_lo_seek', func_get_args());
    }

    public function loTell()
    {
        return $this->dispatch('pg_lo_tell', func_get_args());
    }

    public function loTruncate()
    {
        return $this->dispatch('pg_lo_truncate', func_get_args());
    }

    public function loUnlink()
    {
        return $this->dispatch('pg_lo_unlink', func_get_args());
    }

    public function loWrite()
    {
        return $this->dispatch('pg_lo_write', func_get_args());
    }

    public function metaData()
    {
        return $this->dispatch('pg_meta_data', func_get_args());
    }

    public function numFields()
    {
        return $this->dispatch('pg_num_fields', func_get_args());
    }

    public function numRows()
    {
        return $this->dispatch('pg_num_rows', func_get_args());
    }

    public function options()
    {
        return $this->dispatch('pg_options', func_get_args());
    }

    public function parameterStatus()
    {
        return $this->dispatch('pg_parameter_status', func_get_args());
    }

    public function pConnect()
    {
        return $this->dispatch('pg_pconnect', func_get_args());
    }

    public function ping()
    {
        return $this->dispatch('pg_ping', func_get_args());
    }

    public function port()
    {
        return $this->dispatch('pg_port', func_get_args());
    }

    public function prepare()
    {
        return $this->dispatch('pg_prepare', func_get_args());
    }

    public function putLine()
    {
        return $this->dispatch('pg_put_line', func_get_args());
    }

    public function queryParams()
    {
        return $this->dispatch('pg_query_params', func_get_args());
    }

    public function query()
    {
        return $this->dispatch('pg_query', func_get_args());
    }

    public function resultErrorField()
    {
        return $this->dispatch('pg_result_error_field', func_get_args());
    }

    public function resultError()
    {
        return $this->dispatch('pg_result_error', func_get_args());
    }

    public function resultSeek()
    {
        return $this->dispatch('pg_result_seek', func_get_args());
    }

    public function resultStatus()
    {
        return $this->dispatch('pg_result_status', func_get_args());
    }

    public function select()
    {
        return $this->dispatch('pg_select', func_get_args());
    }

    public function sendExecute()
    {
        return $this->dispatch('pg_send_execute', func_get_args());
    }

    public function sendPrepare()
    {
        return $this->dispatch('pg_send_prepare', func_get_args());
    }

    public function sendQueryParams()
    {
        return $this->dispatch('pg_send_query_params', func_get_args());
    }

    public function sendQuery()
    {
        return $this->dispatch('pg_send_query', func_get_args());
    }

    public function setClientEncoding()
    {
        return $this->dispatch('pg_set_client_encoding', func_get_args());
    }

    public function setErrorVerbosity()
    {
        return $this->dispatch('pg_set_error_verbosity', func_get_args());
    }

    public function socket()
    {
        return $this->dispatch('pg_socket', func_get_args());
    }

    public function trace()
    {
        return $this->dispatch('pg_trace', func_get_args());
    }

    public function transactionStatus()
    {
        return $this->dispatch('pg_transaction_status', func_get_args());
    }

    public function tty()
    {
        return $this->dispatch('pg_tty', func_get_args());
    }

    public function unescapeBytea()
    {
        return $this->dispatch('pg_unescape_bytea', func_get_args());
    }

    public function untrace()
    {
        return $this->dispatch('pg_untrace', func_get_args());
    }

    public function update()
    {
        return $this->dispatch('pg_update', func_get_args());
    }

    public function version()
    {
        return $this->dispatch('pg_version', func_get_args());
    }
}