<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong>{$action}</strong>
<hr>
    {if ($message)}結果を選び直してください。{/if}
          <br>
          <br>
          <form method="post" action="{$SCRIPT_NAME}">
              <input type="submit" value="防御方法を選びなおす">
              <input type="hidden" name="type" value="defence">
              <input type="hidden" name="action" value="{$action}">
              <input type="hidden" name="back" value="true">
          </form>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=defence&action={$action}/nodamage">ノーダメ</a>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=defence&action={$action}/bigdamage">大ダメ</a>
          <br>
          <br>
          <br>
        
    </table>
</div>
</body>
</html>
