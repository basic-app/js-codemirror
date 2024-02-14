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

        $this->downloadFile($this->url);
        
        $this->extractZipArchive($this->getScratch() . 'codemirror.zip');

        foreach(directory_map($this->getScratch(), 2) as $key => $value)
        {
            if (is_array($value))
            {
                return $this->setSource($this->getScratch() . $key)
                    ->addPath('addon')
                    ->addPath('keymap')
                    ->addPath('lib')
                    ->addPath('mode')
                    ->addPath('theme')
                    ->merge(false);
            }
        }

        return true;
    }

}