<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>

</head>
<body>
<div style="text-align:center;">
<hr>
<strong>{$title}</strong>
<hr>
   <canvas id="total" height="450" width="600"></canvas>

  <script type="text/javascript" >{$test}</script>

   <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=result&action=gard">ガード</a>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=result&action=backstep">バクステ</a>
          <br>
          <br>
          <br>
                <a href="{$SCRIPT_NAME}?type=defence&action=delcookie">データをクリア</a>
                <br>
    </table>
</div>
</body>
</html>
