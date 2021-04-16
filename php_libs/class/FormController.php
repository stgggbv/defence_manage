<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormController
 *
 * @author yoshida
 */
class FormController extends BaseController{
    
    //----------------------------------------------------
    // セッション開始
    //----------------------------------------------------
    public function run()
    {
        // セッション開始
        $this->start();
        //フォームの表示
        $this->screen_form();
        
    }
    //----------------------------------------------------
    // セッションの設定
    //----------------------------------------------------
    public function start()
    {
        // セッションが既に開始している場合は何もしない。
        if (session_status() === PHP_SESSION_ACTIVE) {
            return;
        }
        // セッション開始
        if (!isset($_COOKIE[session_name()])) {  
            session_start();
            $this->formmodel = new FormModel();
            $this->formmodel->regist_session();
            
        }
        
    }
    
    //----------------------------------------------------
    // フォーム画面表示
    //----------------------------------------------------
    public function screen_form()
    {
        $this->form->addElement('submit', 'gard', ['value' =>'送信']);
        $this->form->addElement('submit', '', ['value' =>'送信']);
        $this->form->addElement('submit', 'b', ['value' =>'送信']);
        $this->form->addElement('submit', 'c', ['value' =>'送信']);
        $this->form->addElement('submit', 'd', ['value' =>'送信']);
        $this->form->addElement('submit', 'e', ['value' =>'送信']);
        $this->form->addElement('submit', 'f', ['value' =>'送信']);
        $this->form->addElement('submit', 'export', ['value' =>'出力']);
        $this->form->addElement('submit', 'clear', ['value' =>'クリア']);
        $this->title = '入力画面';
        $this->next_type = 'authenticate';
        $this->file = "form.tpl";
        $this->view_display();
    }
    
    
}
