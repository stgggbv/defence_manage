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
              {if (!$frozen)}
              <form method="post" action="{$SCRIPT_NAME}">
                  <input type="text" name="other" maxlength="10" size="16" placeholder="その他" >
              <input type="submit" value="送信">
              <input type="hidden" name="type" value="result">
              </form>
              {else}
              <a href="{$SCRIPT_NAME}?type=result&other={$hoge}">{$hoge}</a>
              {/if}
          <br>
                <a href="{$SCRIPT_NAME}?type=chart">結果を出力</a>
                <br>
    </table>
</div>
</body>
</html>
