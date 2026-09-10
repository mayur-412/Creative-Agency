

/* COUNTER JS start */

var a = 0;

jQuery(window).scroll(function () {

    if (!jQuery("#about-counter").length) return;

    var oTop = jQuery("#about-counter").offset().top - window.innerHeight;

    if (a == 0 && jQuery(window).scrollTop() > oTop) {

        jQuery(".counter").each(function () {

            var jQuerythis = jQuery(this),
                countTo = jQuerythis.attr("data-number");

            jQuery({
                countNum: 0
            }).animate({

                countNum: countTo

            },{

                duration:1500,
                easing:"swing",

                step:function(){
                    jQuerythis.text(Math.floor(this.countNum));
                },

                complete:function(){
                    jQuerythis.text(this.countNum);
                }

            });

        });

        a = 1;

    }

});

  document.addEventListener(
                "DOMContentLoaded", () => {
                    new Mmenu( "#menu", {
                       "offCanvas": {
                          "position": "left"
                       },
                       "theme": "light",
                       "navbars": [
                          {
                             "position": "top",
                             "content": [
                                "searchfield"
                             ]
                          }
                       ]
                    });
                }
            );
jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    // autoplay: true,
    // autoplayTimeout: 3000,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        640:{
            items:2
        },
        980:{
            items:3
        }
    }
})


// about-page js


/* services banner section start */

jQuery(function(jQuery){

    jQuery('.banner-play-btn').magnificPopup({
        type:'iframe'
    });

});
/* portfolio tab script start */

// Show the first tab and hide the rest
jQuery('.portfolio-tabs ul li:first-child').addClass('active');
jQuery('.portfolio-content').hide();
jQuery('.portfolio-content:first').show();

// Click function
jQuery('.portfolio-tabs ul li').click(function(){
  jQuery('.portfolio-tabs ul li').removeClass('active');
  jQuery(this).addClass('active');
  jQuery('.portfolio-content').hide();
  
  var activeTab = jQuery(this).find('a').attr('href');
  jQuery(activeTab).fadeIn();
  return false;
});


jQuery('.services-filter li:first-child').addClass('active');
jQuery('.services-grid').hide();
jQuery('.services-grid:first').show();

// Click function
jQuery('.services-filter li').click(function(){
  jQuery('.services-filter li').removeClass('active');
  jQuery(this).addClass('active');
  jQuery('.services-grid').hide();
  
  var activeTab = jQuery(this).find('a').attr('href');
  jQuery(activeTab).fadeIn();
  return false;
});


jQuery('.gallery-filter-tabs ul li:first-child').addClass('active');
jQuery('.gallery-filter-grid').hide();
jQuery('.gallery-filter-grid:first').show();

// Click function
jQuery('.gallery-filter-tabs ul li').click(function(){
  jQuery('.gallery-filter-tabs ul li').removeClass('active');
  jQuery(this).addClass('active');
  jQuery('.gallery-filter-grid').hide();
  
  var activeTab = jQuery(this).find('a').attr('href');
  jQuery(activeTab).fadeIn();
  return false;
});


jQuery('.blog-tabs ul li:first-child').addClass('active');
jQuery('.blog-tab-content').hide();
jQuery('.blog-tab-content:first').show();

// Click function
jQuery('.blog-tabs ul li').click(function(){
  jQuery('.blog-tabs ul li').removeClass('active');
  jQuery(this).addClass('active');
  jQuery('.blog-tab-content').hide();
  
  var activeTab = jQuery(this).find('a').attr('href');
  jQuery(activeTab).fadeIn();
  return false;
});



/* portfolio tab script end */

jQuery(document).ready(function(jQuery){
    jQuery('.blog-tab-btn').on('click',function(){
        var tabId = jQuery(this).attr('data-tab');
        jQuery('.blog-tab-btn').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.blog-tab-content').removeClass('active');
        jQuery('#' + tabId).addClass('active');
    });
});


jQuery(document).ready(function (jQuery) {

    jQuery('.gallery-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });

});

jQuery(function(jQuery){

    jQuery('.contact-faq-content').hide();

    jQuery('.contact-faq-item.active .contact-faq-content').show();

    jQuery('.contact-faq-title').click(function(){

        var parent=jQuery(this).parent();

        if(parent.hasClass('active')){

            parent.removeClass('active');
            parent.find('.contact-faq-content').stop(true,true).slideUp(300);
            parent.find('i')
                  .removeClass('fa-minus')
                  .addClass('fa-plus');

        }else{

            jQuery('.contact-faq-item').removeClass('active');
            jQuery('.contact-faq-content').stop(true,true).slideUp(300);
            jQuery('.contact-faq-title i')
                  .removeClass('fa-minus')
                  .addClass('fa-plus');

            parent.addClass('active');
            parent.find('.contact-faq-content').stop(true,true).slideDown(300);
            parent.find('i')
                  .removeClass('fa-plus')
                  .addClass('fa-minus');

        }

    });

});