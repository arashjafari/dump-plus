<?php

use ArashJafari\DumpPlus\DumpPlus;

if (!function_exists('dp')) {
    /**
     * Dumps information about a variable.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dp(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::dump($var);
        }
    }
}

if (!function_exists('dpd')) {
    /**
     * Dumps information about a variable and die.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dpd(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::dump($var);
        }
        
        die();
    }
}


if (!function_exists('dp_simple')) {
    /**
     * Dumps information about a variable in a simple format.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dp_simple(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::simple($var);
        }
    }
}

if (!function_exists('dpd_simple')) {
    /**
     * Dumps information about a variable in a simple format and die.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dpd_simple(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::simple($var);
        }

        die();
    }
}

if (!function_exists('dp_json')) {
    /**
     * Dumps information about a variable in JSON format.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dp_json(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::json($var);
        }
    }
}

if (!function_exists('dpd_json')) {
    /**
     * Dumps information about a variable in JSON format and die.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dpd_json(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::json($var);
        }

        die();
    }
}

if (!function_exists('dp_console')) {
    /**
     * Dumps information about a variable in browser console.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dp_console(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::console($var);
        }
    }
}

if (!function_exists('dpd_console')) {
    /**
     * Dumps information about a variable  in browser console and die.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dpd_console(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::console($var);
        }

        die();
    }
}

if (!function_exists('dp_alert')) {
    /**
     * Dumps information about a variable in JavaScript alert.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dp_alert(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::alert($var);
        }
    }
}

if (!function_exists('dpd_alert')) {
    /**
     * Dumps information about a variable in JavaScript alert and die.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dpd_alert(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::alert($var);
        }

        die();
    }
}

if (!function_exists('dp_cli')) {
    /**
     * Dumps information about a variable in CLI.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dp_cli(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::cli($var);
        }
    }
}

if (!function_exists('dpd_cli')) {
    /**
     * Dumps information about a variable in CLI and die.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dpd_cli(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::cli($var);
        }

        die();
    }
}

if (!function_exists('dp_pretty')) {
    /**
     * Dumps information about a variable in a highlighted format.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dp_pretty(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::pretty($var);
        }
    }
}

if (!function_exists('dpd_pretty')) {
    /**
     * Dumps information about a variable in a highlighted format and die.
     *
     * @param mixed ...$values  The variable you want to export.
     * @return void
     */
    function dpd_pretty(...$values)
    {
        foreach ($values as $var) {
            DumpPlus::pretty($var);
        }

        die();
    }
}
