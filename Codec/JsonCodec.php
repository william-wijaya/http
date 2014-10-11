<?php
namespace Plum\Http\Codec;

use Plum\Http\Exception\BadRequestException;
use Plum\Http\Exception\InternalServerErrorException;
use Plum\Http\MediaType;
use Plum\Http\MediaTypeCodec;

class JsonCodec implements MediaTypeCodec
{
    /**
     * {@inheritdoc}
     */
    public function encode($value)
    {
        $m = json_encode($value, JSON_PRETTY_PRINT);
        if ($m === false)
            throw new InternalServerErrorException();

        return $m;
    }

    /**
     * {@inheritdoc}
     */
    public function decode($message)
    {
        $v = json_decode($message, true);
        if ($v === null)
            throw new BadRequestException();

        return $v;
    }

    /**
     * {@inheritdoc}
     */
    public function mediaType()
    {
        return MediaType::APPLICATION_JSON;
    }
}
