<?php
namespace Plum\Http\Tests\Codec;

use Plum\Http\Codec\JsonCodec;

class JsonCodecTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provideEncodedValuePairs
     */
    function it_should_encode_value($value, $encoded)
    {
        $jc = new JsonCodec();

        $this->assertEquals($encoded, $jc->encode($value));
    }

    function provideEncodedValuePairs()
    {
        return [
            [1, "1"], [.5, "0.5"], [-1, "-1"], [-.1, "-0.1"],
            [true, "true"], [false, "false"], [null, "null"],
            ["hello world", '"hello world"'], [[], "[]"],
            [[1, 2, 3], "[
    1,
    2,
    3
]"],
            [["name" => "liam"], '{
    "name": "liam"
}'],

        ];
    }

    /**
     * @test
     * @dataProvider provideDecodedValuePairs
     */
    function it_should_decode_message($message, $decoded)
    {
        $jc = new JsonCodec();

        $this->assertEquals($decoded, $jc->decode($message));
    }

    function provideDecodedValuePairs()
    {
        return [
            ["true", true], ["false", false], ["1", 1], ["0.5", .5],
            ['"hello world"', "hello world"], ["[]", []], ["{}", []],
        ];
    }

    /**
     * @test
     * @dataProvider provideMalformedJsonMessage
     * @expectedException \Plum\Http\Exception\BadRequestException
     */
    function it_should_throws_if_message_is_malformed($malformed)
    {
        $jc = new JsonCodec();
        $jc->decode($malformed);
    }

    function provideMalformedJsonMessage()
    {
        return [
            [""], [null], ["{"], ["malformed string"], ["["], ["[}"],
            ['"test']
        ];
    }
} 
