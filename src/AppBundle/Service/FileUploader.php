<?php
namespace AppBundle\Service;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class FileUploader
{
    private $targetDir;
    private $currentFilename;
    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }
    public function setCurrentFilename($filename)
    {
        $this->currentFilename = $filename;
    }
    public function getCurrentFilename()
    {
        return $this->currentFilename;
    }
    public function upload(UploadedFile $file = null)
    {
        if ($file === null) {
            // On retourne le nom d'origine si aucun fichier envoyé

            return $this->currentFilename;
        }
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getTargetDir(), $fileName);
        return $fileName;
    }
    public function getTargetDir()
    {
        return $this->targetDir;
    }
}
