<img src="https://cloud.githubusercontent.com/assets/2805249/11770677/3c3de7f6-a250-11e5-8145-bcb9fb8c27cb.png" width="200">

[![Build Status](https://travis-ci.org/enzyme/parrot.svg?branch=master)](https://travis-ci.org/enzyme/parrot)

Mockable primitives and static functions for PHP.

# What is it?

Do you have a class method that calls a PHP native/built-in function like `file_get_contents`, which you then test by having to create a dummy file for it to ingest? Well, say hello to **Parrot**. Now you can inject the built-in File functions, along with many others as a dependency which you can mock out during tests.

# Installation

```bash
composer require enzyme/parrot
```

# Example

Let's take a look at what used to happen:

#### Using the built in method.

```php
class Foo
{
    public function openConfig($file) 
    {
        $contents = file_get_contents($file);
        return $contents;
    }
}
```

Testing...

```php
public function FooTest
{
    $file = __DIR__ . '/actual_file.txt';
    $expected = 'Contents of actual_file.txt';

    $foo = new Foo;
    $actual = $foo->openConfig($file);
    
    $this->assertEquals($actual, $expected);
}
```

The problem with the above is, `actual_file.txt` needs to reside in your test folder, get shipped with your tests, have the correct permission etc... it's a hassle.

#### Now using Parrot.

```php
use Enzyme\Parrot\File;

class Foo
{
    protected $fileDispatch;

    public function __construct(File $fileDispatch)
    {
        $this->fileDispatch = $fileDispatch;
    }

    public function openConfig($file) 
    {
        $contents = $this->fileDispatch->getContents($file);
        return $contents;
    }
}
```

Testing...

```php
public function FooTest
{
    $file = __DIR__ . '/fake_file.txt';
    $expected = 'Contents of fake_file.txt';

    $file = m::mock('Enzyme\Parrot\File[getContents]', function ($mock) use ($expected, $file) {
        $mock->shouldReceive('getContents')->withArgs([$file, []])->times(1)->andReturn($expected);
    });
    

    $foo = new Foo;
    $actual = $foo->openConfig($file);
    
    $this->assertEquals($actual, $expected);
}
```

Now we just fake the file and it's contents, sweet!!!

# Sugar

You may have noticed in the above example that the Parrot version of `file_get_contents` was simply `getContents()`. 

With all the Parrot'd wrappers around PHP's functions, we leave off the prefix. Who wants to repeat themselves?

#### The function name rules.

1. If the original function name starts with a prefix like `file_`, `f`, `curl_`, `imap_`, `mysql_` etc, you simply leave them off when using the equivalent class wrapper.

2. If the original name has an underscore in it, replace it with camelCase. So for example `file_get_contents` becomes `getContents` and `mysql_affected_rows` becomes `affectedRows`.

3. If the original name has a string of words, they are converted to camelCase too. For example `imap_createmailbox` becomes `createMailbox`.

4. If the original function, following the rules above now starts with a number, replace then number with it's spelt equivalent. For example `imap_8bit` becomes `eightBit`.

# Wrappers

The follow wrappers are currently available:

Name | Prefixes removed
-----|-----------------
Curl | curl_
File | file, file_, f
Ftp  | ftp_
Gz   | gz
Image | image
Imap | imap_
MySql | mysql_
PostgreSql | pg_
Sqlite | sqlite_