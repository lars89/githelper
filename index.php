<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Git Helper</title>
	<link rel="stylesheet" type="text/css" href="css/ext-all.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script type="text/javascript" src="js/extjs/adapter/ext/ext-base.js"></script>
	<script type="text/javascript" src="js/extjs/ext-all.js"></script>
	<script type="text/javascript" src="js/main.js?1318887521"></script>
</head>
<body>
<h1>Git Helper</h1>
<h2>1. Enter your typo3.org Username</h2>
<input type="text" name="username" id="username" placeholder="Your Username" />
<h2>2. Select Git project</h2>
<div id="projectGrid"></div>
<h2>3. Make sure that git is configured to <a href="http://wiki.typo3.org/Push_%28Git%29#use_pushInsteadOf">push to review.typo3.org instead of git.typo3.org</a>:</h2>
<p><code>
	git config --global url."ssh://<span class="username">&lt;YOUR-USERNAME-HERE&gt;</span>@review.typo3.org:29418".pushInsteadOf git://git.typo3.org
</code></p>
<h2>4. Copy &amp; paste Git commands (line by line):</h2>
<textarea name="output" id="output" rows="40" cols="40" wrap="off"></textarea>
<div id="link"></div>
</body>
</html>

