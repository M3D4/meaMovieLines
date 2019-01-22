<?php
header('Content-type: application/json;charset=utf-8"');
header('Access-Control-Allow-Origin: *');
$lines_arr = json_decode(file_get_contents("./lines/linesAll.json"),true);
$line = $lines_arr[rand(0,1966)];
$lineNum = count($line['lines']);
$msg = "成功";
$code = "0";
$data = array(
    "title" => $line['title'],
    "line"=>$line['lines'][rand(0,$lineNum-1)],
    "link"=>"http://so.meaying.com/search.php?s=".$line['title']
    );
$arr = array(
    "code" => $code,
    "msg" => $msg,
    "data" => $data
);
echo json_encode($arr);
