<?php
require_once('Category.php');

class Menu extends Category{
  
	private $menu_name;
	
	public function clean_custom_main_menu($menu_name,$ul_class_name,$li_class_name,$animate_class,$sub_list) {
    
	$menu_list = '<ul class = "'.$ul_class_name.'" class ="menu">';
			
    if ($menu_items = $this->getMenu($menu_name)) { 
        $count = 0;
		$id_num = 1;
        $submenu = false;
        $parent_id = 0;
		$count_posts;
        $previous_item_has_submenu = false;
        
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;		
			$count_posts = $this->getNumberOffPosts($title);
						
            // check if it's a top-level item
            if ($this->isParent($menu_item)) {
                $parent_id = $menu_item->ID;				
				// If the next item is not parent, then this menuitem show the menutitle without a "href" attribute
				if(!$this->isParent($menu_items[$count+1])){
               // write the item but DON'T close the A or LI until we know if it has children!
						$menu_list .='<li id = "'.$id_num.'" class = "'.$li_class_name.' parent-item '.$animate_class.' no-hover-background"><a class = "parent-link ">'. $title;
						$id_num++;
				}
					// If the next item is parent then give the title a link
					elseif($this->isParent($menu_items[$count+1])){
						$menu_list .='<li class = "'.$li_class_name.' parent-item '.$animate_class.'"><a href = "'.$url.'" class = "parent_link '.$animate_class.'">'. $title.'  '.'<span class="badge badge-secondary badge-pill">  '.$count_posts.'</span>'; // the counter should be here
					}
            }
            // if this item has a (nonzero) parent ID, it's a second-level (child) item
            else {
                if ( !$submenu ) { // first item
                    // add the dropdown arrow to the parent
                    $menu_list .= '<span class=" hassub arrow-down "><img src = "https://ungemedkant.dk/wp-content/uploads/2018/09/arrow_green_color.png"/></span></a>';
                    // start the child list
                    $submenu = true;
                    $previous_item_has_submenu = true;
                    $menu_list .= '<ul class="sub '.$sub_list.'">';
               }

                $menu_list .= '<li class = "'.$li_class_name.' sub-item">';
                $menu_list .= '<a id = '.$id.' href="'.$url.'" class="title">'.$title.'</a>';
                $menu_list .= '</li>';

                // if it's the last child, close the submenu code
                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= '</ul></li>';
                    $submenu = false;
                }
            }

            // close the parent (top-level) item
            if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id )
            {
               if ($previous_item_has_submenu)
                {
                    // the a link and list item were already closed
                    $previous_item_has_submenu = false; //reset
                }
                else {
                    // close a link and list item
                    $menu_list .='</a></li>';
                }
            }

            $count++;
        }
		
    }
	
	else {
         $menu_list .= '<!-- no list defined -->';
    }
    $menu_list .= '</ul>';
   
	return $menu_list;
}
 
    private function getMenu($menu_name){
			
				 $navarray = wp_get_nav_menu_items($menu_name);
				 return $navarray;			
    }
    
	private function outputTopLevel(){
		
	}
   
   private function isActive($post,$item){
	  if($item->title == $post->post_title){
		return true;
	  }
	  else{
		return false;
	  }
   }
  
   
	 private function isParent($item){
			if ($item->menu_item_parent == 0) {
			return true;
			}
		}
		
		
}
	
$newmenu = new Menu();



?>



