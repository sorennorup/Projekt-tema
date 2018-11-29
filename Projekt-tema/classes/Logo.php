<?php

class Logo {
    
    public static function setCustomizeLogo() {
        if(function_exists(get_custom_logo)){
          
			echo get_custom_logo();
             
		} 
            else{
                
				echo '<img class = "projekt-logo img-rounded"';
				echo 'src = "'. $upload_dir_url.'/2018/03/ungevaerk-logo-transperant-nomargin-w300-1.png"/>';
               
             }  
    }

}


?>