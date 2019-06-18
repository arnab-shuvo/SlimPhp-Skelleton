<?php

namespace App\Controllers\User;


use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\User;
use App\Helpers\IsLoggedin;
use App\Helpers\IsAdmin;

class UserController
{
    protected $container;

    public function __construct($container){
        $this->container = $container;
    }
    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

    public function index(Request $request, Response $response)
    {
        $user = User::all()->makeHidden(['created_at','updated_at','password'])->toArray();
        return $this->response->withJson($user)->withStatus(200);
    }
}