<?php
namespace Plum\Http\Tests;

use Plum\Http\HttpException;

class HttpExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provideInvalidHttpResponseCodes
     * @expectedException \LogicException
     */
    function it_should_throws_when_given_invalid_response_code($invalidCode)
    {
        new HttpException($invalidCode);
    }

    function provideInvalidHttpResponseCodes()
    {
        return [
            [100], [399], [600],
        ];
    }
} 
