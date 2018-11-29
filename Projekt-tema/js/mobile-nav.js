var $ = jQuery;

// To do
// Slide menu in, before url is visted on mobile menu
// Close button on mobilemenu

$(document).ready(function(){
    var flag = true;
    $(this).addClass('window-close');
    var screen_width = $(window).width();
    slideOut($(".topnav"),screen_width);
    $(".topnav").hide();
    
    $(".burger").click(function(){
         $(".body-for-mobile").addClass('fade_it');
        $(".topnav").show().addClass('mobil-menu-shown');
        slideIn($(".topnav"));
        deactivateBackground(flag);
        flag = false;
        $(this).hide();
        
        });
    
    $(".close").click(function(){
        slideOut($('.topnav'),screen_width);
        deactivateBackground(flag);
        flag = true;
        $('.burger').fadeIn('slow');
        $(window).load();
    });
    
    });
   
  function slideIn(obj){
    obj.animate({
        right:0,
        duration:5000,
        
        });
  }
  
  function slideOut(obj,screenW){
        obj.animate({
            right:-screenW
            });
    }
    
mainMobileMenu = $(function(){ // A mobile menu using accordion functionality
    // hide the submenu items
     jQuery(".sub").hide();
     var parent_item = $('.animate-mobile-item');
     
     var down = false;
     var previus_clicked;

     parent_item.click(function(){
        
     var clicked_item = jQuery(this).find('ul');
     var height = $('.topnav').height();
     var width = $('.topnav').width();
     
     
     clicked_item.addClass('closeX');
     var divHeight = height - 150;
      
     clicked_item.css({'display':'block','background':'#afc15f','padding':'20px','right':'10px','width':'100%','height':divHeight});
     
      if (!clicked_item.hasClass('down')){
          clicked_item.hide();
          clicked_item.addClass('down');
          subMenuSlideDown(clicked_item,"slow");
          
          arrowPoint('down',this);
          down = true;
          
          }
     
      else if (clicked_item.hasClass('down')){
             clicked_item.removeClass('down');
            subMenuSlideUp(clicked_item,"slow");
            
            down = false;
            arrowPoint('up',this);
            
          }
          previus_clicked = clicked_item;
      });
          
     });
         
   
   function noScroll(){
    window.scrollTo(0,0);
   }
   function deactivateBackground(bol){
    if(bol === true){
    
    $('.mobile-body').addClass('background-freeze').hide().css('height','2000px').fadeIn('slow');
    
    }
    else if(bol === false){
   
    $('.mobile-body').fadeOut('slow');
      
    }
   }
    
  