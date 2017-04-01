<?php
    class UserModel extends Model{
        protected $_validate = array(

            array('code', 'require', '验证码必须填写'),
            array('code', 'checkCode','验证码错误',EXISTS_VALIDATE,'callback',1),
            array('username', 'require', '用户必须填写'),
            array('username', 'require', '用户已经存在！', EXISTS_VALIDATE0,'unique' ,1),
            array('username','5,8','用户名必须是5－8个字符',EXISTS_VALIDATE,'length',1),
            array('password','5,8','密码必须是5－8个字符',EXISTS_VALIDATE,'length',1),
            array('password2','password','确认密码不正确',EXISTS_VALIDATE, 'confirm'),
        );
    protected function checkCode($code){
        if(md5($code) != $_SESSION['code'] ){
            return false;
        }else{
            return true;
        }
    }
    }
?>