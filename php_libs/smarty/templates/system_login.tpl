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
        <td>
	  <form {$form.attributes}>
          <table>
            <tr>
              <th>管理画面:</th>
            </tr>
            <tr>
              <td><div style="text-align: right">{$form.username.label}:</div></td>
              <td> {$form.username.html}</td>
            </tr>

	    <tr>
          <td><div style="text-align: right">{$form.password.label}:</div></td>
              <td> {$form.password.html}</td>
            </tr>
            <tr>
              <td colspan="2" >
                <input type="hidden" name="type" value="{$type}">
                <div style="text-align:center;">{$form.submit.html}</div>
		<br>
                <div style="color:red;font-size: smaller;"> {$auth_error_mess} </div></td>
            </tr>
          </table>
	  </form>
	  
        </td>
        <td>
            <br>
            <br>
        </td>
      </tr>
    </table>
</div>
{if ($debug_str)}<pre>{$debug_str}</pre>{/if}
</body>
</html>