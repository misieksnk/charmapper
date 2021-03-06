<?php

namespace MisiekSnk\CharMapper;

/**
 * Class CharMapperTest
 */
class CharMapperTest extends \PHPUnit_Framework_TestCase
{
    /* @var CharMapper */
    private $charMapper;

    protected function setUp()
    {
        $this->charMapper = new CharMapper();
    }

    /**
     * @test
     * @dataProvider dpItShouldReturnMappedString
     *
     * @param $string
     * @param $expected
     */
    public function itShouldReturnMappedString($string, $expected)
    {
        $result = $this->charMapper->map($string);
        $this->assertEquals($expected, $result);
    }

    //=================

    /**
     * @return array
     */
    public function dpItShouldReturnMappedString() {
        return [
            ['GŻEGŻÓŁKA', 'GZEGZOLKA'],
            ['gżegżółka', 'gzegzolka'],
            ['छ', 'Chha']
        ];
    }
}
