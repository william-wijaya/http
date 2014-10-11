<?php
namespace Plum\Http\Exception;

use Plum\Http\HttpException;
use Plum\Http\Response;

class NotFoundException extends HttpException
{
    /**
     * @param array $headers
     * @param string|null $message
     */
    public function __construct(array $headers = [], $message = null)
    {
        parent::__construct(Response::STATUS_NOT_FOUND, $headers, $message);
    }
} 
