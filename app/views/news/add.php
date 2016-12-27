{% extends "layout.php" %}
{% block content %}
<center>
<form action="newsadd" method="post">
<table border=1>
	<tr>
		<th>标题</th>
		<td><input type="text" name="title" id=""></td>
	</tr>
	<tr>
		<th>作者</th>
		<td><input type="text" name="author" id=""></td>
	</tr>

	<tr>
		<th></th>
		<td><input type="submit" value="提交"></td>
	</tr>
</table>
</form>
</center>
{% endblock %}