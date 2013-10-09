<?php
$this->pageTitle=Yii::app()->name . ' - Home';

$this->renderPartial('_posts', array( 'posts' => $model )); 

$this->renderPartial('_create_new_form', array ( 'model' => new Post )); 

