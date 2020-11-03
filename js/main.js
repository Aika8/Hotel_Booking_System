
'use strict';

(function ($) {


    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
		Date Picker
	--------------------*/
    $(".datepicker-1").datepicker();
    $(".datepicker-2").datepicker();

    /*------------------
		Nice Selector
	--------------------*/
    $('.suit-select').niceSelect();


    /*------------------
        Room Pic Slider
    --------------------*/
    $(".room-pic-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: false,
        navText: ['<i class="lnr lnr-arrow-left"></i>', '<i class="lnr lnr-arrow-right"></i>'],
        smartSpeed: 800,
        autoplay: false,
    });

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    /*------------------
        Magnific Popup
    --------------------*/
    $('.pop-up').magnificPopup({
        type: 'iframe'
    });



})(jQuery);


    /*------------------
        Pool Slider
    --------------------*/


    $.global = new Object();

    $.global.item = 1;
    $.global.total = 0;
    
    $(document).ready(function() 
        {
        
        var WindowWidth = $(window).width();
        var SlideCount = $('#slides li').length;
        var SlidesWidth = SlideCount * WindowWidth;
        
       $.global.item = 0;
        $.global.total = SlideCount; 
        
        $('.slide').css('width',WindowWidth+'px');
        $('#slides').css('width',SlidesWidth+'px');
    
       $("#slides li:nth-child(1)").addClass('alive');
        
      $('#left').click(function() { Slide('back'); }); 
      $('#right').click(function() { Slide('forward'); }); 
            
      });
    
    function Slide(direction)
        {
       
        if (direction == 'back') { var $target = $.global.item - 1; }
        if (direction == 'forward') { var $target = $.global.item + 1; }  
        
        if ($target == -1) { DoIt($.global.total-1); } 
        else if ($target == $.global.total) { DoIt(0); }  
        else { DoIt($target); }
        
        
        }
    
    function DoIt(target)
      {
       
        var $windowwidth = $(window).width();
        var $margin = $windowwidth * target; 
        var $actualtarget = target+1;
        
        $("#slides li:nth-child("+$actualtarget+")").addClass('alive');
        
        $('#slides').css('transform','translate3d(-'+$margin+'px,0px,0px)');	
        
        $.global.item = target; 
        
      $('#count').html($.global.item+1);
        
      }

    /*------------------
    Login and Register Form
    --------------------*/

    $('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
        var $this = $(this),
            label = $this.prev('label');
      
            if (e.type === 'keyup') {
                  if ($this.val() === '') {
                label.removeClass('active highlight');
              } else {
                label.addClass('active highlight');
              }
          } else if (e.type === 'blur') {
              if( $this.val() === '' ) {
                  label.removeClass('active highlight'); 
                  } else {
                  label.removeClass('highlight');   
                  }   
          } else if (e.type === 'focus') {
            
            if( $this.val() === '' ) {
                  label.removeClass('highlight'); 
                  } 
            else if( $this.val() !== '' ) {
                  label.addClass('highlight');
                  }
          }
      
      });
      
      $('.tab a').on('click', function (e) {
        
        e.preventDefault();
        
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        
        var target = $(this).attr('href');
      
        $('.tab-content > div').not(target).hide();
        
        $(target).fadeIn(600);
        
      });