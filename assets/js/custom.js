$(document).ready(function() {
    $('.mytext').typed({
        strings: [
            'welcome to our stuff',
            'welcome to iii',
            'welcome to uuuu',
        ],
        typeSpeed : 100,
        loop:true,
    });

    function myscroll(){
        $(".nav-item a[href^='#']").on('click', function(e){
            var id = $(this).attr('href');
            var offset = 40;
            var tar = $(id).offset().top - offset;
            $('body, html').animate({
                scrollTop: tar,
            }, 1000, 'easeInOutExpo');
            e.preventDefault();
        })
    }

    myscroll();
   
})

