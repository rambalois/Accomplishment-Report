<!--Based from Ettric's code in Codepen-->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>test board page</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./boardpageheader.css">
<link rel="stylesheet" href="./home.css">
</head>
<body>
	<div class="header">
		<img class="logo" src="logo.png">
		<h2 class="headertext"> Spark Academy of Global City, Inc.</h2>
		<p class="headertext"> 4th st. GHQ Signal Village, Brgy. Katuparan, Taguig, 1632 Metro Manila</p>
		<p class="logout"><a href="https://www.google.com">Log out</a></p> 
	</div>
<div class="drag-container">
	<ul class="drag-list">
		<li class="drag-column drag-column-on-hold">
			<span class="drag-column-header">
				<h2>To Do</h2>
				<svg class="drag-header-more" data-target="options1" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
			</span>
				
			<div class="drag-options" id="options1"></div>
			
			<ul class="drag-inner-list" id="1">
				<li class="drag-item"></li>
				<li class="drag-item"></li>
			</ul>
		</li>
		<li class="drag-column drag-column-in-progress">
			<span class="drag-column-header">
				<h2>In Progress</h2>
				<svg class="drag-header-more" data-target="options2" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
			</span>
			<div class="drag-options" id="options2"></div>
			<ul class="drag-inner-list" id="2">
				<li class="drag-item"></li>
				<li class="drag-item"></li>
				<li class="drag-item"></li>
			</ul>
		</li>
		<li class="drag-column drag-column-needs-review">
			<span class="drag-column-header">
				<h2>For Review</h2>
				<svg data-target="options3" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
			</span>
			<div class="drag-options" id="options3"></div>
			<ul class="drag-inner-list" id="3">
				<li class="drag-item">hello world</li>
				<li class="drag-item"></li>
				<li class="drag-item"></li>
				<li class="drag-item"></li>
			</ul>
		</li>
		<li class="drag-column drag-column-approved">
			<span class="drag-column-header">
				<h2>Checked</h2>
				<svg data-target="options4" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
			</span>
			<div class="drag-options" id="options4"></div>
			<ul class="drag-inner-list" id="4">
				<li class="drag-item"></li>
				<li class="drag-item"></li>
			</ul>
		</li>
	</ul>
</div>
<!-- partial -->
  <script src='dragula.js'></script><script  src="./script.js"></script>

</body>
</html>
