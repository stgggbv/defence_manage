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
        $value= 0;
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
     

    public function set_cookie_back() {
                $resetdefence=$this->action;
                $value=$_COOKIE[$resetdefence];
                $value--;
                setcookie($resetdefence,$value, time()+60*120);
    }
    
    public function  reset_cookie(){
                foreach ($_COOKIE as $key => $value) {
                    setcookie($key, $value, time()-1000);
                }
                $value=0;
                $result='empty';
                setcookie($result,$value,time()+60*120);
    } 

}