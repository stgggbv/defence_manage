<?php
class ChartView extends BaseController{
    
//    public $Totalchart;
//    public $Guardchart;


    public function WindowOnloadJsCode() {
        $jscode='{
        var ctx = document.getElementById("total").getContext("2d");
        window.total = new Chart(ctx).Pie(total);
        var ctx_2 = document.getElementById("guard").getContext("2d");
        window.guard = new Chart(ctx_2).Pie(guard);
        }';
        return $jscode;
    }
    
    public function Total_Chart() {

        foreach ($_COOKIE as $key => $value){
            if(!preg_match("/.\/./", $key)){
                switch ($key){
                case "guard":
                    $key="ガード";
                    break;
                case "backstep":
                    $key="バックステップ";
                    break;
                case "other";
                    $key= $this->other;
                }
            $totalData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>$key,);}
        }   
        
        $TotalChart=json_encode($totalData);
        return $TotalChart;
        
    }
    

    public function Guard_Chart() {
        foreach ($_COOKIE as $key => $value){
            if(preg_match("/guard\/./", $key)){
                switch ($key){
                case "guard/bigdamage":
                    $key="大ダメージ";
                    break;
                case "guard/nodamage":
                    $key="ノーダメージ";
                    break;
                }
            $guardData[]=array('value'=>$value,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>$key,);}
        }
            if(empty($guardData)){
                $guardData[]=array('value'=>0,'color' => '#F7464A','highlight' =>                               '#F7464A','label'=>"データなし",);}
        
        $GuardChart=json_encode($guardData);
        return $GuardChart;
    }
    
//     var ctx = document.getElementById("myChart");
//    var myChart = new Chart(ctx, {
//      type: タイプ,
//      data: データ,
//      options: オプション

//    public function js_code() {
//      
//    }


}
//$pieData = array(
//    1 => array(
//        'value' => 10,
//        'color' => '#F7464A',
//        'highlight' => '#F7464A',
//        'label' => 'りんご',
//    ),
//    2 => array(
//        'value' => 10,
//        'color' => '#F7464A',
//        'highlight' => '#F7464A',
//        'label' => 'りんご',
//    ),
//    3 => array(
//        'value' => 10,
//        'color' => '#F7464A',
//        'highlight' => '#F7464A',
//        'label' => 'りんご',
//    )
//);
//
//$jscode='window.onload = function(){
//      var ctx = document.getElementById("total").getContext("2d");
//      window.myPie = new Chart(ctx).Pie(pieData );
//   }';