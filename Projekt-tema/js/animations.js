 $ = jQuery;
 
 focus_hovered = $(function(){
     
    $('.card-img-top').scroll(function(){
        
        $(this).stop().animate({
            width:"105%"
        },1000);
            
            }).mouseleave(function(){
         
        $(this).stop().animate({
            width:"100%"
        },1000);
        });
        
        });
   sticky_header = $(function(){
    $('.sticky-header').hide();
         if($(window).width() > 600){
         $(window).scroll(function(){
            if($(window).scrollTop()> 200){
            $('.sticky-header').stop().slideDown();
            
       
        }
        else {
                 $('.sticky-header').slideUp().fadeOut();
            }
        });
         }
  
    });
  slide_in_text = $(function(){
    // get the topposition of the elements after the subheader divs
    var row_top = top_off_main_row_class();
    alert(row_top);
    
    $(window).load(function(){
      
       $('.left-widget-text').addClass('onload');
       $('.right-widget-text').addClass('onload');
       
        });
   $(window).scroll(function(){
        
       if($(this).scrollTop() < row_top){
          
          $('.left-widget-text').addClass('onload');
          $('.right-widget-text').addClass('onload');
       }
       else if($(this).scrollTop()>row_top){
          $('.left-widget-text').removeClass('onload');
          $('.right-widget-text').removeClass('onload');
       }

      });

    });
  // get the topposition of the elements after the subheader divs
  function top_off_main_row_class(){
   //var pos = $('.main-row').offset();
   var pos = document.getElementsByClassName('main-row');
   
   return pos[0].offsetTop;
  }
   
