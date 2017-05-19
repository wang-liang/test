{$smarty.now}
{$smarty.version}
{$smarty.server.SERVER_NAME}
{$smarty.const.ROOT}

{config_load file = "site.conf"}
<br />
{#copyright#}
{$smarty.config.police}

<ul>
	{foreach $star as $k => $v}
	<li>{$k}---{$v}</li>
	{/foreach}
</ul>

<p>{'hello'|str_repeat:$level}</p>