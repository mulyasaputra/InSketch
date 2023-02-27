<?php
function sendMessage($telegram_id, $text) {
    $url = "https://api.telegram.org/bot" . env('TELEGRAM_KEY', 'WHAT') . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
$send = new stdClass();
foreach ($message as $key => $value)
{
    $send->$key = $value;
}
$telegram_id = 951321188;
$text = "*{$send->name}*\n_{$send->email}_\n\n*Pesan* : {$send->message}";

sendMessage($telegram_id, $text);
echo "<script>window.location.href = '/';</script>";
?>