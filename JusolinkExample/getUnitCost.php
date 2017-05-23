<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../Example.css" media="screen" />
		<title>주소검색 SDK PHP 5.X Example.</title>
	</head>
<?php
	include 'common.php';

	// 주소검색 단가 조회

	try {
		$unitCost = $jusolinkService->GetUnitCost();
	}
	catch(JusoLinkException $je) {
		$code = $je->getCode();
		$message = $je->getMessage();
	}
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>주소검색 단가 확인</legend>
				<ul>
					<?php
						if(isset($unitCost)) {
					?>
							<li>검색단가 : <?php echo $unitCost ?></li>
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
