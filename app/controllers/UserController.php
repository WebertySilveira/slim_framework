<?php

namespace app\controllers;

class UserController
{
    public function index()
    {
        echo "Index";
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