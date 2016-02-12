/* Scripts
*/

$(document).ready(function(){

  // Add text and tabs to code snippet And 'Notes' title text to notes box
  $('.pattern__code').prepend('<div class="pattern__code--header">Code</div><div class="pattern__code--tabs"><p class="pattern__code--title-html">HTML</p><p class="pattern__code--title-css">CSS</p><p class="pattern__code--title-sass">Sass</p></div>');
  $('.pattern__notes').prepend('<div class="pattern__code--header">Notes</div>');

  $('.pattern__code--header').click(function(){
    $(this).siblings('code').removeClass('show-children');
    $(this).siblings('.pattern__code--tabs').children().toggleClass('show-children');

    // Notes show
    $(this).siblings('p').toggleClass('show-children');
  });

  // Show html and css tabs on click
  $('.pattern__code--title-html').click(function(){
    $(this).parent().siblings('code').removeClass('show-children');
    $(this).parent().siblings('.pattern__code--html').addClass('show-children');
  });
  $('.pattern__code--title-css').click(function(){
    $(this).parent().siblings('code').removeClass('show-children');
    $(this).parent().siblings('.pattern__code--css').addClass('show-children');
  });
  $('.pattern__code--title-sass').click(function(){
    $(this).parent().siblings('code').removeClass('show-children');
    $(this).parent().siblings('.pattern__code--sass').addClass('show-children');
  });

  // Resize buttons on click
  $('.resize-pattern__button').click(function(){

    // Add class if a resize button has been pressed. Which aligns content to center
    $('.sg-main').addClass('body-resized');

    // If class exists then resize the body to the text in the button.
      if($('.sg-main').hasClass('body-resized')){

    // Create variable with width value from button
          var resize_width = $(this).text();

    // Resize width using resize_width variable
          $('.sg-main').width(resize_width);
    }

    // Check if the 'full' / reset button has been pressed. If so remove the class that centers content and assign css to normal
    if($(this).hasClass('resize-full')){
      $('.sg-main').removeClass('body-resized');

    // If sidebar has become a mobile menu on screen then auto width
        if(screen.width < 1024){
          $('.sg-main').width('auto');
        }else{
    // Else reset to the full width css
          $('.sg-main').width('80%');
          $('.sg-sidebar').css('display', 'block');
        }
      }

    // Working out available space while sidebar is present. If space is not enough for the body to resize then remove sidebar
    if(screen.width > 1024){
        // Take into account the 20% for the sidebar, which will be an extra 10% due to the class body-resized centering the main container
        var available_space = $('.sg-wrapper').width() * 0.7;

        // Check the current width of the body
        var body_width = $('.sg-main').width();

        // Debugging width values
        // console.log('body '+body_width);
        // console.log('space ' +available_space);

        // If available_space < body_width then the main content will overlap the side navigation. Therefore remove sidebar
            if(available_space < body_width){
              // If class exists then the full/reset button has not been pressed. As the 'full' button results in a width percentage and therfore not overlap
                if( $('.sg-main').hasClass('body-resized') ){
                  $('.sg-sidebar').css('display', 'none');
                }
            }else{
        // If space has changed and is now available the display sidebar
              $('.sg-sidebar').css('display', 'block');
            }

    }
  });
});
