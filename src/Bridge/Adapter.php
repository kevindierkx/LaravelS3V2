<?php

namespace Kevindierkx\LaravelS3v2\Bridge;

use League\Flysystem\AwsS3v2\AwsS3Adapter;

class Adapter extends AwsS3Adapter
{
    /**
     * Get the URL for the file at the given path.
     *
     * @param  string  $path
     * @return string
     */
    public function getUrl($path)
    {
        $path = $this->applyPathPrefix($path);

        return $this->getClient()->getObjectUrl($this->getBucket(), $path);
    }
}
