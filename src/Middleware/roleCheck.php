<?php

namespace App\Middleware;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Auth;
use App\Models\User;


class roleCheck
{
    public function __invoke(Request $request,Response $response, $next)
    {
//        Your Code Here

        $response = $next($request, $response);
        return $response;
    }
}