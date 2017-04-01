<?php
    class CommonAction extends Action{
        public function _initialize(){
            if(!isset($_SESSION['user']) || $_SESSION['user'] == ''){
                $this->redirect('Login/login');

            }
        }
    }

?>