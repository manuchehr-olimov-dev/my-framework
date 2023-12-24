<?php
namespace Framework\Src\View;


use Framework\Src\Errors\ErrorManager;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private string $view;
    private array $data;

    public function __construct($view, $data = [])
    {
        $this->view = $view . ".html.twig";
        $this->data = $data;
    }


    public function render()
    {
            $loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . '/Resources/view');
            $twig = new Environment($loader);
            echo $twig->render($this->view, $this->data);
            return $this;
    }


}
