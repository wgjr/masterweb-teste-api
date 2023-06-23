<?php

namespace App\Http\Controllers\Domain\UseCase\Authenticate;

use App\Http\Controllers\Domain\ValueObject\ResponseFormateHateaos;
use Illuminate\Http\Request;

class AuthenticateMe
{

    public function me(Request $request)
    {
        $authUser = $request->user();
        $token = $request->bearerToken();

        $success['id'] = $authUser->id;
        $success['email'] = $authUser->email;
        $success['role'] = $authUser->role;

        return ResponseFormateHateaos::hateosReponse(
            'Auth',
            'Usuário atual.',
            200,
            [
                'user' => $success,
                'token' => $token
            ]
        );
    }
}
