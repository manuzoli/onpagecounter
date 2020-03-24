<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/design.css" media="all">
		<title>OnPage Counter</title>
	</head>
	<body>
		<div class="module">
		<h1>OnPage Counter <sup>SuperBeta</sup></h1>
			<div class="inner">
				This tool is a very simple visitor counter that tracks visits for a specific page. <br> <br>
	The counter can be freely styled but is not hardened against manipulation attempts. A somewhat experienced coder can manipulate the viewcount. But i guess this is a common flaw of trackers of this kind.
				
				<div class="example">
					This page was visited by 
				<script async="" id="bh-dev-counter-script" src="https://counter.iload.at/js/widget.js" data-uid="iload" data-renderElement="true" data-start="30"></script>
	<span id="bh-dev-counter-element"></span> awesome people
				</div>
				
				<hr/>
				<br>
				<b>Documentation:</b><br>
				Please embed the following code in your website. Please do not change the IDs.
				<div class="code">
					&lt;script async=&quot;&quot; id=&quot;bh-dev-counter-script&quot; src=&quot;<url></url>js/widget.js&quot; data-uid=&quot;<?php echo time(); ?>&quot; data-start=&quot;30&quot;&gt;&lt;/script&gt;<br><br>  &lt;span id=&quot;bh-dev-counter-element&quot;&gt;&lt;/span&gt;
				</div>
				
				<br>
				
				<b>data-uid:</b> Set a unique UID. If no uid is specified, the URL of the page is used as the identifier<br><br>
				<b>data-start:</b> Optionally enter a start value here. This is added to the displayed count.<br><br>
			</div>
		</div>
	</body>
</html>
<script>
	document.querySelector('url').innerHTML = window.location.href;
</script>
	