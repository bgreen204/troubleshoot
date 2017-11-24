<?php

trait ClientTrait
{
    /**
     * @var \Predis\Client
     */
    protected $client;

    /**
     * Creates if not created yet and returns redis client instance.
     *
     * @return \Predis\Client
     */
    public function getClient()
    {
        if (null === $this->client) {
            $this->client = new \Predis\Client(getenv('REDIS_URL'));

        }

        return $this->client;
    }
}
