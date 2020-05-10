<?php
/**
 * @link https://github.com/solutlux/fileversion.git
 * @copyright Copyright (c) 2018 Solutlux LLC
 *
 * The full copyright and license information is stored in the LICENSE file distributed with this source code.
 */

namespace solutlux\fileversion\src;

/**
 * Class FileVersion automatically appends the latest modification date of the file as the url parameter
 */
class FileVersion
{
    /**
     * Adds timestamp of the latest file modification.
     * This could be used to automatically reset cached version of files in browser (css, js, ...) after file updated
     *
     * @param string $filePath relative path from to the file
     * @return string
     */
    public static function get($filePath)
    {
        //get absolute file path
        $fileAbsPath = @$_SERVER['DOCUMENT_ROOT'] . $filePath;

        //add datetime parameter
        if (file_exists($fileAbsPath)) {
            $filePath .= ((strpos($filePath, '?')) ? '&' : '?') . 'v=' . filemtime($fileAbsPath);
        }

        return $filePath;
    }
}
