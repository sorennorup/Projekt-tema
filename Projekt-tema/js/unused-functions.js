  
  /* sideBarMenu = $(function(){ // A menu using accordion functionality
    // hide the submenu items
     jQuery(".sub").hide();
     var parent_item = $('.parent-item');
     var clicked = false;
     var down = false;
     var previus_clicked_item;

     parent_item.click(function(){
      //alert(clicked);
       // check if theres another unfolded submenu
     var clicked_item = jQuery(this).find('ul');
    
      if (clicked === false){
         
          // If a previus clicked item exists
          if(previus_clicked_item){
            // Slide up the submenu
            
            if(previus_clicked_item.text()!= clicked_item.text()){
              
              subMenuSlideUp(previus_clicked_item);
              subMenuSlideDown(clicked_item);
              down = true;
            }
            else if (previus_clicked_item.text()== clicked_item.text()){
              if(down === true){
            subMenuSlideUp(clicked_item);
              }
              else if (down === false){
                subMenuSlideDown(clicked_item);
              }
            
            }
          }
          else{
          subMenuSlideDown(clicked_item);
          down = true;
          }

          clicked = true;

      }
      else if (clicked === true){
        if(previus_clicked_item.text()!=clicked_item.text()){
           
          subMenuSlideUp(previus_clicked_item);
          subMenuSlideDown(clicked_item);
          down = true;

          }
          else if (previus_clicked_item.text()==clicked_item.text()){
            if(down === false){
          subMenuSlideDown(clicked_item);
            }
            else if (down === true){
              subMenuSlideUp(clicked_item);
            }
          
         
          }
          else {
            subMenuSlideUp(clicked_item);
            down = false;
          }
 
          clicked = false;
          
      }
         previus_clicked_item = clicked_item;
       
     });
        
    });
   */
  
  
   function getIds(click_id){
         var id_array = [];
         $('.list-group li').each(function(){
            if(this.id !== ''){
              id_array.push(this.id);
            } 
          });
         return id_array;
   }
   
   mainMenuSlide = $(function(){
    // Slidedown the submenubar
    $(".slide-items").slideDown('slow');
    // Fadein the title of the post
    $(".post_title").fadeIn('slow');
    //get the width af the navbar and set equal with to navbar and the submenubar
    var nav_width = $(".nav").width()+1;
    $(".nav").css('width',nav_width);
      
    });
   
    /*sideBarMenuClick = $(function(){ // A menu using accordion functionality with mouseover when open and click when closed
    // hide the submenu items
    var clicked_item;
    $('.hover-overlay').hide();
    jQuery(".sub").hide();
    var parent_item = $('.item-animate-sidebar');
      parent_item.addClass('up');
      
      parent_item.click(function(){
          if($(this).hasClass('up')){
          arrowPoint('down',this);
          //$(this).unbind('mouseenter mouseleave');
          $(this).addClass('down').removeClass('up');
          clicked_item = jQuery(this).find('ul');
          subMenuSlideDown(clicked_item,'slow');
          }
          else {
            arrowPoint('up',this);
             $(this).addClass('up').removeClass('down');
             clicked_item = jQuery(this).find('ul');
            subMenuSlideUp(clicked_item,'slow');
          }
        });
        
     });
   */
  