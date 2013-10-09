<?php

class PostController extends CController
{
	public $defaultAction = 'view';
	private $_model;

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
    
	public function actionView()
	{
		$post=$this->loadModel();

		$this->render('view',array(
            'model' => $post
		));
	}
    
	public function actionAbout() {
		$this->render('about');
	}
    
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
			{
				$this->_model=Post::model()->findByPk($_GET['id']);
			}
			if($this->_model===null)
				throw new CHttpException(404,'The post could not be found.');
		}
		return $this->_model;
	}
}