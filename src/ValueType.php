<?php

namespace ArashJafari\DumpPlus;

class ValueType
{

    /**
     * Tells type of variable value
     *
     * @return void
     */
    public static function getType(mixed $var): string
    {
        if (is_string($var)) {
            return 'String of ' . mb_strlen($var) . ' characters';
        } elseif (is_int($var)) {
            return 'Int';
        } elseif (is_float($var)) {
            return 'Float';
        } elseif (is_double($var)) {
            return 'Double';
        } elseif (is_bool($var)) {
            return 'Bool';
        } elseif (is_resource($var)) {
            return 'Resource of type ' . get_resource_type($var);
        } elseif (is_null($var)) {
            return 'Null';
        } elseif (is_object($var)) {
            return 'Object: ' . get_class($var);
        } elseif (is_array($var)) {
            return 'Array of ' . count($var) . ' items';
        }
 
        return 'Unknown';
    }
}
