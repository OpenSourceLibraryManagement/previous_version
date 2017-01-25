<?php
declare(STRICT_TYPES=1);
define("DS",DIRECTORY_SEPARATOR);

function startsWith(string $haystack,string $needle):bool
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}

/**
 * Autoload class's using php namespaces
 * See autoloading.
 * TODO: Comparisn with the bugy code detecting bloat composer
 */
spl_autoload_register(function ($name) {
    //echo "&lt;deb:debug&gt;TOLOAD: $name<br>";

    $name = ltrim($name, "\\");
    //
    /*
    if(startsWith($name,"Composer"))
        return;
    //*/
    $name = str_replace(["\\", "_"], "/", $name);
    
    $toload = __DIR__.DS.$name.".php";
    //echo "&lt;TRY&gt;$toload -> ".(file_exists($toload)?"TRUE":"FALSE")."<br>";
    if(!file_exists($toload))
        $toload = __DIR__.DS.substr($name, 0,strrpos($name,'/')).".php";
    //echo "&lt;Loading&gt;$toload<br> ";
    
    require_once $toload;
});