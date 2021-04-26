<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
<script type="text/javascript">
            var total ={$TotalChart};
            var guard ={$GuardChart};
            window.onload=function(){$WindowOnloadJsCode};
</script>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong>{$title}</strong>
<hr>
   <canvas id="total" height="300" width="450"></canvas>
        
   <br>
   <br>
   <br>
   <canvas id="guard" height="300" width="450"></canvas>

   
   <br>

                <a href="{$SCRIPT_NAME}?type=defence&action=delcookie">データクリア</a>
</div>
</body>
</html>
