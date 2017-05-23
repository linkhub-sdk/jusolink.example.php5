<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../Example.css" media="screen" />
		<title>주소링크 SDK PHP 5.X Example.</title>
	</head>
<?php
	include 'common.php';

	// 잔여포인트 조회

	try {
		$remainPoint = $jusolinkService->GetBalance();
	}
	catch(JusolinkException $pe) {
		$code = $pe->getCode();
		$message = $pe->getMessage();
	}
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>잔여포인트 확인 테스트</legend>
				<ul>
					<?php
						if(isset($remainPoint)) {
					?>
							<li>잔여포인트 : <?php echo $remainPoint ?></li>
					<?php
						} else {
					?>
							<li>Response.code : <?php echo $code ?> </li>
							<li>Response.message : <?php echo $message ?></li>
					<?php
						}
					?>
				</ul>
			</fieldset>
		 </div>
	</body>
</html>
