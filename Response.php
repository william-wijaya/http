<?php
namespace Plum\Http;

/**
 * Represents HTTP Response
 */
interface Response
{
    /* Informational 1xx */
    const STATUS_CONTINUE = 100;
    const STATUS_SWITCHING_PROTOCOLS = 101;

    /* Success 2xx */
    const STATUS_OK = 200;
    const STATUS_CREATED = 201;
    const STATUS_ACCEPTED = 202;
    const STATUS_NO_CONTENT = 204;
    const STATUS_RESET_CONTENT = 205;
    const STATUS_PARTIAL_CONTENT = 206;

    /* Redirection 3xx */
    const STATUS_MULTIPLE_CHOICES = 300;
    const STATUS_MOVED_PERMANENTLY = 301;
    const STATUS_FOUND = 302;
    const STATUS_SEE_OTHER = 303;
    const STATUS_NOT_MODIFIED = 304;
    const STATUS_USE_PROXY = 305;
    const STATUS_TEMPORARY_REDIRECT = 307;

    /* Client Error 4xx */
    const STATUS_BAD_REQUEST = 400;
    const STATUS_UNAUTHORIZED = 401;
    const STATUS_FORBIDDEN = 403;
    const STATUS_NOT_FOUND = 404;
    const STATUS_METHOD_NOT_ALLOWED = 405;
    const STATUS_NOT_ACCEPTABLE = 406;
    const STATUS_CONFLICT = 409;
    const STATUS_GONE = 410;
    const STATUS_LENGTH_REQUIRED = 411;
    const STATUS_PRECONDITION_FAILED = 412;
    const STATUS_REQUEST_ENTITY_TOO_LARGE = 413;
    const STATUS_REQUEST_URI_TOO_LONG = 414;
    const STATUS_UNSUPPORTED_MEDIA_TYPE = 415;
    const STATUS_UNPROCESSABLE_ENTITY = 422;

    /* Server Error 5xx */
    const STATUS_INTERNAL_SERVER_ERROR = 500;
    const STATUS_NOT_IMPLEMENTED = 501;
    const STATUS_BAD_GATEWAY = 502;
    const STATUS_SERVICE_UNAVAILABLE = 503;
    const STATUS_GATEWAY_TIMEOUT = 504;
    const STATUS_HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * Returns the response status code
     *
     * @return int
     */
    public function statusCode();

    /**
     * Sets the response status code
     *
     * @param int $statusCode
     */
    public function setStatusCode($statusCode);

    /**
     * Returns the HTTP Version
     *
     * @return float
     */
    public function httpVersion();

    /**
     * Sets the HTTP Version
     *
     * @param float $version
     */
    public function setHttpVersion($version);

    /**
     * Returns the response body
     *
     * @return string
     */
    public function body();

    /**
     * Returns all response headers
     *
     * @return array
     */
    public function headers();

    /**
     * Returns the header value of given name
     *
     * @param string $name
     *
     * @return string
     */
    public function header($name);

    /**
     * Sets header value
     *
     * @param string $name
     * @param string $value
     */
    public function setHeader($name, $value);

    /**
     * Returns the response Date
     *
     * @return \DateTime
     */
    public function date();

    /**
     * Returns the response Content-Type header
     *
     * @return string
     */
    public function contentType();

    /**
     * Sets the Content-Type header
     *
     * @param string $mediaType
     */
    public function setContentType($mediaType);

    /**
     * Returns the response Location header
     *
     * @return string
     */
    public function location();

    /**
     * Sets the Location header
     *
     * @param string $location
     */
    public function setLocation($location);

    /**
     * Writes message(s) to the response body
     *
     * @param string $message
     * @param string,... $messages
     */
    public function write($message, ...$messages);

    /**
     * Flushes the response to given stream
     *
     * @param resource $stream
     */
    public function flushTo($stream);

    /**
     * Flushes the response to PHP output stream
     */
    public function flush();

    /**
     * Returns the string byte representation of the response
     *
     * @return string
     */
    public function __toString();
} 
