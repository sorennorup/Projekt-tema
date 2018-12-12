<?php

function clean_custom_main_menu() {
    $menu_name = 'main-menu'; // specify custom menu slug
    $menu_list = '<ul id="menu">' ."\n";

    if ($menu_items = wp_get_nav_menu_items($menu_name)) { 
        $count = 0;
        $submenu = false;
        $parent_id = 0;
        $previous_item_has_submenu = false;

        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;

            // check if it's a top-level item
            if ($menu_item->menu_item_parent == 0) {
                $parent_id = $menu_item->ID;
               // write the item but DON'T close the A or LI until we know if it has children!
                $menu_list .= "\t". '<li><a href="'. $url .'">'. $title;
            }

            // if this item has a (nonzero) parent ID, it's a second-level (child) item
            else {
                if ( !$submenu ) { // first item
                    // add the dropdown arrow to the parent
                    $menu_list .= '<span class="arrow-down"></span></a>' . "\n";
                    // start the child list
                    $submenu = true;
                    $previous_item_has_submenu = true;
                    $menu_list .= "\t\t" . '<ul class="sub">' ."\n";
               }

                $menu_list .= "\t\t\t" . '<li>';
                $menu_list .= '<a href="'.$url.'" class="title">'.$title.'</a>';
                $menu_list .= '</li>' ."\n";

                // if it's the last child, close the submenu code
                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= "\t\t" . '</ul></li>' ."\n";
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
                    $menu_list .= "\t" . '</a></li>' . "\n";
                }
            }

            $count++;
        }
    } else {
         $menu_list .= '<!-- no list defined -->';
    }
    $menu_list .= "\t". '</ul>' ."\n";
    echo $menu_list;
}



?>