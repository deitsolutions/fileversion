<?php

namespace deitsolutions;

class FileVersioning
{
    /**
     * Format file path by adding datetime segment if necessary
     * @param string $filePath relative path from to the file
     * @return string
     */
    public static function set($filePath)
    {
        //get absolute file path
        $fileAbsPath = __DIR__ . $filePath;

        //add datetime parameter
        if (file_exists($fileAbsPath)) {
            $filePath .= ((strpos($filePath, '?')) ? '&' : '?') . 'v=' . filemtime($fileAbsPath);
        }

        return $filePath;
    }

}