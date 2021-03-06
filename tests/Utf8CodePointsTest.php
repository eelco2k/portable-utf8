<?php

use voku\helper\UTF8;

/**
 * Class Utf8CodePointsTest
 */
class Utf8CodePointsTest extends PHPUnit_Framework_TestCase
{

  public function testEmptyString()
  {
    self::assertEquals(UTF8::codepoints(''), array());
  }

  public function testString()
  {

    $unicode = array();
    $unicode[0] = 73;
    $unicode[1] = 241;
    $unicode[2] = 116;
    $unicode[3] = 235;
    $unicode[4] = 114;
    $unicode[5] = 110;
    $unicode[6] = 226;
    $unicode[7] = 116;
    $unicode[8] = 105;
    $unicode[9] = 244;
    $unicode[10] = 110;
    $unicode[11] = 224;
    $unicode[12] = 108;
    $unicode[13] = 105;
    $unicode[14] = 122;
    $unicode[15] = 230;
    $unicode[16] = 116;
    $unicode[17] = 105;
    $unicode[18] = 248;
    $unicode[19] = 110;

    self::assertEquals(UTF8::codepoints('Iñtërnâtiônàlizætiøn'), $unicode);
  }
}
