{% extends "layout.php" %}
{% block content %}
<center>
<form action="{{url}}/news/newssave" method="post">
<table border=1>
	<tr>
		<th>标题</th>
		<td><input type="text" name="title" id="" value="{{ new.title}}"></td>
	</tr>
	<tr>
		<th>作者</th>
		<td><input type="text" name="author" id="" value="{{ new.author}}"></td>
	</tr>

	<tr>
		<th><input type="hidden" name="id" id="" value="{{ new.id}}"></th>
		<td><input type="submit" value="修改"></td>
	</tr>
</table>
</form>
</center>
{% endblock %}