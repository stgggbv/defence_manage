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
        switch ($this->action) {
            case "gard":
                $gard=1;
                if(isset($_COOKIE['gard'])){
                    $gard=$_COOKIE['gard'];
                    $gard++;
                }
                setcookie("gard",$gard, time()+60*120);
                $this->defence = 'gard';
                break;
            case "backstep":
                $backstep=1;
                if(isset($_COOKIE['backstep'])){
                    $backstep=$_COOKIE['backstep'];
                    $backstep++;
                }
                setcookie("backstep",$backstep, time()+60*120);
                $this->defence = 'backstep';
                break;
            case "delcookie":
                print_r($_COOKIE);
                foreach ($_COOKIE as $key => $value) {
                      print $key;
                      print $value;
                    setcookie($key, '', time()-1000);
                }
                break;
            case "gardnodamage":
                $gardnodamage=1;
                if(isset($_COOKIE['gardnodamage'])){
                    $gardnodamage=$_COOKIE['gardnodamage'];
                    $gardnodamage++;
                }
                setcookie("gardnodamage",$gardnodamage, time()+60*120);
                break;
                
            case "gardbigdamage":
                $gardbigdamage=1;
                if(isset($_COOKIE['gardbigdamage'])){
                    $gardbigdamage=$_COOKIE['gardbigdamage'];
                    $gardbigdamage++;
                }
                setcookie("gardbigdamage",$gardbigdamage, time()+60*120);
                break;
                
            default:
                break;
        }
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
        $this->view->assign('popup', false);
        
        if(isset($_GET['type']) && $_GET['type']='defence'){
            $this->view->assign('popup', true);
        }
    }
}
