<?php

namespace Framework\Src\Errors;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ErrorManager
{
    public function show(array $errors)
    {
        $loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . '/Framework/Src/Html');
        $twig = new Environment($loader);
        echo $twig->render("Error.html.twig", $errors);
        return $this;
    }
}