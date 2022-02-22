<?php

namespace EasyFeishu\Tests;

use EasyFeishu\Foundation\Application;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /** @var Application */
    private static $_instance;

    public function getInstance(): Application
    {
        self::$_instance = new Application([
            'debug'               => getenv('APP_DEBUG', false),
            'app_id'              => getenv('APP_ID', ''),
            'app_secret'          => getenv('APP_SECRET'),
            'encrypt_key'         => getenv('ENCRYPT_KEY'),
            'verification_token'  => getenv('VERIFICATION_TOKEN'),
            'log'                 => [
                'file'  => __DIR__.'/../logs/'.date('Y-m-d').'.log',
                'level' => 'debug',
            ],
            'guzzle' => [
                'timeout' => 100
            ]
        ]);

        return self::$_instance;
    }
}
