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
//                「その他」が送信されるまではテキストフォームを表示する。
                $this->frozen_other_off();
//                「その他」に一度でも入力があればURL化する。
                if(preg_match("/.+/", $this->other)){
                    $this->frozen_other_on();
                    $this->view->assign('otherText', $this->other);
                }
                $this->screen_top();
                break;
            default:
                $this->frozen_other_off();
                if(preg_match("/.+/", $this->other)){
                    $this->frozen_other_on();
                    $this->view->assign('otherText', $this->other);
                }
                $this->screen_top();
                break;
        }
    }
    
    public function frozen_other_on(){
         $this->view->assign('frozen', true);
    }
    
    public function frozen_other_off(){
         $this->view->assign('frozen', false);
    }


    public function sorting_action(){
        $sorting_action=new SetCookie;
        

        if($this->back==false && $this->action!='delcookie' && $this->type!='chart'){
            $sorting_action->set_cookie();
        } else if($this->back==true && $this->action!='delcookie'){
            $sorting_action->set_cookie_back();
            $array= explode('/', $this->action);
            $this->action=$array[0];
        } else if($this->action=='delcookie'){
            $sorting_action->reset_cookie();
        }
        
    }
  
    
    public function screen_top()
    {
//       防御方法入力画面を表示
        $this->title = '防御方法入力画面';
        $this->file = 'defence.tpl';
//        初回訪問時、選びなおし時、リセット時、戻るボタンを表示しない。
        if($this->back || $this->action=='delcookie' || empty($this->type)){
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
        if(isset($this->other)){
            $this->view->assign('other', 'other');
        }else{
             $this->view->assign('other', '');
        }
        $this->file = 'result.tpl';

        $this->view_display();
    }
    
    public function screen_chart()
    {
       
        $this->title = '集計結果';
        $this->file = 'chart_export.tpl';   
        $chart=new ChartView();
        $this->view->assign('WindowOnloadJsCode',$chart->WindowOnloadJsCode());
        $this->view->assign('TotalChart',$chart->Total_Chart());
        $this->view->assign('GuardChart',$chart->Guard_Chart());
        $this->view->assign('GrapChart',$chart->Grap_Chart());
        $this->view->assign('BackstepChart',$chart->Backstep_Chart());
        $this->view->assign('FastestRampageChart',$chart->FastestRampage_Chart());
        $this->view->assign('OtherChart',$chart->Other_Chart());
//        グラフの表示の有無
        $chart->chart_display();
        $this->view->assign('guardDisplay',$chart->guardDisplay);
        $this->view->assign('fastestRampageDisplay',$chart->fastestRampageDisplay);
        $this->view->assign('grapDisplay',$chart->grapDisplay);
        $this->view->assign('backstepDisplay',$chart->backstepDisplay);
        $this->view->assign('otherDisplay',$chart->otherDisplay);
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
