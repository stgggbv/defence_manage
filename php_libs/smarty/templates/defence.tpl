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
    {if ($popup)}データを保存しました。<br>
    続けて入力するか、結果を出力してください。{/if}
    {if ($clear)}データをクリアしました。{/if}
    {if ($message)}防御方法を選び直してください。{/if}
          <br>
          <br>
    {if ($rollback)}
          <form method="post" action="{$SCRIPT_NAME}">
              <input type="submit" value="直前の防御結果を選びなおす">
              <input type="hidden" name="type" value="result">
              <input type="hidden" name="action" value="{$action}">
              <input type="hidden" name="back" value="true">
          </form>
    {/if}
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
