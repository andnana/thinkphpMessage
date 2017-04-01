<?php
  class PublicAction extends Action{
    public function code(){
      import('ORG.Util.Image');
     Image::buildImageVerify(2,1,'png',58,22,'code');
    }
  }
 ?>
