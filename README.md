# Automatic file version based on the timestamp

Format file path by adding datetime segment if necessary.

Append the last modified timestamp to the file name in the form of [file_name]?v=[timestamp].

# Installation

Add the extention using composer:

"deitsolutions/fileversion": "dev-master"

# Usage

```html
<link rel="stylesheet" type="text/css" href="<?php echo deitsolutions\fileversion\src\FileVersion::set('pathToCssFileFromTheRoot'); ?>">
<img src="<?php echo deitsolutions\fileversion\src\FileVersion::set('pathToImgFileFromTheRoot'); ?>">
<script src="<?php echo deitsolutions\fileversion\src\FileVersion::set('pathToJsFileFromTheRoot'); ?>"></script>
```