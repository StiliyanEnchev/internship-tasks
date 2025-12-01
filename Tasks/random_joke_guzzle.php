<?php

$running = true;
$url = "https://official-joke-api.appspot.com/jokes/random";

while ($running) {
    global $url;
    
    $response = file_get_contents($url);
    $data = json_decode($response, true);

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
