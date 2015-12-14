<?php

namespace Enzyme\Parrot;

class Imap extends Parrot
{
    public function eightBit()
    {
        return $this->dispatch('imap_8bit', func_get_args());
    }

    public function alerts()
    {
        return $this->dispatch('imap_alerts', func_get_args());
    }

    public function append()
    {
        return $this->dispatch('imap_append', func_get_args());
    }

    public function base64()
    {
        return $this->dispatch('imap_base64', func_get_args());
    }

    public function binary()
    {
        return $this->dispatch('imap_binary', func_get_args());
    }

    public function body()
    {
        return $this->dispatch('imap_body', func_get_args());
    }

    public function bodyStruct()
    {
        return $this->dispatch('imap_bodystruct', func_get_args());
    }

    public function check()
    {
        return $this->dispatch('imap_check', func_get_args());
    }

    public function clearFlagFull()
    {
        return $this->dispatch('imap_clearflag_full', func_get_args());
    }

    public function close()
    {
        return $this->dispatch('imap_close', func_get_args());
    }

    public function create()
    {
        return $this->dispatch('imap_create', func_get_args());
    }

    public function createMailbox()
    {
        return $this->dispatch('imap_createmailbox', func_get_args());
    }

    public function delete()
    {
        return $this->dispatch('imap_delete', func_get_args());
    }

    public function deleteMailbox()
    {
        return $this->dispatch('imap_deletemailbox', func_get_args());
    }

    public function errors()
    {
        return $this->dispatch('imap_errors', func_get_args());
    }

    public function expunge()
    {
        return $this->dispatch('imap_expunge', func_get_args());
    }

    public function fetchOverview()
    {
        return $this->dispatch('imap_fetch_overview', func_get_args());
    }

    public function fetchBody()
    {
        return $this->dispatch('imap_fetchbody', func_get_args());
    }

    public function fetchHeader()
    {
        return $this->dispatch('imap_fetchheader', func_get_args());
    }

    public function fetchMime()
    {
        return $this->dispatch('imap_fetchmime', func_get_args());
    }

    public function fetchStructure()
    {
        return $this->dispatch('imap_fetchstructure', func_get_args());
    }

    public function fetchText()
    {
        return $this->dispatch('imap_fetchtext', func_get_args());
    }

    public function gc()
    {
        return $this->dispatch('imap_gc', func_get_args());
    }

    public function getQuota()
    {
        return $this->dispatch('imap_get_quota', func_get_args());
    }

    public function getQuotaRoot()
    {
        return $this->dispatch('imap_get_quotaroot', func_get_args());
    }

    public function getAcl()
    {
        return $this->dispatch('imap_getacl', func_get_args());
    }

    public function getMailBoxes()
    {
        return $this->dispatch('imap_getmailboxes', func_get_args());
    }

    public function getSubscribed()
    {
        return $this->dispatch('imap_getsubscribed', func_get_args());
    }

    public function header()
    {
        return $this->dispatch('imap_header', func_get_args());
    }

    public function headerInfo()
    {
        return $this->dispatch('imap_headerinfo', func_get_args());
    }

    public function headers()
    {
        return $this->dispatch('imap_headers', func_get_args());
    }

    public function lastError()
    {
        return $this->dispatch('imap_last_error', func_get_args());
    }

    public function list_()
    {
        return $this->dispatch('imap_list', func_get_args());
    }

    public function listMailbox()
    {
        return $this->dispatch('imap_listmailbox', func_get_args());
    }

    public function listScan()
    {
        return $this->dispatch('imap_listscan', func_get_args());
    }

    public function listSubscribed()
    {
        return $this->dispatch('imap_listsubscribed', func_get_args());
    }

    public function lsub()
    {
        return $this->dispatch('imap_lsub', func_get_args());
    }

    public function mailCompose()
    {
        return $this->dispatch('imap_mail_compose', func_get_args());
    }

    public function mailCopy()
    {
        return $this->dispatch('imap_mail_copy', func_get_args());
    }

    public function mailMove()
    {
        return $this->dispatch('imap_mail_move', func_get_args());
    }

    public function mail()
    {
        return $this->dispatch('imap_mail', func_get_args());
    }

    public function mailboxMsgInfo()
    {
        return $this->dispatch('imap_mailboxmsginfo', func_get_args());
    }

    public function mimeHeaderDecode()
    {
        return $this->dispatch('imap_mime_header_decode', func_get_args());
    }

    public function msgNo()
    {
        return $this->dispatch('imap_msgno', func_get_args());
    }

    public function numMsg()
    {
        return $this->dispatch('imap_num_msg', func_get_args());
    }

    public function numRecent()
    {
        return $this->dispatch('imap_num_recent', func_get_args());
    }

    public function open()
    {
        return $this->dispatch('imap_open', func_get_args());
    }

    public function ping()
    {
        return $this->dispatch('imap_ping', func_get_args());
    }

    public function qPrint()
    {
        return $this->dispatch('imap_qprint', func_get_args());
    }

    public function rename()
    {
        return $this->dispatch('imap_rename', func_get_args());
    }

    public function renameMailbox()
    {
        return $this->dispatch('imap_renamemailbox', func_get_args());
    }

    public function reopen()
    {
        return $this->dispatch('imap_reopen', func_get_args());
    }

    public function rfc822ParseAdrlist()
    {
        return $this->dispatch('imap_rfc822_parse_adrlist', func_get_args());
    }

    public function rfc822ParseHeaders()
    {
        return $this->dispatch('imap_rfc822_parse_headers', func_get_args());
    }

    public function rfc822WriteAddress()
    {
        return $this->dispatch('imap_rfc822_write_address', func_get_args());
    }

    public function saveBody()
    {
        return $this->dispatch('imap_savebody', func_get_args());
    }

    public function scan()
    {
        return $this->dispatch('imap_scan', func_get_args());
    }

    public function scanMailbox()
    {
        return $this->dispatch('imap_scanmailbox', func_get_args());
    }

    public function search()
    {
        return $this->dispatch('imap_search', func_get_args());
    }

    public function setQuota()
    {
        return $this->dispatch('imap_set_quota', func_get_args());
    }

    public function setAcl()
    {
        return $this->dispatch('imap_setacl', func_get_args());
    }

    public function setFlagFull()
    {
        return $this->dispatch('imap_setflag_full', func_get_args());
    }

    public function sort()
    {
        return $this->dispatch('imap_sort', func_get_args());
    }

    public function status()
    {
        return $this->dispatch('imap_status', func_get_args());
    }

    public function subscribe()
    {
        return $this->dispatch('imap_subscribe', func_get_args());
    }

    public function thread()
    {
        return $this->dispatch('imap_thread', func_get_args());
    }

    public function timeout()
    {
        return $this->dispatch('imap_timeout', func_get_args());
    }

    public function uid()
    {
        return $this->dispatch('imap_uid', func_get_args());
    }

    public function undelete()
    {
        return $this->dispatch('imap_undelete', func_get_args());
    }

    public function unsubscribe()
    {
        return $this->dispatch('imap_unsubscribe', func_get_args());
    }

    public function utf7Decode()
    {
        return $this->dispatch('imap_utf7_decode', func_get_args());
    }

    public function utf7Encode()
    {
        return $this->dispatch('imap_utf7_encode', func_get_args());
    }

    public function utf8()
    {
        return $this->dispatch('imap_utf8', func_get_args());
    }
}