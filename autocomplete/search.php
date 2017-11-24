<?php

require __DIR__.'/vendor/autoload.php';

$client = new Predis\Client(getenv('REDIS_URL'));

$term = $_GET['term'];
$items = $client->zrangebylex('dictionary', "[$term", "[$term\xff", ['LIMIT', '0', '10']);

$id = 0;
$result = [];
foreach ($items as $item) {
    $result[] = ['id' => $id++, 'label' => $item];
}

echo json_encode($result);
