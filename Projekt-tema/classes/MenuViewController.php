<?php
require_once('Menu.php');

class MenuViewController extends Menu {
    
    
    public function mobileMenu($menu_name){
			   echo $this->clean_custom_main_menu(
										 $menu_name,
										'nav-mobile',
										'nav-item-mobile',
										'animate-mobile-item',
										'nav-mobil-children'
);
			
		}
				
		public function sidebarMenu($menu_name){
				echo $this->clean_custom_main_menu(
											$menu_name,
											'list-group',
											'list-group-item',
											'item-animate-sidebar',
											'list-group');
		}
		
		public function mainDropdownMenu($menu_name){
			    echo $this->clean_custom_main_menu(
										  $menu_name,
										 'nav nav-tabs',
										 'nav-item nav-link',
										 'item-animate-main-menu',
										 'item-sublist'
				);
			
		}
    
    
      
    
    
}
$newmenuView = new MenuViewController();



?>