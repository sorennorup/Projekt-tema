// This is javascript code that interacts with the menu class
   $ = jQuery;
   
   
   sideBarMenuHover = $(function(){
    
     var hoverd_item;
    $('.hover-overlay').hide();
    jQuery(".sub").hide();
    var parent_item = $('.item-animate-sidebar');
      parent_item.addClass('up');
      
      parent_item.mouseenter(function(){
          if($(this).hasClass('up')){
          arrowPoint('down',this);
          //$(this).unbind('mouseenter mouseleave');
          $(this).addClass('down').removeClass('up');
          hoverd_item = jQuery(this).find('ul');
          subMenuSlideDown(hoverd_item,'slow');
          }
          
        });
      parent_item.mouseleave(function(){
          if($(this).hasClass('down')){
          arrowPoint('up',this);
          //$(this).unbind('mouseenter mouseleave');
          $(this).addClass('up').removeClass('down');
          hoverd_item = jQuery(this).find('ul');
          subMenuSlideUp(hoverd_item,'slow');
          }
        
        
        });
        
    
     });
    
    

 
  
   mainDropDownMenu = $(function(){ // A menu using accordion functionality with mouseover when open and click when closed
    // hide the submenu items
    jQuery(".sub").hide();
    var parent_item = $('.item-animate-main-menu');
      parent_item.hover(function(){
        
          arrowPoint('down',this);
          var clicked_item = jQuery(this).find('ul');
          subMenuSlideDown(clicked_item,'slow');
        })
      .mouseleave(function(){
        
          arrowPoint('up',this);
          var clicked_item = jQuery(this).find('ul');
          subMenuSlideUp(clicked_item,'slow');
 
            });
     });
   mobileMenu = $(function(){
      $('.icon').click(function(){
        
        $(".header-menu").addClass('responsive');
        
        });

   });
    function subMenuSlideDown(menu_obj,tempo){
      menu_obj.stop().slideDown(tempo).show().removeClass('folded').addClass('unfolded');
      
    }
     
    function subMenuSlideUp(menu_obj,tempo){
      menu_obj.stop().slideUp(tempo).removeClass('unfolded').addClass('folded');
      
    }
     
    function arrowPoint(direction,obj){
       if(direction == 'down'){
         $(obj).find('span').removeClass('arrow-up').addClass('arrow-point-down');
       }
         else if(direction == 'up'){
           $(obj).find('span').removeClass('arrow-point-down').addClass('arrow-up');
         }
       }
       //Hover effect on frontpage news
   /*  hoverEffect = $(function(){
        var height;
        
        $('.hover-overlay').hide();
        $('.card-front-page a')
        .mouseenter(function(e){
           e.preventDefault();
           height = $(this).height();
           $(this).find('.hover-overlay')
            .stop( true)
            .show()
            .animate({height:height+'px'},500,"linear"
                     
                     );
             });
            
        $('.card-front-page a').mouseleave(function(e){
            e.preventDefault();
            $('.hover-overlay')
             .stop(true)
             .animate({height:'0px'},500,"linear",
             
            function(){
                $(this).hide();
                
            }); 
        });
     

     });
        
       */
   stickyHeader = $(function(){
     if($(window).width() < 600){
      $(window).scroll(function(){
        
        
        $('.mobile-logo').hide();
       
      
        if($(window).scrollTop()< 300){
            $('.mobile-logo').show();
       
        }
      
        
        });
     }
        
       
       
      
        
       
   
    
    
    
   });
    
    
    

   
    