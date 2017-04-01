<?php
      class RegisterAction extends Action{
        public function reg(){

          $this->display();  
        }

          public function checkName()
          {
              $username = $_GET['username'];
              $user = M("User");
              $where['username'] = $username;
              $count = $user->where($where)->count();
              if($count > 0){
                  echo 1;
              }else{
                  echo 0;
              }
          }
          public function doRegister(){
//              $code = $_POST['code'];
//              if(md5($code) != $_SESSION['code']){
//                  $this->error("验证码不正确");
//              }
//              $username = $_POST['username'];
//              $password = $_POST['password'];
//              $password2 = $_POST['password2'];
//              $sex = $_POST['sex'];
//              if(iconv_strlen($username) < 3 || iconv_strlen($username) > 8){
//                  $this->error("用户名长度不符合要求".iconv_strlen($username));
//              }
//                if($password != $password2){
//                    $this->error("两次输入密码不一致");
//                }

//              $user = M('User');
              $user = D('User');
              if(!$user->create()){
                  $this->error($user->getError());
              }

//              $data['username'] = $username;
//              $data['password'] = $password;
//
//              $data['sex'] = $sex;
//              $userId = $user->add($data);
              $userId = $user->add();
              if($userId){
                 $this->success("注册成功",U("Index/index"));
              }else{
                   $this->error("用户注册失败");
              }
          }
      }
 ?>
