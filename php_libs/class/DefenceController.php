<?php

/**
 * Description of DefenceController
 *
 * @author oshen
 */
class DefenceController extends BaseController{
    
    public function run() {
        $this->PopUp();
        $this->sorting_action();
        $this->sorting_screen();
    }
    
     public function sorting_screen()
    {
        switch ($this->type) {
            case "result":
                $this->screen_result();
                break;
            case "chart":
                $this->screen_chart();
                break;
            case "defence":
                $this->screen_top();
                break;
            default:
                $this->screen_top();
                break;
        }
    }
    
    public function sorting_action(){
        $sorting_action=new SetCookie;
        if($this->back==false){
        $sorting_action->set_cookie();
        } else {
        $sorting_action->set_cookie_back();
        $array= explode('/', $this->action);
                print_r($array);
                $this->action=$array[0];
                print $this->action;
        }
        
    }
  
    
    public function screen_top()
    {
//       防御方法入力画面を表示
        $this->title = '防御方法入力画面';
        $this->file = 'defence.tpl';
//        選びなおしで戻った場合、戻るボタンを表示しない。
        if($this->back || $this->action=='delcookie'){
            $this->view->assign('rollback', false);
        }else{
            $this->view->assign('rollback', true);
        }
        $this->view_display();
    }
    
    public function screen_result()
    {
//       結果入力画面を表示
        $this->title = '結果入力画面';
        $this->file = 'result.tpl';

        $this->view_display();
    }
    
    public function screen_chart()
    {
       
        $this->title = '集計結果';
        $this->file = 'chart_export.tpl';    
        require_once _PHP_LIBS_DIR."/class/JsController.php";
        $filename=_PHP_LIBS_DIR."/smarty/templates/chart_total.tpl";
        $chartTotal=file_get_contents($filename);
        $this->view->assign('value', 10);
        $this->view->assign('test', $chartTotal);
        $this->view_display();
    }


//「防御した結果の入力画面」から遷移した場合、ポップアップを表示する。
    public function PopUp() {
        
        if($this->type=='defence'&& $this->action!='delcookie'&&$this->back==false){
            $this->view->assign('popup', true);
        }else{
            $this->view->assign('popup', false);
        }
            
        //        選び直しで戻った場合、メッセージを表示する。
        if($this->back==true){
            $this->view->assign('message', true);
        }else{
            $this->view->assign('message', false);
        }
        
        if ($this->action=='delcookie') {
            $this->view->assign('clear', true);
        }else{
            $this->view->assign('clear', false);
        }
    }
}
