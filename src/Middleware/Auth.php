<?php

namespace App\Middleware;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\User;
use App\Exception\UnauthorizedException;
use Firebase\JWT\JWT;

class Auth
{
    public static function validateToken(Application $app, Request $request)
    {
        $headerWithoutBearer = $this->extractHeaderWithoutBearer(
            $request->headers->get('Authorization');
        );

        $superSecretKey = $app['superSecretKey'];

        try {
            $decodedJWT = JWT::decode($headerWithoutBearer, $superSecretKey, ['HS256']);
        }  catch (\Exception $e) {
            throw new UnauthorizedException();
        }

        $app['authUser'] = $decodedJWT->user;
    }

    private function extractHeaderWithoutBearer($rawHeader)
    {
        if (strpos($rawHeader, 'Bearer ') === false) {
            throw new UnauthorizedException();
        }

        return str_replace('Bearer ', '', $rawHeader);
    }
}
