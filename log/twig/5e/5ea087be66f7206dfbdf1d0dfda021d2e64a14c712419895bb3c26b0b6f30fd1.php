<?php

/* news\index.php */
class __TwigTemplate_ac3d0fc5831f430d68c8eedf968a41670e6b49792b4b426d2f224255dcfa1fec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.php", "news\\index.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<center>
<h2><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news/newsadd\">添加新闻</a></h2>

<table border=1>
\t<tr>
\t\t<td>标题</td>
\t\t<td>作者</td>
\t\t<td>添加时间</td>
\t\t<td>操作</td>
\t</tr>
\t<tbody id=\"tbody\">


\t</tbody>
</table>

</center>
<script>
\t\$(function(){
\t\t//alert(1)
\t\t\$.getJSON(\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news/allnews\", function(json){
\t\t //alert(json.length);
\t\t  \tvar str=\"\";
\t\t  \tfor (var i = 0; i < json.length; i++) {
\t\t  \t\tstr+='<tr><td>'+json[i].title+'</td><td>'+json[i].author+'</td><td>'+json[i].addtime+'</td><td><a href=\"javascript:;\" class=\"del\" uu=\"'+json[i].id+'\">删除</a>|<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news/newssave/id/'+json[i].id+'\">修改</a></td></tr>'
\t\t  \t};
\t\t  \t\$(\"#tbody\").html(str);
\t\t});

\t\t\$(document).on('click',\".del\",function(){
\t\t\tvar _this=\$(this);
\t\t\tvar id=_this.attr('uu');
\t\t\t\$.get(\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news/del\",{id:id}, function(data){
\t\t\t\tif (data==1) {
\t\t\t\t\t_this.parent().parent().remove();
\t\t\t\t}else{
\t\t\t\t\talert(\"删除失败\");
\t\t\t\t}
\t\t\t});
\t\t})
\t})
</script>

";
    }

    public function getTemplateName()
    {
        return "news\\index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  64 => 28,  57 => 24,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.php\" %}
{% block content %}

<center>
<h2><a href=\"{{ url }}/news/newsadd\">添加新闻</a></h2>

<table border=1>
\t<tr>
\t\t<td>标题</td>
\t\t<td>作者</td>
\t\t<td>添加时间</td>
\t\t<td>操作</td>
\t</tr>
\t<tbody id=\"tbody\">


\t</tbody>
</table>

</center>
<script>
\t\$(function(){
\t\t//alert(1)
\t\t\$.getJSON(\"{{ url }}/news/allnews\", function(json){
\t\t //alert(json.length);
\t\t  \tvar str=\"\";
\t\t  \tfor (var i = 0; i < json.length; i++) {
\t\t  \t\tstr+='<tr><td>'+json[i].title+'</td><td>'+json[i].author+'</td><td>'+json[i].addtime+'</td><td><a href=\"javascript:;\" class=\"del\" uu=\"'+json[i].id+'\">删除</a>|<a href=\"{{ url }}/news/newssave/id/'+json[i].id+'\">修改</a></td></tr>'
\t\t  \t};
\t\t  \t\$(\"#tbody\").html(str);
\t\t});

\t\t\$(document).on('click',\".del\",function(){
\t\t\tvar _this=\$(this);
\t\t\tvar id=_this.attr('uu');
\t\t\t\$.get(\"{{ url }}/news/del\",{id:id}, function(data){
\t\t\t\tif (data==1) {
\t\t\t\t\t_this.parent().parent().remove();
\t\t\t\t}else{
\t\t\t\t\talert(\"删除失败\");
\t\t\t\t}
\t\t\t});
\t\t})
\t})
</script>

{% endblock %}
", "news\\index.php", "/usr/local/nginx/html/mymvc.github.io/app/views/news/index.php");
    }
}
