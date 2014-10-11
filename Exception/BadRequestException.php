<?php
namespace Plum\Http\Exception;

use Plum\Http\HttpException;
use Plum\Http\Response;

class BadRequestException extends HttpException
{
    /**
     * @param array $headers
     * @param string|null $message
     */
    public function __construct(array $headers = [], $message = null)
    {
        parent::__construct(Response::STATUS_BAD_REQUEST, $headers, $message);
    }
} 
