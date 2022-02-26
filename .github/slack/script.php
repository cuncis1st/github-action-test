<?php 

require_once 'vendor/autoload.php';
Requests::register_autoloader();

$response = Requests::post(
    "https://hooks.slack.com/services/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",
    array(
        'Content-type' => 'application/json'
    ),
    json_encode(array(
        'text' => 'Some message'
    ))
);

var_dump($response);


?>