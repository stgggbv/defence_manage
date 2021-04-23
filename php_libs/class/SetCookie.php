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
    
    public function set_cookie(){
        
        $result= $this->action;
//        初回のアクセスのみ、クッキーに意味のないデータをセットして、
//        クッキーを使用可能にする。
        if(empty($result)){
        $value= 'empty';
        $result='empty';
        setcookie($result,$value,time()+60*120);
        
        }else {
        $value=1;
        if(isset($_COOKIE[$result])){
        $value=$_COOKIE[$result];
        $value++;}
        setcookie($result,$value,time()+60*120);
        }
     }
     
     public function set_cookie_other() {
        $value=1;
        if(isset($_COOKIE['other'])){
        $value=$_COOKIE['other'];
        $value++;}
        setcookie('other',$value,time()+60*120);
        }
     

    public function set_cookie_back() {
                $resetdefence=$this->action;
                $value=$_COOKIE[$resetdefence];
                $value--;
                setcookie($resetdefence,$value, time()+60*120);
    }
    
      public function  reset_cookie(){
                foreach ($_COOKIE as $key => $value) {
                    setcookie($key, '', time()-1000);
                }
                $value='empty';
                $result='empty';
                setcookie($result,$value,time()+60*120);
    } 

}