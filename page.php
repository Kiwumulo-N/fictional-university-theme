<?php 

while(have_posts()){
the_post(); ?>
<h2>This is a page not a post</h2>
<h2><a href="<?php  the_permalink(); ?>"><?php  the_title()?></a></h2>
<p> <?php the_content() ?></p>




<?php
}

/*get_footer();
get_header(); 
*/

?>






