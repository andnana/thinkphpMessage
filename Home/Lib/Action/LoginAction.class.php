<?php
    class LoginAction extends Action{

      public function login(){
        $this->display();
      }
      public function doLogin(){
        echo "fef";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $code = $_POST['code'];
        if(md5($code) != $_SESSION['code']){
            $this->error("验证码不正确");
        }

          $user = M("User");
          $where['username'] = $username;
          $where['password'] = $password;
          $user2 = $user->field("id , username")->where($where)->find();
          if($user2){
            $_SESSION['user'] = $user2;
            $this->success("用户登录成功",U("Index/index"));
          }else{
            $this->error("该用户不存在");
          }
      }
      public function doLogout(){
         $_SESSION = array();
         if(isset($_COOKIE[session_name()]))
         setcookie(session_name(),'',time()-1,'/');
         session_destroy();
         $this->redirect("Index/index");
      }

    }
 ?>
