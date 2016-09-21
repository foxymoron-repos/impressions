$(document).ready(function(){
	$('ul.gallery_options li  a').click(function(){
		
		 $('ul.gallery_options li.active').removeClass('active');
		 $(this).parent().addClass('active'); 
		 
		var id = $(this).attr("rel");
		showgallery(id);
	});
	
	$('.mini-gallery ul.gallery_view_option li a').click(function(){
		
			$('.mini-gallery ul.gallery_view_option li.active').removeClass('active');
		 	$(this).parent().addClass('active');	
		 
		 
			var id = $(this).attr("rel");
			var rowid = $(this).attr("name");
			$("#prod_gallery_view"+rowid).html('<center><img id="gallerytop" src="'+SITE_URL+'img/loader.gif"></center>');
				var aUrl = SITE_URL+"process.inc.php";		
				var aData = "action=getthumbview&id="+id+"&rowid="+rowid;		
								
				$.ajax({
					type: "GET",
					url: aUrl,
					data: aData,
					success: function(data){
						
						//alert(data);
					
						if(data != "")
						{
							$("#prod_gallery_view"+rowid).html(data);
							
							<!--1-->		
							$('#carousel'+rowid).carouFredSel({
								responsive: true,
								circular: false,
								auto: false,
								items: {
									visible: 1
								},
								scroll: {
									fx: 'directscroll'
								}
							});
					
							$('#thumbs'+rowid).carouFredSel({
								responsive: true,
								circular: true,
								infinite: false,
								auto: false,
								prev: '#prev'+rowid,
								next: '#next'+rowid,
								items: {
									visible: {
										min: 2,
										max: 6
									},
									width: 90,
									height: '66%'
								}
							});
					
							$('#thumbs'+rowid+' a').click(function() {
								$('#carousel'+rowid).trigger('slideTo', '#' + this.href.split('#').pop() );
								$('#thumbs'+rowid+' a').removeClass('selected');
								$(this).addClass('selected');
								return false;
							});
							
							
						} else { 
							//alert("cant add data");
						}
						
					}
				
				});	
			
	});
	
});


function showgallery(id){
	
	$("#prod_gallery").html('<center><img id="gallerytop" src="'+SITE_URL+'img/loader.gif"></center>');
	var aUrl = "../process.inc.php";		
	var aData = "action=getthumb&id="+id;		
	//alert(aData);
	
	
	$.ajax({
		type: "GET",
		url: aUrl,
		data: aData,
		success: function(data){
		
			if(data != "")
			{
				
				$("#prod_gallery").html(data);
				
				<!--1-->		
				$('#carousel').carouFredSel({
					responsive: true,
					circular: false,
					auto: false,
					items: {
						visible: 1
					},
					scroll: {
						fx: 'directscroll'
					}
				});
		
				$('#thumbs').carouFredSel({
					responsive: true,
					circular: true,
					infinite: false,
					auto: false,
					prev: '#prev',
					next: '#next',
					items: {
						visible: {
							min: 2,
							max: 6
						},
						width: 90,
						height: '66%'
					}
				});
		
				$('#thumbs a').click(function() {
					$('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
					$('#thumbs a').removeClass('selected');
					$(this).addClass('selected');
					return false;
				});
				
				
			} else { 
				//alert("cant add data");
			}
			
		}
	
	});	
	
	loadGalleryDesc(id);
}

function loadGalleryDesc(id){
		
	var aUrl = "../process.inc.php";		
	var aData = "action=getGalleryDesc&id="+id;		
	//alert(aData);
	$.ajax({
		type: "GET",
		url: aUrl,
		data: aData,
		success: function(data){
		
			if(data != "")
			{				
				$("#gallery_desc").html(data);
				
			} else { 
				//alert("cant add data");
			}
			
		}
	
	});	
}