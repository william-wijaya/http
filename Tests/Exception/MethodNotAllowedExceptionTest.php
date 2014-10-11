<?php
namespace Plum\Http\Tests\Exception;

use Plum\Http\Exception\MethodNotAllowedException;
use Plum\Http\Request;
use Plum\Http\Response;

class MethodNotAllowedExceptionTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_apply_allow_headers_to_response()
    {
        $allow = [Request::METHOD_POST, Request::METHOD_PUT];

        $e = new MethodNotAllowedException($allow);

        $rep = $this->getMock(Response::class);
        $rep->expects($this->once())
            ->method("setHeader")
            ->with("Allow", $this->logicalAnd(
                $this->stringContains($allow[0]),
                $this->stringContains($allow[1])
            ));

        $e->applyTo($rep);
    }
} 
