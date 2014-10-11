<?php
namespace Plum\Http\Exception;

use Plum\Http\HttpException;
use Plum\Http\Response;


class MethodNotAllowedException extends HttpException
{
    /**
     * @param array $allow the list of allowed methods
     */
    public function __construct(array $allow)
    {
        parent::__construct(
            Response::STATUS_METHOD_NOT_ALLOWED,
            ["Allow" => implode(", ", $allow)]
        );
    }
} 
