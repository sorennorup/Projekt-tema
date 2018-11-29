<?php
 
class PostView {
	  
  public function getPostList( $attr,$numCols ){
		$output;
	  global $post;
	  $count = 1;
	  $attr = shortcode_atts( array( 'cat' => 'default cat ','colsize'=> 2),
		        $attr,'getpostsoutput' );
    $args = array( 'category'=> $attr['cat'],$attr['colsize'],'posts_per_page' => -1000 );
    $allposts = get_posts( $args ); 

     echo '<h3>'.get_the_title().'</h3>';
     echo '<div class = "row">';
	
    foreach( $allposts as $post ): setup_postdata( $post );
   
    $count = 1; 	
	  $cols = $this->numberOfCols( $attr['colsize'] ); 
	  $output .= '<div class = "col-lg-'.$cols.' mb-2">';
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
	           <h6>'. $the_title.' </h6></div>';
	
	 return $output;
		
}
  private function cardBody($attr){
	 $output .= '<div class = "card-body justify-content-center">';
		 if ( has_post_thumbnail()) : // Check if thumbnail exists 
	 $output .= '<div class = "card-img-top text-center " >';
	 $output .= get_the_post_thumbnail().'</div>';	
		 endif; 
			
	 $output .= '<div class = "card-text loop custom-excerpt-text">';
	 $output .= html5wp_excerpt('html5wp_index');
	 $output .= readmore(get_the_permalink($post->ID)).'</div>';	
		 if($attr['cat'] != 6) : 
	 $output .= '<span class="date">'. get_the_time('F j, Y').'</span>';
		endif;
			
	 $output .= '</div>';	
     return $output;
}
  private function cardFooter(){
	 $output .= '</div></a></div>';
	 return $output;
}
}


$postview = new PostView();
add_shortcode( 'getpostsoutput', array( $postview, 'getPostList' ) )








?>