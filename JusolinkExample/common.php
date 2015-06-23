<?php
require_once '../Jusolink/Jusolink.php';

//링크아이디
$LinkID = 'TESTER_JUSO';

//발급받은 비밀키. 유출에 주의하시기 바랍니다.
$SecretKey = 'FjaRgAfVUPvSDHTrdd/uw/dt/Cdo3GgSFKyE1+NQ+bc=';

//통신방식 기본은 CURL , curl 사용에 문제가 있을경우 STREAM 사용가능.
//STREAM 사용시에는 allow_fopen_url = on 으로 설정해야함.
define('LINKHUB_COMM_MODE','CURL');

$jusolinkService = new Jusolink($LinkID,$SecretKey);
?>