<?php

namespace Framework\Src\Errors;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ErrorManager
{
    public static function show(array $errorInfo): void
    {
        $loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . '/Framework/Src/Html');
        $twig = new Environment($loader);

        echo $twig->render("Error.html.twig", [
            "errorMessage"    => $errorInfo["errorMessage"],
            "errorLineNum"    => $errorInfo["errorLineNum"],
            "errorFile"       => $errorInfo["errorFile"],
            "errorLine"       => self::showLine($errorInfo["errorLineNum"], $errorInfo["errorFile"])
        ]);
        exit();
    }

    public static function showLine($line, $file): string
    {

        /*
         * Find error string
         * Numeration lines of string starts at 0
         */
        $file = new \SplFileObject($file);
        $file->seek($line - 1);
        return $file->current();

    }
}