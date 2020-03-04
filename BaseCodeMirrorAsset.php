<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Js\CodeMirror;

abstract class BaseCodeMirrorAsset extends \BasicApp\Core\Asset
{

    public static function register(&$head, &$beginBody = '', &$endBody = '')
    {
        $head .= app_view('BasicApp\Js\CodeMirror\Views\head');
        
        $beginBody .= app_view('BasicApp\Js\CodeMirror\Views\begin-body');
        
        $endBody .= app_view('BasicApp\Js\CodeMirror\Views\end-body');
    }

}