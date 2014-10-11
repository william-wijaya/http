<?php
namespace Plum\Http\Codec;

use Plum\Http\MediaType;
use Plum\Http\MediaTypeCodec;

class FormUrlEncodedCodec implements MediaTypeCodec
{
    /**
     * {@inheritdoc}
     */
    public function encode($value)
    {
        return http_build_query($value);
    }

    /**
     * {@inheritdoc}
     */
    public function decode($message)
    {
        $forms = [];
        parse_str($message, $forms);

        return $forms;
    }

    /**
     * {@inheritdoc}
     */
    public function mediaType()
    {
        return MediaType::APPLICATION_FORM_URL_ENCODED;
    }
}
