<?php

namespace ArashJafari\DumpPlus;

use ArashJafari\DumpPlus\FileInfo;
use ArashJafari\DumpPlus\ValueType;

class Helpers
{
    private static bool $styleHighlightAdded = false;
    private static bool $styleAdded = false;

    /**
     * Tells script run in CLI or not.
     *
     * @return bool
     */
    public static function isCli() : bool
    {
        return (PHP_SAPI === 'cli' || defined('STDIN'));
    }
 
    /**
     * Prints Stylesheet and JavaScript for Highlight.js.
     *
     * @return void
     */
    public static function stylehHighlight(): void
    {
        if (self::$styleHighlightAdded == false) {
            $styleScript = '<link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.3.1/styles/devibeans.min.css">';
            $styleScript .= '<script src="https://unpkg.com/@highlightjs/cdn-assets@11.3.1/highlight.min.js"></script>';
            $styleScript .= '<script>hljs.highlightAll();</script>';

            echo $styleScript;

            self::$styleHighlightAdded = true;
        }
    }
 
    /**
     * Prints a CSS style for the dump.
     *
     * @return void
     */
    public static function style(): void
    {
        if (self::$styleAdded == false) {
            echo "<style>div.dumpplus{box-shadow:4px 5px 5px 0 #999;background-color:#313131;color:#fff;font-family:monospace;margin:10px;padding-bottom:8px;border-radius:0 0 5px 5px}div.dumpplus pre{padding:1em;margin:0}div.dumpplus span.dumpplus-title{padding:5px;display:block;background-color:#000;color:#898989}.dumpplus .p-0{padding:0;}.dumpplus .hljs{background:#313131;}</style>";
            
            self::$styleAdded = true;
        }
    }

    /**
     * Get var_dump output.
     *
     * @param mixed $var
     * @return string
     */
    public static function varDumpContent(mixed $var): string
    {
        ob_start();
        var_dump($var);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    /**
     * Get print_r output.
     *
     * @param mixed $var
     * @return string
     */
    public static function printRContent(mixed $var): string
    {
        return print_r($var, true);
    }

    /**
     * Get group title for dump.
     *
     * @param mixed $var
     * @param array $backtrace
     * @param bool $shortTitle
     * @return string
     */
    public static function groupTitle(mixed $value, array $backTrace, bool $shortTitle = false): string
    {
        $groupTitle = 'DumpPlus';
        $groupTitle .= ' | ';
        $groupTitle .= FileInfo::getFileAndLine($backTrace, $shortTitle);
        $groupTitle .= ' | ';
        $groupTitle .= ValueType::getType($value);
        
        return $groupTitle;
    }
}
