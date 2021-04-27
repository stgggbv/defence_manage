<?php
class ChartView extends BaseController{
    
//    public $Totalchart;
//    public $Guardchart;
    public $guardDisplay;
    public $fastestRampageDisplay;
    public $grapDisplay;
    public $backstepDisplay;
    public $otherDisplay;
    private $result;
    private $defence;
    private $ctx_guard;
    private $ctx_fastestRampage;
    private $ctx_grap;
    private $ctx_backstep;
    private $ctx_other;


    public function WindowOnloadJsCode() {
        
        $ctx='var ctx = document.getElementById("total").getContext("2d");
                window.total = new Chart(ctx).Pie(total);';
        
        foreach ($_COOKIE as $key => $value){
            if($key=="guard"){
                $this->ctx_guard='var ctx_guard = document.getElementById("guard").getContext("2d");window.guard = new Chart(ctx_guard).Pie(guard);';
            }else if($key=="fastestRampage"){
                $this->ctx_fastestRampage='var ctx_fastestRampage = document.getElementById("fastestRampage").getContext("2d");window.fastestRampage = new Chart(ctx_fastestRampage).Pie(fastestRampage);';
            }else if($key=="grap"){
                $this->ctx_grap='var ctx_grap = document.getElementById("grap").getContext("2d");window.grap = new Chart(ctx_grap).Pie(grap);';
            }else if($key=="backstep"){
                $this->ctx_backstep='var ctx_backstep = document.getElementById("backstep").getContext("2d");window.backstep = new Chart(ctx_backstep).Pie(backstep);';
            }else if($key=="other"){
                $this->ctx_other='var ctx_other = document.getElementById("other").getContext("2d");window.other = new Chart(ctx_other).Pie(other);';
            }
        }
        
        $jscode='{'.
                $ctx. $this->ctx_guard. $this->ctx_fastestRampage.$this->ctx_grap.  
                $this->ctx_backstep. $this->ctx_other. 
        '}';
        
        return $jscode;
    }
    
    private function Translate_Japanese_defence($key) {
                switch ($key){
                case "guard":
                    $key="ガード";
                    break;
                case "backstep":
                    $key="バックステップ";
                    break;
                case "fastestRampage":
                    $key="最速暴れ";
                    break;
                case "grap":
                    $key="投げ抜け";
                    break;
                case "other";
                    $key= $this->other;
                }
        $this->defence=$key;
    }
    
    public function Total_Chart() {

        foreach ($_COOKIE as $key => $value){
            if(!preg_match("/.\/./", $key)){
                $this->Translate_Japanese_defence($key);
                $totalData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=> $this->defence,);}
        }   
        
        $TotalChart=json_encode($totalData);
        return $TotalChart;
    }
    
    private function Translate_Japanese_Result($param,$key) {
                switch ($key){
                case $param."/fataldamage":
                    $key="大ダメージ";
                    break;
                case $param."/nodamage":
                    $key="ノーダメージ";
                    break;
                case $param."/smalldamage":
                    $key="小ダメージ";
                    break;
                case $param."/smallandsetup":
                    $key="小ダメージから起き攻めを受けた";
                    break;
                case $param."/fatalandsetup":
                    $key="大ダメージから起き攻めを受けた";
                    break;
                }
        $this->result=$key;
    }
    
    public function Guard_Chart() {
        foreach ($_COOKIE as $key => $value){
            if(preg_match("/guard\/./", $key)){
            $this->Translate_Japanese_Result("guard",$key);
            $guardData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=> $this->result,);
            }
        }
            if(empty($guardData)){
                $guardData[]=array('value'=>0,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>"データなし",);}
        
        $GuardChart=json_encode($guardData);
        return $GuardChart;
    }
    
    public function FastestRampage_Chart() {
        foreach ($_COOKIE as $key => $value){
            if(preg_match("/fastestRampage\/./", $key)){
            $this->Translate_Japanese_Result("fastestRampage",$key);
            $fastestRampageData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=> $this->result,);
            }
        }
            if(empty($fastestRampageData)){
                $fastestRampageData[]=array('value'=>0,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>"データなし",);}
        
        $FastestRampageChart=json_encode($fastestRampageData);
        return $FastestRampageChart;
    }
    
    public function Grap_Chart() {
        foreach ($_COOKIE as $key => $value){
            if(preg_match("/grap\/./", $key)){
            $this->Translate_Japanese_Result("grap",$key);
            $grapData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=> $this->result,);
            }
        }
            if(empty($guardData)){
                $grapData[]=array('value'=>0,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>"データなし",);}
        
        $GrapChart=json_encode($grapData);
        return $GrapChart;
    }
    
    public function Backstep_Chart() {
        foreach ($_COOKIE as $key => $value){
            if(preg_match("/backstep\/./", $key)){
            $this->Translate_Japanese_Result("backstep",$key);
            $backstepData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=> $this->result,);
            }
        }
            if(empty($backstepData)){
                $backstepData[]=array('value'=>0,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>"データなし",);}
        
        $BackstepChart=json_encode($backstepData);
        return $BackstepChart;
    }
    
    public function Other_Chart() {
        foreach ($_COOKIE as $key => $value){
            if(preg_match("/other\/./", $key)){
            $this->Translate_Japanese_Result("other",$key);
            $otherData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=> $this->result,);
            }
        }
            if(empty($otherData)){
                $otherData[]=array('value'=>0,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>"データなし",);}
        
        $OtherChart=json_encode($otherData);
        return $OtherChart;
    }
    
    public function chart_display() {
        foreach ($_COOKIE as $key => $value){
            if($key=="guard"){
                $this->guardDisplay=true;
            }else if($key=="fastestRampage"){
                $this->fastestRampageDisplay=true;
            }else if($key=="grap"){
                $this->grapDisplay=true;
            }else if($key=="backstep"){
                $this->backstepDisplay=true;
            }else if($key=="other"){
                $this->otherDisplay=true;
            }
            
        }
    }
    
}