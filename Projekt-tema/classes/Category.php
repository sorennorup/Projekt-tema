<?php


class Category{
    
     
	
	public function getNumberOffPosts($menu_title){
       $ressource_properties = array();
       $arg = array( 'hide_empty' => false );
       $cats = get_terms( 'category', $arg );
       $trimed_title = (string) preg_replace("/[^a-zA-Z]/",'', $menu_title);
        foreach( $cats as $terms ) {
			$trimed_name = preg_replace("/[^a-zA-Z]/", '',$terms->name );
		    
			if($trimed_title == $trimed_name || $trimed_title == "PREvents"){
				return $terms->count;
				}
		    
		}
	     return '1';
		
	}
	
	
    
    
    
}
	$category_class = new Category();






?>