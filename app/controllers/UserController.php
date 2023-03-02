<?php

namespace app\controllers;

class UserController extends Controller
{
    public function index()
    {
        $this->view("user", [
            "title" => "Usuário"
        ]);
    }

    public function create()
    {
        echo "Create";
    }

    public function update($request, $response, $args)
    {
        echo "Update {$args['id']}";
    }

    public function delete($request, $response, $args)
    {
        echo "Delete {$args['id']}";
    }
}