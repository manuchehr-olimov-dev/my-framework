<?php
namespace Framework\View;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{

    public static function render(string $view, array $data = [])
    {
        $loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . '/View');
        $twig   = new Environment($loader);
        $view   = $view . ".html.twig";
        echo $twig->render($view, $data);
        return self::class;
    }

}

?>