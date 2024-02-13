<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Js\CodeMirror\Publishers;

use BasicApp\Core\Publisher as BasePublisher;

class Publisher extends BasePublisher
{

    protected $destination = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'codemirror';

    public $createDestination = true;

    public $url = 'https://github.com/codemirror/codemirror5/archive/refs/tags/5.65.16.zip';

    public $allowedTypes = [
        //'md',
        //'txt'
    ];

    public $allowedFiles = [
        //'tinymce.d.ts'
    ];

    public function publish(): bool
    {
        if (is_dir($this->destination . DIRECTORY_SEPARATOR . 'lib'))
        {
            return true;
        }

        return $this->downloadFile($this->url)
            ->extractZipArchive($this->getScratch() . '5.65.16.zip')
            ->setSource($this->getScratch() . 'codemirror5-5.65.16')
            ->addPath('addon')
            ->addPath('keymap')
            ->addPath('lib')
            ->addPath('mode')
            ->addPath('theme')
            ->merge(false);
    }

}