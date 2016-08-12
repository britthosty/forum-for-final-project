<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Posts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel= "stlyecss" href="blogcss.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" async="" src="//api.viglink.com/api/vglnk.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" defer=""></script>
	<script language="JavaScript" type="text/javascript" src="forum1_global.js" defer=""></script>
	<script language="JavaScript" type="text/javasript" src="java_for_blog.js" defer=""></script>
	<script language="JavaScript" type="text/javasript" src="spellChecker.js" defer=""></script>
	<link href="post.php" rel="comments" type="text/html">
	<link href="content.css" rel="thing" type="text/css">
	<link href="printadd.html" rel="comments" type="text/html">
	
	
    <title>Forum</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script language="JavaScript" type="text/javascript">
	var global_hash = {AppId : '', perm_view_profiles : '1', forum_embed_url : '', date_format : '3', display_time : '0', uid : '206075', forum_SSO_login_url : '', less_variables : ''};
	
	var	isPostRequest = 0;
	
	</script><script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/dojo/1.4.1/dojo/io/script.xd.js"></script>
	<link rel="stylesheet" type="text/css" href="blogcss.css">

	
	<style type="text/css" id="forum_tree-style"> .treeview .list-group-item{cursor:pointer}.treeview span.indent{margin-left:10px;margin-right:10px}.treeview span.icon{width:12px;margin-right:5px}.treeview .node-disabled{color:silver;cursor:not-allowed}.node-forum_tree{}.node-forum_tree:not(.node-disabled):hover{background-color:#F5F5F5;} </style>
</head>
<body class="  nolinks">


	<div id="fb-root"></div>
	
	
	<div class="header-wrapper">
		
		<header id="forum_header_fixed" class="fixed-header">
			<div class="container">
				<div class="nav-main-container col-xs-10">
					<div class="nav-main">
						<div class="push-panel">
							<h3>
								<a href="/" data-original-title="" title="">
									
										Join the Discussion
									
								</a>
							</h3>
						</div>
						<!--header above-->
						
					</div>
				</div>
			<div id="ajax-msg-top" class="ajax-msg-top hidden"><p></p></div>
		</header>
	</div>
	<noscript>
		&lt;br/&gt;&lt;div class="alert alert-danger text-center"&gt;Note: Your browser does not have JavaScript enabled. Many features may not work properly without it. Please enable JavaScript in your browser settings.&lt;/div&gt;
	</noscript>
	<div id="slide-panel">
		<ul class="slide-panel-content">	
			<ul id="forums_toggle_link" class="panel-collapse collapse in">
				<li><i data-toggle="collapse" class="toggleable glyphicon icon-down-dir" data-original-title="" title=""> </i><a href="/categories" data-original-title="" title="" class="active">Discussion Board</a>
					<ul id="542853" class="panel-collapse collapse in">							
						<li>
							<a href="/?forum=542853" data-original-title="" title="">
							Our Discussions</a>					
					
						</li>
					</ul>
				</li>
			</ul>
		</ul>
	</div>
	
	
    <div class="main-container">
		<div class="container content-panel forum-list">
			<div role="tabpanel" class="tab-pane active" id="forums">
				<a id="startTopic" href="post.php" class="pull-right btn btn-uppercase btn-primary" data-original-title="" title=""> Post to our board</a>
				
		
	  <ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#forums" aria-controls="forums" role="tab" data-toggle="tab" data-original-title="" title="">Discussions</a></li>
	  </ul>
		<div class="tab-content">
		<div class="panel panel-default">
			<div class="panel-body table-responsive">
				<ul>
	<!-- forum row start -->
					<li id="forum_542853" class="col-xs-12 ">
						<span class="columns-wrapper">
							<span class="col-xs-7">
								<h3>
									<a href="/?forum=542853" data-original-title="" title=""><span class="forum-title">Our Discussions</span></a>
								</h3>
								<br><br>
							<!-- SHOULD I MAKE A SUBLIST HERE FOR INPUT ???-->
							
								<div class= "well">
									<?php
										if (isset($_POST['submit'])) {
											echo  $_POST['subject'];
											echo $_REQUEST['subject'];
											echo $_POST['post'];
											echo $_REQUEST['post'];

										}
									?>
									<br>
								</div>

							</span>
						</span>
					</li>
	<!-- forum row end -->
				</ul>
			</div>
		</div>
		</div>
			</div>
	
		</div>

	
	<div class="hidden" id="popover_content">
		<div class="popover hovercard" role="tooltip">
			<div class="arrow"></div>
			<h3 class="popover-title"></h3>
			<div class="popover-content">
			</div>
		</div>
	</div>
	<div id="hover_card_content"></div>
	<script type="text/javascript">
		var vglnk = { api_url: '//api.viglink.com/api',
				key: 'ccc2217bc2b75c4bdf5f7e57267f0464' };

		(function(d, t) {
			var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
			s.src = ('https:' == document.location.protocol ? vglnk.api_url :
				'//cdn.viglink.com/api') + '/vglnk.js';
			var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
		}(document, 'script'));
	</script>


<!--Below elemt used to set iframe height for down-sizing-->
	<div data-iframe-height="" style="position: relative"></div>
	<script src="spellChecker.js" defer=""></script>
</div>
	<br><br>
</div>
</body>
</html>