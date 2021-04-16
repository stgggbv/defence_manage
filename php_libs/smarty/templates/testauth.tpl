{$title}

<table border='1'>
    <tbody>
        {foreach from=$data item=item}
            <tr><td>{$item['id']}</td><td>{$item['name']}</td><td>{$item['price']}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
[<a href="{$SCRIPT_NAME}?type=logout">ログアウト</a>]
