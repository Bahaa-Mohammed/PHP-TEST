<?php
error_reporting(0);
if(!file_exists("iTelegram.php")){
    copy("https://raw.githubusercontent.com/iNeoTeam/iTelegram/main/iTelegram.phar", "iTelegram.php");
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
    $r = $bot->sendMessage($chat_id, "<b>Hello</b> <a href='tg://user?id=$chat_id'>$firstname</a> !\n\n<b>Special Thanks for using iNeoTeam Telegram Bot Class.</b>\n\n<b>GitHub:</b> https://github.com/iNeoTeam\iTelegram\n<b>Powered By</b> @iNeoTeam.", "HTML", true);
}elseif($text == "/update"){
	$r = $bot->sendMessage($chat_id, "*Please wait ...*", "MarkDown", true);
	rename("iClass.php", rand(10000, 99999).".php");
	copy("https://raw.githubusercontent.com/iNeoTeam/iTelegram/main/iTelegram.phar", "iClass.php");
	sleep(2); // for example
	$bot->deleteMessage($chat_id, $r->result->message_id);
	$bot->sendMessage($chat_id, "<b>New class loaded successfully.</b>", "HTML", true, $message_id);
}else{
    $bot->sendMessage($chat_id, "*Command not found.*", "MarkDown");
}
unlink("error_log");

if($text == "hi"){
$m = $bot->sendMessage($chat_id, "<b>Hello</b> <a href='tg://user?id=$chat_id'>$firstname</a> !\n<b>Special Thanks for using iNeoTeam Telegram Bot Class.</b>.", "HTML", true);
sleep(3);
$bot->pinMessage($chat_id, $message_id = $m, $notification = null)
}
?>
