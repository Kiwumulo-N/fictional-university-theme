<?php

while(have_posts()){
the_post(); ?>
<h2><a href="<?php  the_permalink(); ?>"><?php  the_title()?></a></h2>
<p> <?php the_content() ?></p>





<?php
}


/*<h1><?php the_title() ?></h1>
<p><?php the_content() ?></p>*/
?>







