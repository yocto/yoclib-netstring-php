<?php
namespace YOCLIB\Netstring\Tests;

use PHPUnit\Framework\TestCase;

use YOCLIB\Netstring\Netstring;

class NetstringTest extends TestCase{

    public function testDecodingNetstring(){
        self::assertEquals('',Netstring::decode('0:,'));
        self::assertEquals('a',Netstring::decode('1:a,'));
        self::assertEquals('ab',Netstring::decode('2:ab,'));
        self::assertEquals('abc',Netstring::decode('3:abc,'));
        self::assertEquals('abcd',Netstring::decode('4:abcd,'));
    }

    public function testEncodingNetstring(){
        self::assertEquals('0:,',Netstring::encode(''));
        self::assertEquals('1:a,',Netstring::encode('a'));
        self::assertEquals('2:ab,',Netstring::encode('ab'));
        self::assertEquals('3:abc,',Netstring::encode('abc'));
        self::assertEquals('4:abcd,',Netstring::encode('abcd'));
    }

}