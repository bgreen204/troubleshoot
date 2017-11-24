<?php

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../ClientTrait.php';

class Fixtures
{
    use ClientTrait;

    /**
     * Cleans up redis database using FLUSHDB redis command .
     */
    public function cleanUp()
    {
        $this->getClient()->flushdb();
    }

    /**
     * Populates redis zset named 'dictionary' with 3k+ lines containing n-starting english word definitions.
     *
     * @see http://www.mso.anu.edu.au/~ralph/OPTED/v003/wb1913_n.html
     *
     * @param string $file Path to file containing autocomplete dictionary
     */
    public function load()
    {
        foreach (['a','b','c'] as $letter) {
            $file = __DIR__.'/'.$letter.'.txt';
            $lines = file($file);
            $newData = [];

            foreach ($lines as $key => $line) {
                $newData[$key] = explode(' ', $line)[0];
            }


            $data = array_fill_keys($newData, 0);
            $this->getClient()->zadd('dictionary', $data);
        }
    }
}
