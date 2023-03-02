<?php

namespace app\controllers;

class BookController extends Controller
{
    public function index()
    {
        $this->view("book", [
            "title" => "Livros"
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