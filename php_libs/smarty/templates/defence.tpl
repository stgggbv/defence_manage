<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong>{$title}</strong>
<hr>
    {if ($popup)}<pre>データを保存しました。<br>
    続けて入力するか、結果を出力してください。</pre>{/if}
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=result&action=gard">ガード</a>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=result&action=backstep">バクステ</a>
          <br>
          <br>
          <br>
                <a href="{$SCRIPT_NAME}?type=chart">結果を出力</a>
                <br>
    </table>
</div>
</body>
</html>
