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
    {if ($popup)}<br>データを保存しました。<br>
    続けて入力するか、結果を出力してください。{/if}
    {if ($clear)}<br>データをクリアしました。{/if}
    {if ($message)}<br>防御方法を選び直してください。{/if}
          <br>
    {if ($rollback)}
      <br><form method="post" action="{$SCRIPT_NAME}">
              <input type="submit" value="直前の防御結果を選びなおす">
              <input type="hidden" name="type" value="result">
              <input type="hidden" name="action" value="{$action}">
              <input type="hidden" name="hidden" value="{$hidden}">
              <input type="hidden" name="back" value="true">
          </form>
    {/if}
          <br>
          <br>
	        ・<a href="{$SCRIPT_NAME}?type=result&action=guard&hidden={$hidden}">ガード</a>
          <br>
          <br>
	        ・<a href="{$SCRIPT_NAME}?type=result&action=fastestRampage&hidden={$hidden}">最速暴れ</a>
          <br>
          <br>
	        ・<a href="{$SCRIPT_NAME}?type=result&action=grap&hidden={$hidden}">投げ抜け</a>
          <br>
          <br>
	        ・<a href="{$SCRIPT_NAME}?type=result&action=backstep&hidden={$hidden}">バックステップ</a>
          <br>
          <br>
              {if (!$frozen)}
              <form method="post" action="{$SCRIPT_NAME}">    
              ・<input type="text" name="other" maxlength="10" size="16" placeholder="その他" >
              <input type="submit" value="送信"><br>
              ※一度送信するとデータをリセットするまで変更できません。
              <input type="hidden" name="type" value="result">
              <input type="hidden" name="action" value="other">
              </form>
              {else}
                  ・<a href="{$SCRIPT_NAME}?type=result&action=other&other={$otherText}">{$otherText}                   </a><br>
              {/if}
          <br>
              <form method="post" action="{$SCRIPT_NAME}">    
              <input type="submit" value="結果を出力">
              <input type="hidden" name="type" value="chart">
              <input type="hidden" name="hidden" value={$hidden}>
              </form>
              <br>
              <form method="post" action="{$SCRIPT_NAME}">    
              <input type="submit" value="データクリア">
              <input type="hidden" name="type" value="defence">
              <input type="hidden" name="action" value="delcookie">
              </form>
                <br>
    </table>
</div>
    <hr>
    <p>使用方法</p><br>
    このサイトでは「ストリートファイター5」内で、自分の使用している防御方法の統計をとることができます。<br>
    自分の試合のリプレイ動画を見ながらデータを入力してください。<br>
    統計をとる場面は自分で考えて使用してください。例えば、被起き攻めの状況や、ジャンプ攻撃をガードした状況など、
    自分で場面を限定して使用することをおすすめします。<br>
    <hr>
    <p>使用上の注意</p><br>
    ※データは2時間でクリアされます。<br>
    ※cookieを使用できる環境でのみ正常に動作します。<br>
    ※ブラウザの戻るボタンを押すと正常な結果を出力出来ません。<br>
    <hr>
</div>
</body>
</html>
