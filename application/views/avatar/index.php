<html>

<!-- 
*************************************************************
1. Set the title
2. Initial stylesheet and javascript libraries 
3. throw a tips if javascript is disabled 
*************************************************************
-->

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>Vimily Demo|Photo Tagging Application</title>

<!-- START: Photo Section -->
<link rel="stylesheet" href="public/css/basic.css" type="text/css" />
<link rel="stylesheet" href="public/css/custom.css" type="text/css" />
<script type="text/javascript" src="public/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="public/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="public/js/jquery.opacityrollover.js"></script>
<!-- END: Photo Section -->

<!-- START: Tag List Section -->
<link rel="stylesheet" href="public/css/scrollBar.css" type="text/css" media="screen"/>	
<script type="text/javascript" src="public/js/jquery.tinyscrollbar.min.js"></script>
<!-- END: Tag List Section -->
	
<!-- START: Photo Tagging -->	
<script type="text/javascript" src="public/js/jsapi"></script>   
<link rel="stylesheet" href="public/css/tag.css" type="text/css" /> 
<!-- END: Photo Tagging -->

<!-- We only want the thunbnails to display when javascript is disabled -->
<script type="text/javascript">
	document.write('<style>.noscript { display: none; }</style>');
</script>
</head>

<!-- 
*************************************************************
1. Set the Advanced Gallery Html Containers
2. Set photo upload section 
3. Set tag list section
*************************************************************
-->
<body>

<!-- 
*************************************************************
Handle photo upload response
*************************************************************
-->    
	<div id="page">
		<div id="container">
			<h1>
				<a>Vimily Demo</a>
			</h1>
			<h2>Photo Tagging Application</h2>

<!-- 
*************************************************************
1.  Photo Contianer  
*************************************************************
-->					
			<!-- START: Advanced Gallery Html Containers -->
			<div id="gallery" class="content">
				<div id="controls" class="controls"></div>
				<div class="slideshow-container" id = 'imgtag'>
					<div id="loading" class="loader"></div>
					<div id="slideshow" class="slideshow"></div>
				</div>
				<div id="caption" class="caption-container"></div>
			</div>
			<div id="thumbs" class="navigation">
				<ul class="thumbs noscript">

					<?php
					
					if($photos == null){?>
						<li>
					<a class="thumb" name="leaf" href="" title="Title #"> 
						
					</a>
						<div class="caption">
							<div class="download">
							</div>
							<div class="image-title">Title #0</div>
							<div class="image-desc">Description</div>
						</div>
					</li>
					<?php } else{
					foreach ($photos as $photo) {
						$photoName = $photo['photoName'];
						$photoId = $photo['photoId'];
					?>
					<li>
					<a class="thumb" name="leaf" href="public/images/<?php echo $photoName?>" title="Title # <?php echo $photoId?>"> 
						<img src="public/thumbs/<?php echo $photoName?>" alt="Title # <?php echo $photoId?>" />
					</a>
						<div class="caption">
							<div class="download">
							</div>
							<div class="image-title">Title #0</div>
							<div class="image-desc">Description</div>
						</div>
					</li>
					<?php 
					}}
					?>
				</ul>
			</div>
			<!-- END: Advanced Gallery Html Containers -->
			
<!-- 
*************************************************************
1.  photo upload section 
*************************************************************
-->			
			<!-- START:  photo upload section  -->
			<div>
			<h2>Upload Your Photo</h2>
			<form id="upload-form"
				action="<?php echo URL::site('avatar/upload') ?>" method="post"
				enctype="multipart/form-data">
				<p>Choose file:</p>
				<p>
					<input type="file" name="avatar" id="avatar" />
				</p>
				<p>
					<input type="submit" name="submit" id="submit" value="Upload" />
				</p>
			</form>
			<form  
				action="<?php echo URL::site('avatar') ?>" method="post"
				enctype="multipart/form-data">
					<input type="hidden" name = "commd" value="interal" />
					<input type="submit" name="submit" id="submit" value="View Photos" />
			</form>
			</div>
			<!-- END:  photo upload section  -->
			
			
<!-- 
*************************************************************
1.  Tag list section
*************************************************************
-->
			<!-- START: Tag list section  -->
			<div>
			<h2>Photo Tag List</h2>
			<div id="scrollbar1">
				<div class="scrollbar">
					<div class="track">
						<div class="barthumb">
							<div class="end"></div>
						</div>
					</div>
				</div>
				<div class="viewport">
					<div class="overview">
						<div id="taglist">
 							<ol>
 								 
							</ol>
						</div>
					</div>
				</div>
			</div>
			</div>
			<!-- END: Tag list section  -->

			<div id="tagit"  style=" display: none;">
				<div class="box"></div>
				<div class="name">
					<div class="text">Type any name or tag</div>
					<input type="text" name="txtname" id="tagname" /><input
						type="button" name="btnsave" value="Save" id="btnsave" /> <input
						type="button" name="btncancel" value="Cancel" id="btncancel" />
				</div>
			</div>
			
			<div style="clear: both;"></div>  
		</div>
	</div>
	
	
<!-- 
*************************************************************
1. Set page footer
*************************************************************
-->
	<!-- START: Page footer -->
	<div id="footer">Vimily Demo Site</div>
	<!-- END: Page footer -->
	
<!-- 
*************************************************************
1.  Main Entry of Jquery
*************************************************************
-->
	
	<script type="text/javascript">	
			var counter = 0;
	   		function fetch_tags(){
		   	
	   		 	$.ajax({
		      	   	 type : "POST",
		           	 data: {'name' : 'name_1'},
		             cache : true,
		           	 url : "tag/fetchtag",
		             success:function (resdata){
						//alert("success : " + resdata);

						data = eval('('+resdata+')');
						//alert(data["status"]);
						//alert("array : " + array=>["status"]);
		            	 if(data["status"] == undefined){
		          			alert("undefined");
		          			return;
		          		 }else{

		            	 for(var i = 0;i < data['length'];i++){
		            		$('#taglist ol').append('<li rel="'+ counter +'"><a class = "xxx">'+ data[i]['tagName'] +'<input type = "hidden" value ="' + data[i]['tagName']  + '"/></a> (<a class="remove">Remove</a>)</li>');
							counter++;
			             }
		          		 }
		             }
		         });
	   		};

	   		/**************************************************************
			* jQuery: Gallery function 
			*
			***************************************************************/
	   		function photoContainer(){
				<!-- START: Gallery Functions-->
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '300px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 6,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
				<!-- END: Gallery Functions-->
	   		}
	   		
			jQuery(document).ready(function($) {
				
				photoContainer();

				/**************************************************************
				* jQuery: TinyScrollBar function 
				*
				***************************************************************/
				<!-- START: TinyScrollBar Functions-->
				$('#scrollbar1').tinyscrollbar();	
				<!-- END: TinyScrollBar Functions-->

				/**************************************************************
				* jQuery: Photo Tagging function 
				*
				***************************************************************/
				<!-- START: Photo Tagging Functions-->
			
			    var mouseX = 0;
			    var mouseY = 0;

			    $("#imgtag").click(function(e){ // make sure the image is click
			      
			      var imgtag = $(this); // get the div to append the tagging list
			      mouseX = e.pageX - $(this).offset().left - 53; // x and y axis
			      mouseY = e.pageY - $(this).offset().top - 53;
				  
			      //alert(mouseX + ", " + mouseY);
			      
			      var $divTigBox = document.getElementById('tagit'); 
			      $('#tagit').remove(); // remove any tagit div first
			      $(imgtag).append($divTigBox);
			      $('#tagit').css({top:mouseY,left:mouseX});
			      $('#tagit').css('display', 'block');;
			      $('#tagname').focus();
			    });

			 	fetch_tags();

			    $('#tagit #btnsave').live('click',function(){
			      $name = $('#tagname').val();
			      //alert('save button');
			      counter++;
			      $('#taglist ol').append('<li rel="'+counter+'"><a class = "xxx">'+$name+'<input type = "hidden" value ="' +  $name + '"/></a> (<a class="remove">Remove</a>)</li>');

			      $('#imgtag').append('<div class="tagview" id="view_'+counter+'"><b>' + $name +  '</b></div>');

				  $mouseY_ = mouseY - 14;
				  $mouseX_ = mouseX - 86;
			      $('#view_' + counter).css({top:($mouseY_),left:($mouseX_)});
			      $('#tagit').fadeOut();		


			      $getSrc = $('#imgtag img').attr('src'); 
			      
			      $.ajax({
			            type : "POST",
			            data: {'tagname': $name, 'tagX': $mouseY_, 'tagY' : $mouseX_, 'photoName': $getSrc, 'commd': 'saveTag'},
			            cache : true,
			            url : "avatar/index"
			        });
			      
			    });

			     $('#tagit #btncancel').live('click',function(){
			      $('#tagit').fadeOut();

			    });

			    $('#taglist li').live('mouseover mouseout',function(event){
			      id = $(this).attr("rel");
			      if (event.type == "mouseover"){
			        $('#view_' + id).show();
			      }else{
			        $('#view_' + id).hide();
			      }
			    });

			    $('#taglist li a.xxx').live('click',function(event){
				      //alert('xxx');
				      $searchTagName = $(this).find("input").attr("value");
				      //alert($searchTagName);
				      $commd = 'searchTag';
				      $.ajax({
				            type : "POST",
				            data: {'commd': $commd, 'searchTagName': $searchTagName},
				            cache : true,
				            url : "avatar/index",
				            success:function (resdata){
									//alert("success : " + resdata);

									var data = eval('('+resdata+')');
									//alert(data[]);
								
					            	 if(data["status"] == undefined){
					          			alert("undefined");
					          			return;
					          		 }else{

					          	
					            	
					            		  var divStr = "<div id='thumbs' class='navigation'>";
										  divStr += "<ul class='thumbs noscript'>";
										 
										  
										  for(var i = 0;i < data['length'];i++){
											  
							            		$old_imagePath = data[i]['photoName'];
							           
							            		$new_imagePath = $old_imagePath.replace("images", "thumbs");
							            		//alert($new_imagePath);
							              divStr += "<li>";
										  divStr += "<a class='thumb' name='leaf' href='" + data[i]['photoName'] +  "' title='Tag #0'>"; 
										  divStr += "<img src='" + $new_imagePath +  "' alt='Tag #0' />";
										  divStr += "</a>";
										  divStr += "<div class='caption'><div class='download'></div><div class='image-title'>Title #0</div>";
										  divStr += "<div class='image-desc'>Description</div></div></li>";

										  }
										  divStr += "</ul></div>";
										  
											$('#thumbs').html(divStr);	
									   		 photoContainer();
						             	
					          		 }
					             }
				      });

					
				});

			    $('#taglist li a.remove').live('click',function(){
			      id = $(this).parent().attr("rel");
			      $(this).parent().fadeOut('slow');
			      $('#view_' + id).remove();
			    });
			    <!-- END: Photo Tagging Functions-->

		        
			});
		</script>
</body>
</html>
