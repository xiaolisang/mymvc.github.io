<?php

/* news\index.php */
class __TwigTemplate_5a39efd694592d0aa0199ee2d24964c246c4048d7d45473980f4c9c13a4f4551 extends Twig_Template
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
        echo "<center>
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news/newsadd\">添加新闻</a>
<table border=1>
\t<tr>
\t\t<td>标题</td>
\t\t<td>作者</td>
\t\t<td>添加时间</td>
\t\t<td>操作</td>
\t</tr>

\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_list"]) ? $context["news_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            echo "\t
\t<tr>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "author", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "addtime", array()), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/news/del\">删除</a>|<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/news/update\">修改</a></td>
\t</tr>
\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>
</center>
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
        return array (  77 => 22,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  46 => 13,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
<a href=\"{{ url }}/news/newsadd\">添加新闻</a>
<table border=1>
\t<tr>
\t\t<td>标题</td>
\t\t<td>作者</td>
\t\t<td>添加时间</td>
\t\t<td>操作</td>
\t</tr>

\t{% for val in news_list %}\t
\t<tr>
\t\t<td>{{ val.title }}</td>
\t\t<td>{{ val.author }}</td>
\t\t<td>{{ val.addtime }}</td>
\t\t<td><a href=\"{{ url }}/news/del\">删除</a>|<a href=\"{{ url }}/news/update\">修改</a></td>
\t</tr>
\t
\t{% endfor %}
</table>
</center>
{% endblock %}", "news\\index.php", "D:\\phpStudy\\WWW\\mymvc\\app\\views\\news\\index.php");
    }
}
