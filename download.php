<?php
$str = $_SERVER["QUERY_STRING"];
$url = urlencode('https://gushiyue.github.io/triwin/manifest.php?'.$str);
echo <<<EOT
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>triple win</title>
		<!-- <script>
			var url ="https://gushiyue.github.io/triwin/manifest.plist";
			window.location ="itms-services://?action=download-manifest&url="+ url;
		</script>
		[[UIApplication sharedApplication] openURL:[NSURL URLWithString:@"itms-services://?action=download-manifest&url=https://manifest文件地址"]]; -->
	</head>
	<body>
		<div style="top:5rem">
			<a style="text-align:center" href="itms-services:///?action=download-manifest&url=$url">点我下载</a>
		</div>
	</body>
	
</html>
EOT;
?>