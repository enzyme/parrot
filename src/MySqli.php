<?php

namespace Enzyme\Parrot;

class MySqli extends Parrot
{
    public function affectedRows()
    {
        return $this->dispatch('mysqli_affected_rows', func_get_args());
    }

    public function autoCommit()
    {
        return $this->dispatch('mysqli_autocommit', func_get_args());
    }

    public function beginTransaction()
    {
        return $this->dispatch('mysqli_begin_transaction', func_get_args());
    }

    public function changeUser()
    {
        return $this->dispatch('mysqli_change_user', func_get_args());
    }

    public function characterSetName()
    {
        return $this->dispatch('mysqli_character_set_name', func_get_args());
    }

    public function close()
    {
        return $this->dispatch('mysqli_close', func_get_args());
    }

    public function commit()
    {
        return $this->dispatch('mysqli_commit', func_get_args());
    }

    public function connectErrno()
    {
        return $this->dispatch('mysqli_connect_errno', func_get_args());
    }

    public function connectError()
    {
        return $this->dispatch('mysqli_connect_error', func_get_args());
    }

    public function connect()
    {
        return $this->dispatch('mysqli_connect', func_get_args());
    }

    public function errNo()
    {
        return $this->dispatch('mysqli_errno', func_get_args());
    }

    public function errorList()
    {
        return $this->dispatch('mysqli_error_list', func_get_args());
    }

    public function error()
    {
        return $this->dispatch('mysqli_error', func_get_args());
    }

    public function fieldCount()
    {
        return $this->dispatch('mysqli_field_count', func_get_args());
    }

    public function getCharset()
    {
        return $this->dispatch('mysqli_get_charset', func_get_args());
    }

    public function clientInfo()
    {
        return $this->dispatch('mysqli_client_info', func_get_args());
    }

    public function clientVersion()
    {
        return $this->dispatch('mysqli_client_version', func_get_args());
    }

    public function getConnectionStats()
    {
        return $this->dispatch('mysqli_get_connection_stats', func_get_args());
    }

    public function hostInfo()
    {
        return $this->dispatch('mysqli_host_info', func_get_args());
    }

    public function protocolVersion()
    {
        return $this->dispatch('mysqli_protocol_version', func_get_args());
    }

    public function serverInfo()
    {
        return $this->dispatch('mysqli_server_info', func_get_args());
    }

    public function serverVersion()
    {
        return $this->dispatch('mysqli_server_version', func_get_args());
    }

    public function getWarnings()
    {
        return $this->dispatch('mysqli_get_warnings', func_get_args());
    }

    public function info()
    {
        return $this->dispatch('mysqli_info', func_get_args());
    }

    public function init()
    {
        return $this->dispatch('mysqli_init', func_get_args());
    }

    public function insertID()
    {
        return $this->dispatch('mysqli_insert_id', func_get_args());
    }

    public function kill()
    {
        return $this->dispatch('mysqli_kill', func_get_args());
    }

    public function moreResults()
    {
        return $this->dispatch('mysqli_more_results', func_get_args());
    }

    public function multiQuery()
    {
        return $this->dispatch('mysqli_multi_query', func_get_args());
    }

    public function nextResult()
    {
        return $this->dispatch('mysqli_next_result', func_get_args());
    }

    public function options()
    {
        return $this->dispatch('mysqli_options', func_get_args());
    }

    public function ping()
    {
        return $this->dispatch('mysqli_ping', func_get_args());
    }

    public function poll()
    {
        return $this->dispatch('mysqli_poll', func_get_args());
    }

    public function prepare()
    {
        return $this->dispatch('mysqli_prepare', func_get_args());
    }

    public function query()
    {
        return $this->dispatch('mysqli_query', func_get_args());
    }

    public function realConnect()
    {
        return $this->dispatch('mysqli_real_connect', func_get_args());
    }

    public function realEscapeString()
    {
        return $this->dispatch('mysqli_real_escape_string', func_get_args());
    }

    public function realQuery()
    {
        return $this->dispatch('mysqli_real_query', func_get_args());
    }

    public function reapAsyncQuery()
    {
        return $this->dispatch('mysqli_reap_async_query', func_get_args());
    }

    public function refresh()
    {
        return $this->dispatch('mysqli_refresh', func_get_args());
    }

    public function relaseSavepoint()
    {
        return $this->dispatch('mysqli_release_savepoint', func_get_args());
    }

    public function rollback()
    {
        return $this->dispatch('mysqli_rollback', func_get_args());
    }

    public function rplQueryType()
    {
        return $this->dispatch('mysqli_rpl_query_type', func_get_args());
    }

    public function savepoint()
    {
        return $this->dispatch('mysqli_savepoint', func_get_args());
    }

    public function selectDB()
    {
        return $this->dispatch('mysqli_select_db', func_get_args());
    }

    public function sendQuery()
    {
        return $this->dispatch('mysqli_sendQuery', func_get_args());
    }

    public function setCharset()
    {
        return $this->dispatch('mysqli_set_charset', func_get_args());
    }

    public function setLocalInfileDefault()
    {
        return $this->dispatch('mysqli_set_local_infile_default', func_get_args());
    }

    public function setLocalInfileHandler()
    {
        return $this->dispatch('mysqli_set_local_infile_handler', func_get_args());
    }

    public function sqlState()
    {
        return $this->dispatch('mysqli_sql_state', func_get_args());
    }

    public function sslSet()
    {
        return $this->dispatch('mysqli_ssl_set', func_get_args());
    }

    public function stat()
    {
        return $this->dispatch('mysqli_stat', func_get_args());
    }

    public function stmtInit()
    {
        return $this->dispatch('mysqli_stmt_init', func_get_args());
    }

    public function storeResult()
    {
        return $this->dispatch('mysqli_store_result', func_get_args());
    }

    public function threadID()
    {
        return $this->dispatch('mysqli_thread_id', func_get_args());
    }

    public function threadSafe()
    {
        return $this->dispatch('mysqli_thread_safe', func_get_args());
    }

    public function useResult()
    {
        return $this->dispatch('mysqli_use_result', func_get_args());
    }

    public function warningCount()
    {
        return $this->dispatch('mysqli_warning_count', func_get_args());
    }

    public function stmtAffectedRows()
    {
        return $this->dispatch('mysqli_stmt_affected_rows', func_get_args());
    }

    public function stmtAttrGet()
    {
        return $this->dispatch('mysqli_stmt_attr_get', func_get_args());
    }

    public function stmtAttrSet()
    {
        return $this->dispatch('mysqli_stmt_attr_set', func_get_args());
    }

    public function stmtBindParam()
    {
        return $this->dispatch('mysqli_stmt_bind_param', func_get_args());
    }

    public function stmtBindResult()
    {
        return $this->dispatch('mysqli_stmt_bind_result', func_get_args());
    }

    public function stmtClose()
    {
        return $this->dispatch('mysqli_stmt_close', func_get_args());
    }

    public function stmtDataSeek()
    {
        return $this->dispatch('mysqli_stmt_data_seek', func_get_args());
    }

    public function stmtErrNo()
    {
        return $this->dispatch('mysqli_stmt_errno', func_get_args());
    }

    public function stmtErrorList()
    {
        return $this->dispatch('mysqli_stmt_error_list', func_get_args());
    }

    public function stmtError()
    {
        return $this->dispatch('mysqli_stmt_error', func_get_args());
    }

    public function stmtExecute()
    {
        return $this->dispatch('mysqli_stmt_execute', func_get_args());
    }

    public function stmtFetch()
    {
        return $this->dispatch('mysqli_stmt_fetch', func_get_args());
    }

    public function stmtFieldCount()
    {
        return $this->dispatch('mysqli_stmt_field_count', func_get_args());
    }

    public function stmtFreeResult()
    {
        return $this->dispatch('mysqli_stmt_free_result', func_get_args());
    }

    public function stmtGetResult()
    {
        return $this->dispatch('mysqli_stmt_get_result', func_get_args());
    }

    public function stmtGetWarnings()
    {
        return $this->dispatch('mysqli_stmt_get_warnings', func_get_args());
    }

    public function stmtInsertID()
    {
        return $this->dispatch('mysqli_stmt_insert_id', func_get_args());
    }

    public function stmtMoreResults()
    {
        return $this->dispatch('mysqli_stmt_more_results', func_get_args());
    }

    public function stmtNextResult()
    {
        return $this->dispatch('mysqli_stmt_next_result', func_get_args());
    }

    public function stmtNumRows()
    {
        return $this->dispatch('mysqli_stmt_num_rows', func_get_args());
    }

    public function stmtParamCount()
    {
        return $this->dispatch('mysqli_stmt_param_count', func_get_args());
    }

    public function stmtPrepare()
    {
        return $this->dispatch('mysqli_stmt_prepare', func_get_args());
    }

    public function stmtReset()
    {
        return $this->dispatch('mysqli_stmt_reset', func_get_args());
    }

    public function stmtResultMetadata()
    {
        return $this->dispatch('mysqli_stmt_result_metadata', func_get_args());
    }

    public function stmtSendLongData()
    {
        return $this->dispatch('mysqli_stmt_send_long_data', func_get_args());
    }

    public function stmtSqlState()
    {
        return $this->dispatch('mysqli_stmt_sql_state', func_get_args());
    }

    public function stmtStoreResult()
    {
        return $this->dispatch('mysqli_stmt_store_result', func_get_args());
    }

    public function fieldTell()
    {
        return $this->dispatch('mysqli_field_tell', func_get_args());
    }

    public function dataSeek()
    {
        return $this->dispatch('mysqli_data_seek', func_get_args());
    }

    public function fetchAll()
    {
        return $this->dispatch('mysqli_fetch_all', func_get_args());
    }

    public function fetchArray()
    {
        return $this->dispatch('mysqli_fetch_array', func_get_args());
    }

    public function fetchAssoc()
    {
        return $this->dispatch('mysqli_fetch_assoc', func_get_args());
    }

    public function fetchFieldDirect()
    {
        return $this->dispatch('mysqli_fetch_field_direct', func_get_args());
    }

    public function fetchField()
    {
        return $this->dispatch('mysqli_fetch_field', func_get_args());
    }

    public function fetchFields()
    {
        return $this->dispatch('mysqli_fetch_fields', func_get_args());
    }

    public function fetchObject()
    {
        return $this->dispatch('mysqli_fetch_object', func_get_args());
    }

    public function fetchFieldRow()
    {
        return $this->dispatch('mysqli_fetch_row', func_get_args());
    }

    public function numFields()
    {
        return $this->dispatch('mysqli_num_fields', func_get_args());
    }

    public function fieldSeek()
    {
        return $this->dispatch('mysqli_field_seek', func_get_args());
    }

    public function freeResult()
    {
        return $this->dispatch('mysqli_free_result', func_get_args());
    }

    public function fetchLengths()
    {
        return $this->dispatch('mysqli_fetch_lengths', func_get_args());
    }

    public function numRows()
    {
        return $this->dispatch('mysqli_num_rows', func_get_args());
    }
}
