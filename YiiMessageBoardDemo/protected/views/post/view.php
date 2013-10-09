<?php
$this->pageTitle=Yii::app()->name . ' - Post';

echo '<div class="post list-group-item">';
$this->renderPartial('_post', array( 'post'=>$model )); 
echo '</div>';

?>

