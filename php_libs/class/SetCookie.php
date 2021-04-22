<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResultController
 *
 * @author oshen
 */
class SetCookie extends BaseController {
    
     public function gard_cookie()
    {
         $gard=[];
         setcookie("gard",$gard,time()+60);
    }
    
        public function screen_login()
    {
        $this->title = 'ログイン画面';
        $this->next_type = 'authenticate';
        $this->file = "result.tpl";
        $this->view_display();
    }
}
