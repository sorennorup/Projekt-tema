<?php

class Widget {
	
    //Display the Categorymenu with the postcount and the markup of selected category
    public function displayResourcesWidget(){
        $ressource_properties = $this->countCategoryPosts(); ?>
		
	<ul class="list-group">
		
		<a href = "https://youth-it.cool/about-the-project/"><?php $this->markCurrentTerm(4); ?>
		About the project
		
     </li></a>
		<a href = "<?php echo $ressource_properties[1]['url']; ?>"> <?php $this->markCurrentTerm(7); ?>
		Deliverables
		<span class="badge badge-secondary badge-pill"><?php echo $ressource_properties[1]['num_posts']; ?></span>
	 </li></a>
  
		<a href = "<?php echo $ressource_properties[3]['url']; ?>"> <?php $this->markCurrentTerm(8); ?>
		Sources
		<span class="badge badge-secondary badge-pill"><?php echo $ressource_properties[3]['num_posts']; ?></span> 
	 </li></a>
  
       <a href = "<?php echo $ressource_properties[0]['url']; ?>"><?php $this->markCurrentTerm(5);?>
       PR & Events
       <span class="badge badge-secondary badge-pill"><?php echo $ressource_properties[0]['num_posts'];?></span>
     </li></a>
  
		<a href = "<?php echo $ressource_properties[2]['url']; ?>"><?php $this->markCurrentTerm(4); ?>
		Partners
		<span class="badge badge-secondary badge-pill"><?php echo $ressource_properties[2]['num_posts']; ?></span>
     </li></a>
   
	</ul>
       <?php 
    }
      // Count the number of post in the current category
    private function countCategoryPosts(){
      $ressource_properties = array();
      $child_arg = array( 'hide_empty' => false, 'parent' => 2 );
      $child_cat = get_terms( 'category', $child_arg );
  
        foreach( $child_cat as $child_term ) {
			$url = get_category_link($child_term->term_id);
			
            $prop['num_posts'] = $child_term->count;
			$prop['url'] = $url;
			array_push($ressource_properties,$prop);      
		}
        return $ressource_properties;
    }
	 // Add a background-color to the current term list item
	private function markCurrentTerm($num){
		
		if($this->checkCurrentTerm($num)){
			//If true add the bg-1 class
		?><li class="list-group-item bg-1 d-flex justify-content-between align-items-center"><?php
		}
		else {
	       // Else add the list-group
		?><li class="list-group-item  d-flex justify-content-between align-items-center"><?php
		}
	}
    
    private function checkCurrentTerm($n){
		// Get the current post object
		global $post;
		// Get the category of the current postobject
        $postcat = get_the_category( $post->ID );
		// If the first term id equals the arument number return true
		if($postcat[0]->term_id == $n){
			return true;
		}
		// Else return false
		else {
			return false;
		}
	}
    
}


?>



