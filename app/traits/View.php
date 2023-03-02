<?php

namespace app\traits;

use Twig\Loader\FilesystemLoader;

trait View
{
    protected $twig;

    protected function twig()
    {
        $loader = new FilesystemLoader(dirname(__DIR__, 1) . "/views");
        $this->twig = new \Twig\Environment($loader, [
            "debug" => true
        ]);
    }

    protected function functions(){}

    protected function load()
    {
        $this->twig();
        $this->functions();
    }

    protected function view($view, $data)
    {
        $this->load();

        $view = str_replace('.', '/', $view);
        $template = $this->twig->load($view . ".html");

        return $template->display($data);
    }
}