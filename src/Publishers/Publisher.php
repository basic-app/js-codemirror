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

    public $url = 'https://codemirror.net/codemirror.zip';

    public function publish(): bool
    {
        if ($this->destinationExists)
        {
            return true;
        }

        return $this->downloadFile($this->url)
            ->extractZipArchive($this->getScratch() . 'codemirror.zip')
            ->setSource($this->getScratch() . 'codemirror-5.65.16')
            ->addPath('addon')
            ->addPath('keymap')
            ->addPath('lib')
            ->addPath('mode')
            ->addPath('theme')
            ->merge(false);
    }

}