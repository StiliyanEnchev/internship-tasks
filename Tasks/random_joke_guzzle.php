<?php
require 'vendor/autoload.php';

$running = true;
$url = "https://official-joke-api.appspot.com/jokes/random";


while ($running) {

    $client = new \GuzzleHttp\Client();

    $response = $client->request('GET', $url, options: [
        "verify" => false
    ]);

    $data = json_decode($response->getBody(), true);

    $setup = $data['setup'];
    $punchline = $data['punchline'];

    echo "Шега:\n";
    echo "Setup: $setup\n";
    echo "Punchline: $punchline\n";
    echo "Искаш ли нова шега? (y/n): \n";

    $choice = trim(fgets(STDIN));

    if ($choice == "y") {
        continue;
    } elseif ($choice == 'n') {
        $running = false;
    }
}
