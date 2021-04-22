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
        $sorting_action->set_cookie();
    }
  
    
    public function screen_top()
    {
       
        $this->title = '防御方法入力画面';
        $this->file = 'defence.tpl';
        $this->view_display();
    }
    
    public function screen_result()
    {
       
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
        
        if($this->type=='defence'  && $this->action!='delcookie'){
            $this->view->assign('popup', true);
        }else{
            $this->view->assign('popup', false);
        }
        
        if ($this->action=='delcookie') {
            $this->view->assign('clear', true);
        }else{
            $this->view->assign('clear', false);
        }
    }
}
