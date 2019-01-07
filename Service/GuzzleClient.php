<?php

namespace Xigen\Bundle\GuzzleBundle\Service;

use GuzzleHttp\{Client, ClientInterface};

class GuzzleClient extends Client Implements ClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $config = [])
    {
        $config['headers'] = ['User-Agent' => 'Xigen-Symfony-Guzzle-Bundle'];

        parent::__construct($config);
    }
}
