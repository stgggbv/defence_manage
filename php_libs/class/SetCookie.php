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
}
