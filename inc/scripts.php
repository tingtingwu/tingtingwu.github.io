    <script>

    	//nav bar shrink
    	$(window).scroll(function() {
    	    if ($(document).scrollTop() > 50) {
    	        $('nav').addClass('shrink');
    	        $('logo').addClass('shrink');
    	    } else {
    	        $('nav').removeClass('shrink');
    	        $('logo').removeClass('shrink');
    	    }
    	});

    	$(document).ready(function() {

    	    //smoothscroll
    	    $('a[href^="#"]').on('click', function(e) {
    	        e.preventDefault();
    	        $(document).off("scroll");

    	        $('a').each(function() {
    	            $(this).removeClass('active');
    	        })
    	        $(this).addClass('active');
    	    });
    	});

    	$("a[href^='#']").on('click', function(e) {
    	    // prevent default anchor click behavior
    	    e.preventDefault();
    	    // store hash
    	    var hash = this.hash;
    	    // animate
    	    $('html, body').animate({
    	        scrollTop: $(hash).offset().top
    	    }, 300, function() {
    	        // when done, add hash to url
    	        // (default click behaviour)
    	        window.location.hash = hash;
    	    });

    	});

    </script>