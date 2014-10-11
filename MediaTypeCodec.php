<?php
namespace Plum\Http;

use Plum\Http\Exception\BadRequestException;
use Plum\Http\Exception\InternalServerErrorException;

/**
 * Represents Media Type CODEC (en<b>CO</b>der - <b>DEC</b>oder) which can
 * turns PHP value into Media Type specific formatted string and vice-versa
 */
interface MediaTypeCodec
{
    /**
     * Turns given PHP value into Media Type specific formatted string
     *
     * @param mixed $value
     *
     * @return string
     *
     * @throws InternalServerErrorException when failed to encode the value
     */
    public function encode($value);

    /**
     * Turns given string into PHP value
     *
     * @param string $message
     *
     * @return mixed
     *
     * @throws BadRequestException when failed to decode the value
     */
    public function decode($message);

    /**
     * Returns the media type name
     *
     * @return string
     */
    public function mediaType();
} 
