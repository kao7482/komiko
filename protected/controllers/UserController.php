<?php
class UserController extends Controller {
    
    /**
     * 用户登录
     */
    public function actionLogin(){
        $model=new LoginForm;
        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login()){
                $this->render('//site/index');
                 Yii::app()->end();
            }
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }
    
    /**
     * 用户退出
     */
    public function actionLogout(){
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    
    /**
     * 用户修改密码
     */
    public function actionPassword(){
        $model = MemberInfo::model()->findByPk(Yii::app()->user->getId());
        
        $this->render('password', array('model'=>$model));
    }
    
    /**
     * 用户重置密码
     */
    public function actionReset(){
        
    }
    
    /**
     * 用户修改邮箱
     */
    public function actionEmail(){
        
    }
    
    /**
     * 用户修改资料
     */
    public function actionProfile(){
        
    }
    
    /**
     * 用户注册
     */
    public function actionReg(){
        
    }
    
    /**
     * 用户上传头像
     */
    public function actionAvatar(){
        
    }
}