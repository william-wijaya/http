<?php
namespace Plum\Http;

class HttpException extends \RuntimeException
{
    private $headers;

    public function __construct(
        $code = null, array $headers = [], $body = null
    )
    {
        if ($code < 400 || $code >= 600) throw new \LogicException(
            "Http error codes are between (4xx - 5xx), {$code} given"
        );

        parent::__construct($body, $code);

        $this->headers = $headers;
    }

    /**
     * Applies the data of the exception to given response
     *
     * @param Response $response
     */
    public function applyTo(Response $response)
    {
        $response->setStatusCode($this->getCode());
        foreach ($this->headers as $name => $value)
            $response->setHeader($name, $value);

        $response->write($this->getMessage());
    }
} 
