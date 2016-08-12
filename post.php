<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posting New Topic - The Community Forum</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	<script type="text/javascript" async="" src="java_for_blog.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" defer=""></script>
	<script language="JavaScript" type="text/javascript" src="forum1_global.js" defer=""></script>
		<link href="blogcss.css" rel="stylesheet" type="text/css">
		<link href="blog2.php" rel="blog" type="text/html">

	<link href="forum1_global.css" rel="stylesheet">
	<link href="content.css" rel="thing" type="text/css">
	<link href="printadd.html" rel="comments" type="text/html">
	<script language="JavaScript" type="text/javasript" src="java_for_blog.js" defer=""></script>
	<script language="JavaScript" type="text/javasript" src="spellChecker.js" defer=""></script>
	<script language="JavaScript" type="text/javascript">
		var global_hash = {AppId : '', perm_view_profiles : '1', forum_embed_url : '', date_format : '3', display_time : '0', uid : '206075', forum_SSO_login_url : '', less_variables : ''};
	
		var	isPostRequest = 0;
	</script>
	
<body class="  nolinks">
	<div id="fb-root"></div>
	
	
		<div class="header-wrapper">
		
			<header id="forum_header_fixed" class="fixed-header">
				<div class="container">
					<div class="nav-main-container col-xs-10">
						<div class="nav-main">
							<div class="push-panel">
								<ul class="dropdown-menu left" role="menu">
									<li><a href="/" data-original-title="" title="">Our Discussions</a></li>	
								</ul>
								<h3>
									<a href="/" data-original-title="" title="">
									
										Join the Discusison
									
									</a>
								</h3>
							</div>
						</div>
					</div>
				
				</div>
			</header>
		</div>
		<noscript>
			&lt;br/&gt;&lt;div class="alert alert-danger text-center"&gt;Note: Your browser does not have JavaScript enabled. Many features may not work properly without it. Please enable JavaScript in your browser settings.&lt;/div&gt;
		</noscript>
		<div id="slide-panel">
			<ul class="slide-panel-content">	
				
				<li id="latest_topics_show">
					<a href="/latest" data-original-title="" title="">
						<small class="glyphicon glyphicon-pencil text-muted">&nbsp;</small> Our Discussion</a>
				</li>
				<hr>
				<li id="search_link" class="push">
					<a href="/search" data-original-title="" title="">
						<small class="glyphicon glyphicon-search text-muted">&nbsp;</small> Search</a>
				</li>
			</ul>
		</div>
		<div class="main-container">
		
		
		
		
<!-- Compose new Topic -->

<script language="javascript" type="text/javascript">
	var tool="mb";
	global_hash['maximum_poll_options'] = '0';
</script>
<div class="container content-panel">
	
	<div id="posts-list">
	
		<div class="col-xs-12 first-post preview-post">
			<span class="pull-left post-author">
				<span class="post-arrow"></span>
			</span>
	<form method="post" id="PostTopic" action="/post/addmessage" name="PostTopic" class="form-horizontal" role="form">
		<div class="pull-left post-body-wrapper">
		  	<div class="post-body pull-left">
				<div role="tabpanel">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#topic-details" aria-controls="topic-details" role="tab" data-toggle="tab" data-original-title="" title="">Your Post</a></li>
					
	                  </ul>
	                  <!-- Tab panes -->
				<div class="tab-content">
	                <div role="tabpanel" class="tab-pane active" id="topic-details">
						<div class="panel panel-default">
	                        <div class="panel-body table-responsive">
									<div class="form-group">
										<label class="col-sm-5"></label>
									</div>
									  <div class="form-group">
										<label class="col-md-2 control-label">Title</label>
										<div class="col-md-9">
											<form action="blog2.php" method="post">
												<input class="form-control" type="text" name="subject" maxlength="150" value="">
											</form>
										</div>
									  </div>
<!--THIS IS FOR THE CONTENT INPUT-->
									<div class="form-group">
										<label for="inputsign" class="col-md-2 control-label">Content</label>
									<div class="col-md-9">
										<div class="hdx"><textarea name="comments_0" cols="55" rows="15"></textarea></div>
										<textarea id="message" name="message" class="mceEditor form-control" cols="65" rows="15" wrap="hard" tabindex="" tindex="" data-easycode="checked" data-smilies="checked" data-block_html="" data-tinymce-focus="" data-spellcheck="checked" data-objname="message" data-insert-image-btn="" data-wysiwyg="both" data-toolbarcompatible="1" aria-hidden="true" style="display: none;"></textarea>
										<span role="application" aria-labelledby="message_voice" id="message_parent" class="mceEditor defaultSkin">
											<span class="mceVoiceLabel" style="display:none;" id="message_voice">Rich Text Area</span>
											<table role="presentation" id="message_tbl" class="mceLayout" cellspacing="0" cellpadding="0" style="width: 95%; height: 314px;">
												<tbody>
													<tr role="presentation" class="mceFirst">
														<td class="mceToolbar mceLeft mceFirst mceLast" role="presentation">
															<a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" onfocus="tinyMCE.getInstanceById('message').focus();"><!-- IE --></a>
														</td>
													</tr>
													<tr>
														<td class="mceIframeContainer mceFirst mceLast">
															<div class="form-group">
															<!--TEXT BOX-->
																<form action="blog2.php" method="post">
																	<textarea class="form-control" type="text" name="post" id="message_ifr" style="height: 270px; display: block;" wrap="hard" value="">
																	</textarea>
																	<span class="col-md-10 col-md-offset-2">
																		<input type="submit" name="submit" class="btn btn-primary" id="post_submit" value="Post">
																	</span>
																</form>
																<span class="col-md-10 col-md-offset-2">
																	<form method="link" action="file:///C:/Users/Girls%20Who%20Code/Documents/final%20prject/blog2.php">
																		<input type="submit" class="bd-wrapper btn btn-subtle" name="cancel" id="cancel_post" value="Cancel">
																	</form>
																</span>
															</div>
														</td>
													</tr>
													<tr class="mceLast">
														<td class="mceStatusbar mceFirst mceLast">
															<div id="message_path_row" role="group" aria-labelledby="message_path_voice">
																<span id="message_path_voice">Path</span>
																<span>: </span><span id="message_path"></span>
															</div>
															<a id="message_resize" href="java_for_blog.js" href="forum1_global.js" onclick="return false;" class="mceResize" tabindex="-1"></a>
														</td>
													</tr>
												</tbody>
											</table>
										</span>
									</div>
									
										<!-- Load plupload and all it's runtimes -->
										<script language="javascript" type="text/javascript" src="java_for_blog.js" defer=""></script>
										<script type="text/javascript">
											var forum			 = '0';
											var item_id			 = '';
											var timestamps		 = '1470758317';// using FORM timestamps to view attachments properly in case of previewing a message
											var file_types  	 = 'bmp,doc,docx,gif,jpe,jpeg,jpg,pdf,png,rtf,txt,xls,xlsx,zip';
											var file_upload		 = '0'; // variable to count already attached files
											var attachment_count =  file_upload;
											var max_file_size  	 = '51200';
											var type 			 = '9'; // initialized type value with 9 for inline item
										</script>
								  </div>
		<!--CONTENT ENDS-->
								  
									 
											<hr>        
											
		<!-- TO POST AND CANCEL POST-->
								
	                            <div class="form-group">
	                              <label class="col-xs-2"></label>
	                            </div>
								
								
								<input type="hidden" name="id" value="0">
								<input type="hidden" name="pid" value="0">
								<input type="hidden" name="referral" value="https://britthosty.discussion.community/" id="referral">
								<input type="hidden" name="user_id" value="4615614">
								<input id="attachment_ids" type="hidden" name="attachment_ids" value="">
								<input id="uncheck_attachment_ids" type="hidden" name="uncheck_attachment_ids" value="">
								<input type="hidden" name="done" value="1">
								<input type="hidden" name="cist" value="">
								<input type="hidden" name="searchid" value="">
								<input type="hidden" name="trail" value="">
								<input type="hidden" name="edit" value="" id="edit_post">
								<input type="hidden" name="action" value="addmessage">
								<input type="hidden" id="timestamps" name="timestamps" value="1470758317">
								<input type="hidden" name="threadid" value="">
								<input type="hidden" id="postpreview" name="postpreview" value="0">
								
								
							</div>
	                    </div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</form>
	</div>
	</div>

<!--Insert image dialog box-->

	
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
</body>
</html>