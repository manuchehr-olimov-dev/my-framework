<?php
namespace Framework\Src\View;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private string $view;
    private array $data;

    public function __construct(string $view, array $data = [])
    {
        $this->view = $view . ".html.twig";
        $this->data = $data;
    }

    public function render() : View
    {
        $loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . '/View');
        $twig   = new Environment($loader);
        echo $twig->render($this->view, $this->data);

        return $this;
    }

}
