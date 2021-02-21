<?php
/* fonction qui permet de charcher toutes les classes dont on a besoin dans toute l'application */
function autoload($classname)
{
    if (file_exists($file = dirname (__FILE__) . '/' . $classname .'.class.php'))
        require_once $file;
}

spl_autoload_register('autoload');