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
$inputType	= $bot->InlineQuery("data");
$id	= $bot->InlineQuery("id");
if($text == "/start"){
    $r = $bot->sendMessage($chat_id, "<b>Hello</b> <a href='tg://user?id=$chat_id'>$firstname</a>.", "HTML", true);
	sleep(2); // for example
$bot->pinMessage($chat_id, $message_id = $r->result->message_id, $notification = null);
	$bot->sendMessage($chat_id, "<b>New class loaded successfully.</b>", "HTML", true, $message_id);
}

$inline_query_id = $bot->UpdateType($id);

$data = [[
                'type' => 'article',
                'id' =>base64_encode(rand(5,555)),
                'thumb_url'=>"https://telegra.ph/file/9a0259e325f83b1a050ce.jpg",
                'title' => "title",
                'description'=>"dec",
                'url'=> "https://www.google.com",
                'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "Message"],
                'reply_markup' => [
                'inline_keyboard' => [
                        [
                            ['text' => "ok", 'switch_inline_query' => "switch"],['text' => "ok", 'switch_inline_query' => "switch"]
                        ]]]
            ],[
                'type' => 'article',
                'id' =>base64_encode(rand(5,555)),
                'thumb_url'=>"https://telegra.ph/file/749c791efc314b97bc1f7.jpg",
                'title' => "Title2",
                'description'=>"dec2",
                'url'=> "https://www.google.com",
                'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "hello"],
                'reply_markup' => [
                'inline_keyboard' => [
                        [
                            ['text' => "ok", 'switch_inline_query_current_chat' => "switch"],['text' => "ok", 'switch_inline_query_current_chat' => "switch"]
                        ]]]
            ]];
if($inputType =="hi"){
AnswerInlineQuery($inline_query_id, $data);
}
unlink("error_log");
?>
