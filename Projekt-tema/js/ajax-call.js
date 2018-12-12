jQuery(function(){
       $('.sub li a').click(function(e){
             
       
       
             
	var id = this.id;
	$('.ajax_post_content').html('');
					
        $.ajax({
            url: my_ajax_object.ajax_url,
            type: "post",
            data: ({action: 'single',id:id}),
            success: function(response){
							
               $('.ajax_post_content').append(response);
							 
            }
            
            
            });
         
         
        
         
         });
      */
      
      
      
      
      
      
      });