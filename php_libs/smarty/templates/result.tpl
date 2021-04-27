<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong>結果入力画面</strong>
<hr>
    {if ($message)}結果を選び直してください。{/if}
          <br>
          <br>
          <form method="post" action="{$SCRIPT_NAME}">
              <input type="submit" value="防御方法を選びなおす">
              <input type="hidden" name="type" value="defence">
              <input type="hidden" name="action" value="{$action}">
              <input type="hidden" name="hidden" value="{$hidden}">
              <input type="hidden" name="back" value="true">
          </form>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=defence&action={$action}/nodamage&hidden={$hidden}">
                    ノーダメージ</a>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=defence&action={$action}/fataldamage&hidden={$hidden}">
                    大ダメージ</a>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=defence&action={$action}/smalldamage&hidden={$hidden}">
                    小ダメージ</a>
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=defence&action={$action}/smallandsetup&hidden={$hidden}                    ">小ダメージから起き攻めを受けた</a>    
          <br>
          <br>
	        <a href="{$SCRIPT_NAME}?type=defence&action={$action}/fatalandsetup&hidden={$hidden}                    ">大ダメージから起き攻めを受けた</a>        
          <br>
          <br>
          <br>
        
    </table>
</div>
</body>
</html>
