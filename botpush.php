<?php



require "vendor/autoload.php";

$access_token = 'Rc09xG39kkAUgU71KE3I9nuA0PBi7P6beVTDRnm8xjkj40eOk+xMhRLtuDW9LtRJn17+g1fLcvgexO3U+vXH+UKmzd4moejn2cd8/AMC71TPopBscxmWgHGGXKOcMRdNzC5ByXBtHB8+TCO6K002iQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'Ud1dd1c81465cbd0cfaa3cee50809c2bd';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







