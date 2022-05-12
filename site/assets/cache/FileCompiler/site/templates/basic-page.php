<?php namespace ProcessWire;

// $arParams можно не передавать в wireRenderFile(), если дополнительные переменные во view не нужны
region('out', wireRenderFile('views/basic-page/basic-page.view.php'));
