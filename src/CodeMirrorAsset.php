<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Js\CodeMirror;

class CodeMirrorAsset extends \BasicApp\Core\Asset
{

    public static function register(&$head, &$beginBody = '', &$endBody = '')
    {
        $head .= app_view('BasicApp\Js\CodeMirror\Views\head');
                
        $endBody .= app_view('BasicApp\Js\CodeMirror\Views\end-body');
    }

}