<?php

namespace ArashJafari\DumpPlus;

class FileInfo
{
    /**
     * Get file path and line number of the caller.
     *
     * @param array $backtrace
     * @return string
     */
    public static function getFileAndLine(array $backtrace, bool $shortTitle): string
    {
        $return = '';

        if (isset($backtrace[0]['file'])) {
            $return .= $shortTitle
                    ? basename($backtrace[0]['file'])
                    : $backtrace[0]['file'];
        }

        if (isset($backtrace[0]['line'])) {
            $return .= ':' . $backtrace[0]['line'];
        }
  
        return $return;
    }
}
