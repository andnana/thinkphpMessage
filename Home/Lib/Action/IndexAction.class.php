<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction
{
    public function index()
    {

            $this->display();
    }

    public function left()
    {
          $message =  D("Message");
        $messages = $message->relation("user")->select();
        import('ORG.Util.Page');// 导入分页类
        $count      = $message->relation("user")->count();
        $Page       = new Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('header','条留言');

        $show       = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $message->relation("user")->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();

//        dump($messages);
//        exit();
        $this->assign("messages",$list);
        $this->assign("show",$show);
        $this->display();
    }
    public function top()
    {
        $this->display();
    }
    public function right()
    {
        $this->display();
    }

}