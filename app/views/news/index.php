{% extends "layout.php" %}
{% block content %}
<center>
<a href="{{ url }}/news/newsadd">添加新闻</a>
<table border=1>
	<tr>
		<td>标题</td>
		<td>作者</td>
		<td>添加时间</td>
		<td>操作</td>
	</tr>

	{% for val in news_list %}	
	<tr>
		<td>{{ val.title }}</td>
		<td>{{ val.author }}</td>
		<td>{{ val.addtime }}</td>
		<td><a href="{{ url }}/news/del/id/{{ val.id}}">删除</a>|<a href="{{ url }}/news/update/id/{{ val.id}}">修改</a></td>
	</tr>
	
	{% endfor %}
</table>
</center>
{% endblock %}