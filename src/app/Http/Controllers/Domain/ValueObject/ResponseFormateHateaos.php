<?php

namespace App\Http\Controllers\Domain\ValueObject;
use hateoasLaravel\Domain\UseCases\HateoasLaravel;

class ResponseFormateHateaos
{
    public static function hateosReponse(string $class, string $hashMessage, int $code = 200, array $data = []): \Illuminate\Http\JsonResponse
    {
        $responseFormater = new HateoasLaravel();

        return $responseFormater->formatResponse(
            $class,
            $hashMessage,
            $code,
            $data
        );
    }
}
