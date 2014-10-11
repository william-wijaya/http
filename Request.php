<?php
namespace Plum\Http;

/**
 * Represents HTTP Request
 */
interface Request
{
    const METHOD_GET = "GET";
    const METHOD_PUT = "PUT";
    const METHOD_POST = "POST";
    const METHOD_HEAD = "HEAD";
    const METHOD_TRACE = "TRACE";
    const METHOD_DELETE = "DELETE";
    const METHOD_OPTIONS = "OPTIONS";
    const METHOD_CONNECT = "CONNECT";

    /**
     * Returns the request URI
     *
     * @return string
     */
    public function uri();

    /**
     * Returns the request method
     *
     * @return string
     */
    public function method();

    /**
     * Returns all headers
     *
     * @return array
     */
    public function headers();

    /**
     * Returns the header name
     *
     * @param string $name
     *
     * @return string
     */
    public function header($name);

    /**
     * Returns the Host header
     *
     * @return string
     */
    public function host();

    /**
     * Returns the Content-Type header
     *
     * @return string
     */
    public function contentType();

    /**
     * Returns the Accept header
     *
     * @return string
     */
    public function accept();

    /**
     * Returns the Content-Length header
     *
     * @return int
     */
    public function length();

    /**
     * Returns the User-Agent header
     *
     * @return string
     */
    public function userAgent();

    /**
     * Returns the Accept-Language header
     *
     * @return string
     */
    public function locale();

    /**
     * Returns the Date header
     *
     * @return \DateTime
     */
    public function date();

    /**
     * Returns the raw message body / payload
     *
     * @return string
     */
    public function body();

    /**
     * Returns the decoded message body
     *
     * @return mixed
     *
     * @see MediaType
     * @see MediaTypeCodec
     */
    public function payload();

    /**
     * Returns the query parameters
     *
     * @return array
     */
    public function queryParams();

    /**
     * Returns the query parameter of given name
     *
     * @param string $name
     *
     * @return mixed
     */
    public function queryParam($name);

    /**
     * Returns the string representation
     *
     * @return string
     */
    public function __toString();
} 
