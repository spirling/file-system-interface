<?php

namespace Spirling\FileSystem\Interfaces;

/**
 * Interface File
 * @package Spirling\FileSystem\Interfaces
 */
interface File extends FileSystemItem
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
     * Get file extension
     *
     * @return string
     */
    public function getExtension() : string;

    /**
     * Get file content
     *
     * @return string
     */
    public function getContent() : string;

}