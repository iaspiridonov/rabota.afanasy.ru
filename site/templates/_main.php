<?php namespace ProcessWire;

// Render main content region
region(
    'content', 
    wireRenderFile($viewFilePath, $arParams)
);

// Render layout file defined in _init.php or redefined in template file. 
region(
    'out',
    wireRenderFile($subLayoutFilePath, $arParamsCommon)
);

// Output the skeleton file.
wireIncludeFile($layoutFilePath, $arParamsCommon);
