<?php

namespace BasicApp\CodeMirrorJs;

class Assets
{

    public static function register(&$head, &$beginBody = '', &$endBody = '')
    {
        $head .= app_view('BasicApp\CodeMirrorJs\Head');
        
        $beginBody .= app_view('BasicApp\CodeMirrorJs\BeginBody');
        
        $endBody .= app_view('BasicApp\CodeMirrorJs\EndBody');
    }

}