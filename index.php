<?php

echo "hello beijing1";

echo "hello beijing2";
echo "hello beijing3";
echo "hello beijing4";

$a = 1;
var_dump($a?$a:false);


$strtest = "vt:24.5,t1:55";

$pregstr = "/vt:([0-9]+\.[0-9]+)/";

if(preg_match_all($pregstr,$strtest,$matchArray)){

var_dump($matchArray);

}

/*$strtest = “yyg中文字符yyg”;

$pregstr = "/[\x{4e00}-\x{9fa5}]+/u";

if(preg_match($pregstr,$strtest,$matchArray)){

echo $matchArray[0];

}*/

$strtest = "京a12345";

$pregstr = "/^[\x{4e00}-\x{9fa5}][A-Za-z]\s?[A-Za-z0-9]{4}[\x{4e00}-\x{9fa5}A-Za-z0-9_]$/u";

$checkcar = preg_match($pregstr, $strtest);

print_r($checkcar);

exit;
echo (strtotime("2012-09-25 23:11:50")-strtotime("2012-09-24 17:24:23"))/60;

$a=3;
$b=5;
if($a=5 || $b=7)
{
$a++;
$b++;
}
echo $a ." ".$b;


$i=1;
while ($i<=10)
{
echo "the number is $i <br>";
$i++;
}
$ssd=5;
echo "$ssd";
/*$count = 0;
if((4 < -18) || ('' < -18)) {
	$count = 1;
}
print_r($count);

echo strtoupper("京ak12345");

$ch = curl_init();
curl_setopt ( $ch, CURLOPT_URL, 'www.webxml.com.cn' );
curl_setopt ( $ch, CURLOPT_HEADER, 0 ); //设置是否输出头部
curl_setopt ( $ch, CURLOPT_NOBODY, 0 ); //设置是否输出body部分
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_POST, '/WebServices/WeatherWebService.asmx' );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, '' );
curl_setopt ( $ch, CURLOPT_HTTPHEADER, array("appId:B03F40ACD5324CB2E040010A15070538"));
curl_setopt ($ch, CURLOPT_TIMEOUT, 10);
$_result = curl_exec ( $ch );
*/
print_r($_result);exit;


$obj = new stdClass();
$obj->a = "wei";
echo isset($obj->b);exit;


echo 160/300;
echo "<pre>";
echo 8/15;
exit;
echo strrpos("1000100206","100010");exit;


$yesterday = date("Y-m-d",strtotime("-1 day"));
$y=date('Y',strtotime($yesterday));
$m=date('m',strtotime($yesterday));
$fule_params["from"] = date('Y-m-d H:i:s',mktime(0,0,0,$m-1,01,$y));
$fule_params["to"] = date('Y-m-d H:i:s',mktime(0,0,0,$m,01,$y));


function mFristAndLast($y='',$m=''){
		if($y=='') $y=date('Y');
		if($m=='') $m=date('m');
		$m=sprintf("%02d",intval($m));
		$y=str_pad(intval($y),4,"0",STR_PAD_RIGHT);
		$m>12||$m<1?$m=1:0;
		$firstday=strtotime($y.$m."01000000");
		$firstdaystr=date("Y-m-01",$firstday);
		$lastday = strtotime(date('Y-m-d 23:59:59', strtotime("$firstdaystr +1 month -1 day")));
		return array("firstday"=>$firstday,"lastday"=>$lastday);
}
$user = mFristAndLast(2012,06);
var_dump($fule_params);
var_dump($user);
$fromtime = date('Y-m-d H:i:s',$user['firstday']);
$endtime = date('Y-m-d H:i:s',$user['lastday']);

var_dump($fromtime);
var_dump($endtime);