<?php


namespace Spirling\FileSystem\Interfaces;


interface FileSystemItem
{

    /**
     * Get file name
     *
     * @return string
     */
    public function getName() : string;

    /**
     * Get file path
     *
     * @return string
     */
    public function getPath() : string;

    /**
     * Get file content
     *
     * @return string
     */
    public function getContent() : string;

}