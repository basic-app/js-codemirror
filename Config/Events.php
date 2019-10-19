<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;

SystemEvents::onUpdate(function()
{
    $target = FCPATH . 'js' . DIRECTORY_SEPARATOR . 'codemirror';

    if (is_dir($target))
    {
        return;
    }

    $source = dirname(COMPOSER_PATH) . '/bower-asset/codemirror';

    $dirs = ['addon', 'keymap', 'lib', 'mode', 'theme'];

    foreach($dirs as $dir)
    {
        CliHelper::copy($source . '/' . $dir, $target . '/' . $dir);
    }

    CliHelper::copy(dirname(__DIR__) . '/Js/init.js', $target . '/init.js');

});