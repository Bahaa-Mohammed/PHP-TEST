<?php
error_reporting(0);
set_time_limit(0);
ob_start();
if(!file_exists("iTelegram.php")){
    copy('https://raw.githubusercontent.com/iNeoTeam/iTelegram/main/iTelegram.phar', 'iTelegram.php');
}
require_once('iTelegram.php');
use iTelegram\Bot;
define('API_KEY', "5263375648:AAEl2F6iJWfiCq6N8R9Xj5hMpudktFfH0Jg");

$bot		= new Bot();
$bot->Authentification(API_KEY);
$text		= $bot->Text();
$chat_id	= $bot->getChatId();
$username	= $bot->getChatUsername();
$firstname	= $bot->getChatFirstname();
$message_id	= $bot->MessageId();

if($text == "/start"){
    $r = $bot->sendMessage($chat_id, "<b>Hello</b> <a href='tg://user?id=$chat_id'>$firstname</a>.", "HTML", true);
	sleep(2); // for example
$bot->pinMessage($chat_id, $message_id = $r->result->message_id, $notification = null);
	$bot->sendMessage($chat_id, "<b>New class loaded successfully.</b>", "HTML", true, $message_id);
}
unlink("error_log");
?>
