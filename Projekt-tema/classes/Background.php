<?php
class Background {
    
    public static function addBackgroundImage(){
        
        return ?> <style type="text/css" id="custom-background-css-override">
        .jumbotron { background-image: url('<?php echo background_image(); ?>'); }
       </style><?php ;
        
           
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}






















?>