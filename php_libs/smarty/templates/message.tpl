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
    <table>
      <tr>
        
      <td style="vertical-align: top;">
	[ <a href="{$SCRIPT_NAME}">トップページへ</a> ]
{if ($is_system) }
	<br>
	<br>
      	[ <a href="{$SCRIPT_NAME}?type=list&action=form{$add_pageID}">会員一覧</a> ]
{/if}
	<br>
	<br>
	{$disp_login_state}
      </td>
        
      <td>
  		{$message}


        </td>
      </tr>
    </table>
</div>
{if ($debug_str)}<pre>{$debug_str}</pre>{/if}
</body>
</html>
