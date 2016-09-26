// invoke the carousel
$('#myCarousel1').carousel({
  interval: 4000
});

$('#myCarousel2').carousel({
  interval: 4000
});

$('#myCarousel3').carousel({
  interval: 4000
});

$(function() {
var w = $(window).width();

if(w > 960){
$("#blog-nano").nanoScroller({ 
	sliderMaxHeight: 11 
});

$("#blog-nano1").nanoScroller({ 
	sliderMaxHeight: 11 
});

$("#blog-nano2").nanoScroller({ 
	sliderMaxHeight: 11 
});
}
});


/* SLIDE ON CLICK */ 

$('.carousel-linked-nav1 > li > a').click(function() {
	
    // grab href, remove pound sign, convert to number
    var item = Number($(this).attr('href').substring(1));

    // slide to number -1 (account for zero indexing)
    $('#myCarousel1').carousel(item - 1);
	
    // remove current active class

    $('.carousel-linked-nav1 li').removeClass('active');
	$('.carousel-linked-nav1 li a').html('<img src="'+base_url+'/img/dot.png" width="14" height="12">');
    // add active class to just clicked on item
	
	$(this).html('<img src="../img/overdot.png" width="14" height="12">');
	
    $(this).parent().addClass('active');
	

    // don't follow the link
    return false;
});

/* AUTOPLAY NAV HIGHLIGHT */

// bind 'slid' function
$('#myCarousel1').bind('slid', function() {
	
    // remove active class
	$('.carousel-linked-nav1 li a').html('<img src="'+base_url+'/img/dot.png" width="14" height="12">');
    $('.carousel-linked-nav1 li').removeClass('active');

    // get index of currently active item
    var idx = $('#myCarousel1 .active').index();
	
    // select currently active item and add active class
    $('.carousel-linked-nav1 li:eq(' + idx + ')').addClass('active');
	$('.carousel-linked-nav1 li:eq(' + idx + ') > a').html('<img src="'+base_url+'/img/overdot.png" width="14" height="12">');	
	

});

$('.carousel-linked-nav2 > li > a').click(function() {
	
    // grab href, remove pound sign, convert to number
    var item = Number($(this).attr('href').substring(1));

    // slide to number -1 (account for zero indexing)
    $('#myCarousel2').carousel(item - 1);
	
    // remove current active class

    $('.carousel-linked-nav2 li').removeClass('active');
	$('.carousel-linked-nav2 li a').html('<img src="'+base_url+'/img/dot.png" width="14" height="12">');
    // add active class to just clicked on item
	
	$(this).html('<img src="../img/overdot.png" width="14" height="12">');
	
    $(this).parent().addClass('active');
	

    // don't follow the link
    return false;
});

/* AUTOPLAY NAV HIGHLIGHT */

// bind 'slid' function
$('#myCarousel2').bind('slid', function() {
    // remove active class
	$('.carousel-linked-nav2 li a').html('<img src="'+base_url+'/img/dot.png" width="14" height="12">');
    $('.carousel-linked-nav2 li').removeClass('active');

    // get index of currently active item
    var idx = $('#myCarousel2 .active').index();
	
    // select currently active item and add active class
    $('.carousel-linked-nav2 li:eq(' + idx + ')').addClass('active');
	$('.carousel-linked-nav2 li:eq(' + idx + ') > a').html('<img src="'+base_url+'/img/overdot.png" width="14" height="12">');	
	

});


$('.carousel-linked-nav3 > li > a').click(function() {
	
    // grab href, remove pound sign, convert to number
    var item = Number($(this).attr('href').substring(1));

    // slide to number -1 (account for zero indexing)
    $('#myCarousel3').carousel(item - 1);
	
    // remove current active class

    $('.carousel-linked-nav3 li').removeClass('active');
	$('.carousel-linked-nav3 li a').html('<img src="'+base_url+'/img/dot.png" width="14" height="12">');
    // add active class to just clicked on item
	
	$(this).html('<img src="../img/overdot.png" width="14" height="12">');
	
    $(this).parent().addClass('active');
	

    // don't follow the link
    return false;
});

/* AUTOPLAY NAV HIGHLIGHT */

// bind 'slid' function
$('#myCarousel3').bind('slid', function() {
    // remove active class
	$('.carousel-linked-nav3 li a').html('<img src="'+base_url+'/img/dot.png" width="14" height="12">');
    $('.carousel-linked-nav3 li').removeClass('active');

    // get index of currently active item
    var idx = $('#myCarousel3 .active').index();
	
    // select currently active item and add active class
    $('.carousel-linked-nav3 li:eq(' + idx + ')').addClass('active');
	$('.carousel-linked-nav3 li:eq(' + idx + ') > a').html('<img src="'+base_url+'/img/overdot.png" width="14" height="12">');	
	

});


