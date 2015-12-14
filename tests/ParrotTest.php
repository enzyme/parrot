<?php

use Mockery as m;

class ParrotTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testFileFunctionNamesAreResolved()
    {
        $expected = 'file_get_contents';

        $file = m::mock('Enzyme\Parrot\File[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $file->getContents();
    }

    public function testCurlFunctionNamesAreResolved()
    {
        $expected = 'curl_init';

        $curl = m::mock('Enzyme\Parrot\Curl[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $curl->init();
    }

    public function testMysqlFunctionNamesAreResolved()
    {
        $expected = 'mysql_connect';

        $mysql = m::mock('Enzyme\Parrot\MySql[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $mysql->connect();
    }

    public function testSqliteFunctionNamesAreResolved()
    {
        $expected = 'sqlite_open';

        $sqlite = m::mock('Enzyme\Parrot\Sqlite[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $sqlite->open();
    }

    public function testFtpFunctionNamesAreResolved()
    {
        $expected = 'ftp_connect';

        $ftp = m::mock('Enzyme\Parrot\Ftp[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $ftp->connect();
    }

    public function testPostgreFunctionNamesAreResolved()
    {
        $expected = 'pg_connect';

        $postgre = m::mock('Enzyme\Parrot\PostgreSql[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $postgre->connect();
    }

    public function testGzFunctionNamesAreResolved()
    {
        $expected = 'gzopen';

        $gz = m::mock('Enzyme\Parrot\Gz[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $gz->open();
    }

    public function testImageFunctionNamesAreResolved()
    {
        $expected = 'imageflip';

        $image = m::mock('Enzyme\Parrot\Image[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $image->flip();
    }

    public function testImapFunctionNamesAreResolved()
    {
        $expected = 'imap_utf7_decode';

        $imap = m::mock('Enzyme\Parrot\Imap[dispatch]', function ($mock) use ($expected) {
            $mock->shouldReceive('dispatch')->withArgs([$expected, []])->times(1);
        });

        $imap->utf7Decode();
    }
}