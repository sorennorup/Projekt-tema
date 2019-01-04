<?php
 
class PostView {
	// TO DO
	// Create extern link on each post.
	// Create bootstrap taggin in post admin
	  
  public function getPostList( $attr,$numCols ){
		$output;
	  global $post;
	  $count = 1;
	  $attr = shortcode_atts( array( 'cat' => 'default cat ','colsize'=> 2),
		        $attr,'getpostsoutput' );
    $args = array( 'category'=> $attr['cat'],$attr['colsize'],'posts_per_page' => -1000 );
    $allposts = get_posts( $args );
		$number_off_posts = count($allposts);

     echo '<h3>'.get_the_title().'</h3>';
     echo '<div class = "row main-row">';
	    $count = 0;
    foreach( $allposts as $post ): setup_postdata( $post );
		
    
    if ($this->isLastRow($number_off_posts,$count)){
			// if there'e only two in the last row then center the two boxes
			$output .= '<div class = "col-lg-2 mb-3"></div>';
		}
		
	  $cols = $this->numberOfCols( $attr['colsize'] ); 
	  $output .= '<div class = "col-lg-'.$cols.' mb-3">';
		
	  $output .= '<a href="'.get_the_permalink().'" title="'.$post->post_title.'">';
	  $output .= '<div class = "card h-100">';
	  $output .= $this->cardHeader( $post->post_title,'bg-3' );
		
	  $count++;
	  $output .= $this->cardBody( $attr ); 
    $output.= $this->cardFooter();
	
   endforeach; 

     return $output;
	}
    

  private function numberOfCols($num){
		switch($num){
			case 1:
				return '10';
				break;
			case 2:
				return '6';
		    break;
			case 3:
				return '4';
			}
	
}
  private function cardHeader($the_title,$style_class){
	  $output = '<div class = "card-header '.$style_class.'">
	           <h5>'. $the_title.' </h5></div>';
	
	 return $output;
		
}
  private function cardBody($attr){
	  $output .= '<div class = "card-body justify-content-center">';
		 if ( has_post_thumbnail()) : // Check if thumbnail exists 
	  $output .= '<div class = "card-img-top text-center " >';
	  $output .= get_the_post_thumbnail().'</div>';	
		 endif; 
			
	  $output .= '<div class = "card-text loop custom-excerpt-text">';
	  $output .= html5wp_excerpt('100');
	  $output .= /*readmore(get_the_permalink($post->ID)).*/'</div>';	
		 if($attr['cat'] != 6) : 
	 //$output .= '<span class="date">'. get_the_time('F j, Y').'</span>';
		endif;
			
	  $output .= '</div>';	
     return $output;
}
  private function cardFooter(){
	  $output .= '</div></a></div>';
	 return $output;
}
  private function isLastRow( $number_off_posts,$num_post ){
	 
		$the_rest = ( $number_off_posts ) % 3;
		  // if number off posts modulus 3 is not 0 it can't be devided in 3 post pr row
    if( $number_off_posts % 3 != 0){
		      // check if the post is the last in the row
		   if( $num_post+1 == $number_off_posts-1 ){
			     return true;
	      }       
	  }
	}
	
	function calculate_row_position($all_posts, $num_post, $rest, $flag ){
	$the_rest = (count($posts) - 1)% 3;
   if( $all_posts % 3 != 0){
		      // check if the post is the last in the row
		   if($num_post+1 == $all_posts - 1 && $rest == 0){
			 echo  "<div class = 'project_thumb'>";
	             }
		     
		     
		     // find the place of the last post in the last row 
		    	     
		     else if($num_post+1 == $all_posts&& ($all_posts-1) % 3 == 0){
			 $flag = true;
			
			 echo  '<div class = " project_thumb project_thumb_last_row last_element">';  
		      }
		      
		          
		     else if( $num_post+1 == $all_posts-1 && ($all_posts-2) % 3 == 0 ) {
		     
			 echo '<div class = "project_thumb project_thumb_last_row first_element">';
		      }		  
		     else{
			 echo  ' <div class = " project_thumb project_thumb_last_row">';
			  
		  }
		 }
		  else{
			 echo '<div class = "project_thumb">';
		   
		  }
 
 
}
}


$postview = new PostView();
add_shortcode( 'getpostsoutput', array( $postview, 'getPostList' ) )








?>