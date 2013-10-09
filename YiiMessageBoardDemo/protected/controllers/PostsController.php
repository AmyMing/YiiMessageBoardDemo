<?php

class PostsController extends CController
{
	public $defaultAction = 'view';
    private $_model = null;

	public function actionView() {
        $this->createNewPostOnPOST();        
        
		if($this->_model===null)
		{
			$this->_model=Post::model()->findAll();
		}
        
		$this->render('view',array(
            'model' => $this->_model
		));
	}
    
	public function actionAbout() {
		$this->render('about');
	}
    
    private function createNewPostOnPOST() {
        if(isset($_POST['Post']))
		{
            $new_model = new Post;
            $values = $_POST['Post'];
            $values["id"] = 0;
            $values["date"] = date("Y-m-d H:i:s");
			$new_model->attributes = $values;
			return ($new_model->save());
		}
    }
}