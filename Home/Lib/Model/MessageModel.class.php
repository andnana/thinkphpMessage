<?php
  class MessageModel extends RelationModel{
      protected $_auto = array(
          array("time","time" ,MODEL_INSERT,'function'),
          array("uid","getId",MODEL_INSERT,'callback'),
      );
      protected $_link = array(
          'User'=> array(
              'mapping_type'=>BELONGS_TO,
              'class_name'=>'User',
              'foreign_key'=>'uid',
              'mapping_name'=>'user',
//              'mapping_fields'=>'username',
//              'as_fields'=>'username',
           // 定义更多的关联属性
          ),

      );
      protected function getId(){
          return $_SESSION['user']['id'];
      }
  }

?>