<?php
use voku\helper\UTF8;

/**
 * Class Utf8AsciiTest
 */
class Utf8AsciiTest extends PHPUnit_Framework_TestCase
{

  public function testUtf8()
  {
    $str = 'testiñg';
    self::assertFalse(UTF8::is_ascii($str));
  }

  public function testAscii()
  {
    $str = 'testing';
    self::assertTrue(UTF8::is_ascii($str));
  }

  public function testInvalidChar()
  {
    $str = "tes\xe9ting";
    self::assertFalse(UTF8::is_ascii($str));
  }

  public function testEmptyStr()
  {
    $str = '';
    self::assertTrue(UTF8::is_ascii($str));
  }

  public function testUtf8ToAscii()
  {
    $str = 'testiñg';
    self::assertEquals('testing', UTF8::to_ascii($str));
  }

  public function testAsciiToAscii()
  {
    $str = 'testing';
    self::assertEquals('testing', UTF8::to_ascii($str));
  }

  public function testInvalidCharToAscii()
  {
    $str = "tes\xe9ting";
    self::assertEquals('testing', UTF8::to_ascii($str));
  }

  public function testEmptyStrToAscii()
  {
    $str = '';
    self::assertEquals('', UTF8::to_ascii($str));
  }

  public function testNulAndNon7Bit()
  {
    $str = "a\x00ñ\x00c";
    self::assertEquals('anc', UTF8::to_ascii($str));
  }

  public function testNul()
  {
    $str = "a\x00b\x00c";
    self::assertEquals('abc', UTF8::to_ascii($str));
  }
}
