<?php

namespace App\Http\Controllers\Domain\UseCase\Authenticate;

use App\Http\Controllers\Domain\ValueObject\ResponseFormateHateaos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateLogin extends Authenticate
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            $success['token'] = $user->createToken('MyShop')->plainTextToken;
            $success['email'] = $user->email;
            $success['role'] = $user->role;

            return ResponseFormateHateaos::hateosReponse(
                'AuthLogin',
                'Login realizado com sucesso.',
                200,
                $success
            );
        } else {
            return ResponseFormateHateaos::hateosReponse(
                'AuthLogin',
                'Acesso não autorizado.',
                401,
                ['error' => 'Unauthorised']
            );
        }
    }
}
