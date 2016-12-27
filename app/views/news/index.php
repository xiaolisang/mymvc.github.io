{% extends "layout.php" %}
{% block content %}

<center>
<h2><a href="{{ url }}/news/newsadd">添加新闻</a></h2>

<table border=1>
	<tr>
		<td>标题</td>
		<td>作者</td>
		<td>添加时间</td>
		<td>操作</td>
	</tr>
	<tbody id="tbody">


	</tbody>
</table>

</center>
<script>
	$(function(){
		//alert(1)
		$.getJSON("{{ url }}/news/allnews", function(json){
		 //alert(json.length);
		  	var str="";
		  	for (var i = 0; i < json.length; i++) {
		  		str+='<tr><td>'+json[i].title+'</td><td>'+json[i].author+'</td><td>'+json[i].addtime+'</td><td><a href="javascript:;" class="del" uu="'+json[i].id+'">删除</a>|<a href="{{ url }}/news/newssave/id/'+json[i].id+'">修改</a></td></tr>'
		  	};
		  	$("#tbody").html(str);
		});

		$(document).on('click',".del",function(){
			var _this=$(this);
			var id=_this.attr('uu');
			$.get("{{ url }}/news/del",{id:id}, function(data){
				if (data==1) {
					_this.parent().parent().remove();
				}else{
					alert("删除失败");
				}
			});
		})
	})
</script>

{% endblock %}
