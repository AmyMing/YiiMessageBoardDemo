<?php
class AccountController extends CController
{
	public $defaultAction = 'login';
	private $_model;
    
    /**
    * Displays the login page
    */
    public function actionLogin()
    {
        if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH) {
	        throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");
        }

        $model=new LoginForm;

        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
        }

        if(isset($_POST['LoginForm']))
        {
	        $model->attributes=$_POST['LoginForm'];
	        if($model->validate() && $model->login()) {
		        $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        
        $this->render('login',array('model'=>$model));
    }

    /**
    * Logs out the current user and redirect to homepage.
    */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}