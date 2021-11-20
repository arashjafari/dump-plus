<?php

namespace Arashjafari\DumpPlus;

use ArashJafari\DumpPlus\Helpers;

class Output
{
    /**
     * Print a dump in HTML format.
     *
     * @return void
     */
    public static function default(string $title, string $data) : void
    {
        if (Helpers::isCli()) {
            static::cli($title, $data);
            return;
        }
 
        static::html($title, $data);
    }

    /**
     * Print a dump with syntax highlighting.
     *
     * @return void
     */
    public static function pretty(string $title, string $data) : void
    {
        if (Helpers::isCli()) {
            static::cli($title, $data);
            return;
        }
 
        static::htmlHighlight($title, $data);
    }

    /**
     * Print a dump in HTML with highlight syntax
     *
     * @return void
     */
    public static function htmlHighlight(string $title, string $data) : void
    {
        Helpers::style();
        Helpers::stylehHighlight();

        $html = '<div class="dumpplus">';
        $html .= '<span class="dumpplus-title">';
        $html .= $title;
        $html .= '</span>';
        $html .= '<pre class="p-0"><code class="language-php">';
        $html .= $data;
        $html .= '</code></pre>';
        $html .= '</div>';

        echo $html;
    }

    /**
     * Print a dump in HTML format.
     *
     * @return void
     */
    public static function html(string $title, string $data) : void
    {
        Helpers::style();

        $html = '<div class="dumpplus">';
        $html .= '<span class="dumpplus-title">';
        $html .= $title;
        $html .= '</span>';
        $html .= '<pre>';
        $html .= $data;
        $html .= '</pre>';
        $html .= '</div>';

        echo $html;
    }

    /**
     * Print a dump in CLI mode
     *
     * @return void
     */
    public static function cli(string $title, string $data) : void
    {
        echo $title;
        echo PHP_EOL . PHP_EOL;
        echo $data;
        echo PHP_EOL;
    }

    /**
     * Print a dump in JSON format
     *
     * @return void
     */
    public static function json(string $title, string $data) : void
    {
        echo json_encode([
            'title' => $title,
            'data' => $data
        ]);
    }

    /**
     * Print a dump in alert format
     *
     * @return void
     */
    public static function alert(string $title, string $data) : void
    {
        echo '<script>alert(`' . $title . PHP_EOL . PHP_EOL . str_replace('`', '\`', $data) . '`)</script>';
    }

    /**
     * Print a dump in browser console format
     *
     * @return void
     */
    public static function console(string $title, string $data) : void
    {
        $result = '<script>';
        $result .= 'console.group("' . $title . '");';
        $result .= 'console.log('.json_encode($data).');';
        $result .= 'console.groupEnd();';
        $result .= '</script>';
  
        echo $result;
    }
}
