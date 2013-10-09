<?php

echo '<ul class="posts list-group">';
foreach ($posts as $post)
{  
    echo '<li class="post list-group-item">';
    $this->renderPartial('../post/_post', array( 'post'=>$post )); 
    echo '</li>';
}
echo '</ul>';