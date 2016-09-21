// invoke the carousel
$('#myCarousel').carousel({
  interval: 4000
});

/* SLIDE ON CLICK */ 

$('.carousel-linked-nav > li > a').click(function() {

    // grab href, remove pound sign, convert to number
    var item = Number($(this).attr('href').substring(1));

    // slide to number -1 (account for zero indexing)
    $('#myCarousel').carousel(item - 1);

    // remove current active class

    $('.carousel-linked-nav .active > a').removeClass('active');

    // add active class to just clicked on item
	$(this).html('<img src="../img/overdot.png" width="14" height="12">');
    $(this).parent().addClass('active');

    // don't follow the link
    return false;
});

/* AUTOPLAY NAV HIGHLIGHT */

// bind 'slid' function
$('#myCarousel').bind('slid', function() {

    // remove active class
	$('.carousel-linked-nav .active > a').html('<img src="../img/dot.png" width="14" height="12">');
    $('.carousel-linked-nav .active').removeClass('active');

    // get index of currently active item
    var idx = $('#myCarousel .item.active').index();

    // select currently active item and add active class
    $('.carousel-linked-nav li:eq(' + idx + ')').addClass('active');
	$('.carousel-linked-nav li:eq(' + idx + ') > a').html('<img src="../img/overdot.png" width="14" height="12">');	
	

});