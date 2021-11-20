<?php

namespace ArashJafari\DumpPlus;

class DumpPlus
{
    /**
     * Dumps information about a variable.
     *
     * @param mixed $value  The variable you want to export.
     * @param mixed ...$values  [optional]
     * @return void
     */
    public static function dump(mixed $value, ...$values): void
    {
        Output::default(
            Helpers::groupTitle($value, debug_backtrace()),
            Helpers::varDumpContent($value)
        );

        foreach ($values as $val) {
            static::dump($val);
        }
    }
    
    /**
     * Dumps information about a variable in a simple format.
     *
     * @param mixed $value  The variable you want to export.
     * @param mixed ...$values  [optional]
     * @return void
     */
    public static function simple(mixed $value, ...$values): void
    {
        Output::default(
            Helpers::groupTitle($value, debug_backtrace()),
            Helpers::printRContent($value)
        );

        foreach ($values as $val) {
            static::simple($val);
        }
    }
    
    /**
     * Dumps information about a variable in a highlighted format.
     *
     * @param mixed $value  The variable you want to export.
     * @param mixed ...$values  [optional]
     * @return void
     */
    public static function pretty(mixed $value, ...$values): void
    {
        Output::pretty(
            Helpers::groupTitle($value, debug_backtrace()),
            Helpers::varDumpContent($value)
        );

        foreach ($values as $val) {
            static::pretty($val);
        }
    }

    /**
     * Dumps information about a variable in CLI.
     *
     * @param mixed $value  The variable you want to export.
     * @param mixed ...$values  [optional]
     * @return void
     */
    public static function cli(mixed $value, ...$values): void
    {
        Output::cli(
            Helpers::groupTitle($value, debug_backtrace()),
            Helpers::varDumpContent($value)
        );

        foreach ($values as $val) {
            static::cli($val);
        }
    }

    /**
     * Dumps information about a variable in a javascript alert.
     *
     * @param mixed $value  The variable you want to export.
     * @param mixed ...$values  [optional]
     * @return void
     */
    public static function alert(mixed $value, ...$values): void
    {
        Output::alert(
            Helpers::groupTitle($value, debug_backtrace(), true),
            Helpers::printRContent($value)
        );

        foreach ($values as $val) {
            static::alert($val);
        }
    }

    /**
     * Dumps information about a variable in JSON format.
     *
     * @param mixed $value  The variable you want to export.
     * @param mixed ...$values  [optional]
     * @return void
     */
    public static function json(mixed $value, ...$values): void
    {
        header("Content-Type: application/json; charset=UTF-8");
        
        Output::json(
            Helpers::groupTitle($value, debug_backtrace()),
            Helpers::printRContent($value)
        );

        foreach ($values as $val) {
            static::json($val);
        }
    }

    /**
     * Dumps information about a variable in browser console.
     *
     * @param mixed $value  The variable you want to export.
     * @param mixed ...$values  [optional]
     * @return void
     */
    public static function console(mixed $value, ...$values): void
    {
        Output::console(
            Helpers::groupTitle($value, debug_backtrace(), true),
            Helpers::printRContent($value)
        );

        foreach ($values as $val) {
            static::console($val);
        }
    }
}
