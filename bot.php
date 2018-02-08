<?php
$strAccessToken = 'ip73DuNTTqtvZZI3PBZZ5Bv37EnHFluMKnQu91J0YuHi4ftF2YYorQnLhqnhNyQqRRJXvIxZ3dv8VCdMPf+N86gl06g5M7gzty9a/pvf/2IHgbQWUDvyajes+/9L3WtrH3MpIA5xhWx8SlcbG/nsqAdB04t89/1O/w1cDnyilFU=';
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันชื่อ ตามรอย";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันคือตัวช่วยในการติดตามคนหาย";
}else if($arrJson['events'][0]['message']['text'] == "เมนู"){ 
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['template'][0]['type'] = "carousel";
  $arrPostData['template'][0]['columns']['thumbnailImageUrl'] = "https://ibb.co/ejf3rH" ;
  $arrPostData['template'][0]['columns']['imageBackgroundColor'] = "#FFFFFF";
  $arrPostData['template'][0]['columns']['titile'] = "Menu";
  $arrPostData['template'][0]['columns']['text'] = "ฟังก์ชั่นการใช้งาน";
  $arrPostData['template'][0]['columns']['action']['type'] = "postback";
  $arrPostData['template'][0]['columns']['action']['lable'] = "1";
  $arrPostData['template'][0]['columns']['action']['data'] = "action=1&itemid=111";
  $arrPostData['template'][0]['columns']['action']['type'] = "postback";
  $arrPostData['template'][0]['columns']['action']['lable'] = "2";
  $arrPostData['template'][0]['columns']['action']['data'] = "action=1&itemid=111";  
  $arrPostData['template'][0]['columns']['action']['type'] = "uri";
  $arrPostData['template'][0]['columns']['action']['lable'] = "3";
  $arrPostData['template'][0]['columns']['action']['data'] = "https://imgbb.com/";
  
  //$arrPostData['messages'][0]['text'] = "คุณสามารถกดหมายเลขต่างๆ เพื่อเข้าถึงเมนู ดังนี้ 1.ข่าวสาร  2.แจ้งเบาะแส  3.แจ้งคนหาย  4.ขอตำแหน่ง  5.ประกาศคนหาย  6.ลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "คุณกำลังอยู่ที่...";
  $arrPostData['messages'][0]['address'] = "Chulalongkorn university";
  $arrPostData['messages'][0]['latitude'] = 13.738378;
  $arrPostData['messages'][0]['longitude'] = 100.532053;
}else if($arrJson['events'][0]['message']['text'] == "2"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "คุณกำลังอยู่ที่...";
  $arrPostData['messages'][0]['address'] = "Chulalongkorn university";
  $arrPostData['messages'][0]['latitude'] = 13.738378;
  $arrPostData['messages'][0]['longitude'] = 100.532053;
}else if($arrJson['events'][0]['message']['text'] == "3"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "คุณกำลังอยู่ที่...";
  $arrPostData['messages'][0]['address'] = "Chulalongkorn university";
  $arrPostData['messages'][0]['latitude'] = 13.738378;
  $arrPostData['messages'][0]['longitude'] = 100.532053;
}else if($arrJson['events'][0]['message']['text'] == "4"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "คุณกำลังอยู่ที่...";
  $arrPostData['messages'][0]['address'] = "Chulalongkorn university";
  $arrPostData['messages'][0]['latitude'] = 13.738378;
  $arrPostData['messages'][0]['longitude'] = 100.532053;
}else if($arrJson['events'][0]['message']['text'] == "5"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "คุณกำลังอยู่ที่...";
  $arrPostData['messages'][0]['address'] = "Chulalongkorn university";
  $arrPostData['messages'][0]['latitude'] = 13.738378;
  $arrPostData['messages'][0]['longitude'] = 100.532053;
}else if($arrJson['events'][0]['message']['text'] == "6"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "คุณกำลังอยู่ที่...";
  $arrPostData['messages'][0]['address'] = "Chulalongkorn university";
  $arrPostData['messages'][0]['latitude'] = 13.738378;
  $arrPostData['messages'][0]['longitude'] = 100.532053;
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจ คุณสามารถพิมพ์ เมนู เพื่อดูฟังก์ชันการใช้งานของฉัน";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

echo "OK3";
