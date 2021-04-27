<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
<script type="text/javascript">
            var total ={$TotalChart};
            var guard ={$GuardChart};
            var fastestRampage ={$FastestRampageChart};
            var grap ={$GrapChart};
            var backstep ={$BackstepChart};
            var other ={$OtherChart};
            window.onload=function(){$WindowOnloadJsCode};
</script>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong>{$title}</strong>
<hr>
   <h2>使用した防御方法の割合</h2><br>
   <canvas id="total" height="300" width="450"></canvas>
        
   <br>
   <br>
   <br>
   {if ($guardDisplay)}
       <h2>ガード後の状況割合</h2><br>
       <canvas id="guard" height="300" width="450"></canvas><br><br>
   {/if}
   {if ($fastestRampageDisplay)}
        <h2>最速暴れ後の状況割合</h2><br>
        <canvas id="fastestRampage" height="300" width="450"></canvas><br><br>
   {/if}
   {if ($grapDisplay)}
        <h2>投げ抜け後の状況割合</h2><br>
        <canvas id="grap" height="300" width="450"></canvas><br><br>
   {/if}
   {if ($backstepDisplay)}
        <h2>バックステップ後の状況割合</h2><br>
        <canvas id="backstep" height="300" width="450"></canvas><br><br>
   {/if}
   {if ($otherDisplay)}
        <h2>{$hidden}後の状況割合</h2><br>
        <canvas id="other" height="300" width="450"></canvas><br><br>
   {/if}

   
   <br>

              <form method="post" action="{$SCRIPT_NAME}">    
              <input type="submit" value="続けて入力する">
              {*<input type="hidden" name="type" value="defence">*}
              <input type="hidden" name="hidden" value={$hidden}>
              </form>
              <br>
              <form method="post" action="{$SCRIPT_NAME}">    
              <input type="submit" value="データクリア">
              <input type="hidden" name="type" value="defence">
              <input type="hidden" name="action" value="delcookie">
              </form>
</div>
</body>
</html>
