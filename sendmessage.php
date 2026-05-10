<?php
$content = '';
foreach ($_POST as $key => $value) {
    if($value){
        $content .= "<b>$key</b>: <i>$value</i>\n";
    }
}
if(trim($content)){
    $content = "<b>Message from Site:</b>\n" . $content;
    // bots token and chat id from @BotFather
    $apiToken = "8675529325:AAG911miDjgnjHPwCytbZASQM7ZIfHO3PsQ";
    $data = [
        // the users chat id
        "chat_id" => "@bookingmessage",
        "text" => $content,
        "parse_mode" => "HTML"
    ];
    $response = file_get_contents("https://api.telegram.org/bot8675529325:AAG911miDjgnjHPwCytbZASQM7ZIfHO3PsQ/sendMessage?" . http_build_query($data) );
?>