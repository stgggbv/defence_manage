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
         switch ($this->action) {
            case "gard":
                $gard=1;
                if(isset($_COOKIE['gard'])){
                    $gard=$_COOKIE['gard'];
                    $gard++;
                }
                setcookie("gard",$gard, time()+60*120);
                break;
            case "backstep":
                $backstep=1;
                if(isset($_COOKIE['backstep'])){
                    $backstep=$_COOKIE['backstep'];
                    $backstep++;
                }
                setcookie("backstep",$backstep, time()+60*120);
                break;
            case "delcookie":
                foreach ($_COOKIE as $key => $value) {
                    setcookie($key, '', time()-1000);
                }
                break;
            case "gard/nodamage":
                $gardnodamage=1;
                if(isset($_COOKIE['gard/nodamage'])){
                    $gardnodamage=$_COOKIE['gard/nodamage'];
                    $gardnodamage++;
                }
                setcookie("gard/nodamage",$gardnodamage, time()+60*120);
                break;
                
            case "gard/bigdamage":
                $gardbigdamage=1;
                if(isset($_COOKIE['gard/bigdamage'])){
                    $gardbigdamage=$_COOKIE['gard/bigdamage'];
                    $gardbigdamage++;
                }
                setcookie("gard/bigdamage",$gardbigdamage, time()+60*120);
                break;
                
            default:
                break;
        }
    }
    
    public function set_cookie_back() {
                $resetdefence=$this->action;
                $value=$_COOKIE[$resetdefence];
                $value--;
                setcookie($resetdefence,$value, time()+60*120);
    }
}
