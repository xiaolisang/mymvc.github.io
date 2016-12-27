<?php

/* news\save.php */
class __TwigTemplate_0c00ac16fc059e85c9cf3eb34fabe3a79a02acca36bc67ba413aff99bd597f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.php", "news\\save.php", 1);
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
<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news/newssave\" method=\"post\">
<table border=1>
\t<tr>
\t\t<th>标题</th>
\t\t<td><input type=\"text\" name=\"title\" id=\"\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "title", array()), "html", null, true);
        echo "\"></td>
\t</tr>
\t<tr>
\t\t<th>作者</th>
\t\t<td><input type=\"text\" name=\"author\" id=\"\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "author", array()), "html", null, true);
        echo "\"></td>
\t</tr>

\t<tr>
\t\t<th><input type=\"hidden\" name=\"id\" id=\"\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "id", array()), "html", null, true);
        echo "\"></th>
\t\t<td><input type=\"submit\" value=\"修改\"></td>
\t</tr>
</table>
</form>
</center>
";
    }

    public function getTemplateName()
    {
        return "news\\save.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  48 => 12,  41 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
<form action=\"{{url}}/news/newssave\" method=\"post\">
<table border=1>
\t<tr>
\t\t<th>标题</th>
\t\t<td><input type=\"text\" name=\"title\" id=\"\" value=\"{{ new.title}}\"></td>
\t</tr>
\t<tr>
\t\t<th>作者</th>
\t\t<td><input type=\"text\" name=\"author\" id=\"\" value=\"{{ new.author}}\"></td>
\t</tr>

\t<tr>
\t\t<th><input type=\"hidden\" name=\"id\" id=\"\" value=\"{{ new.id}}\"></th>
\t\t<td><input type=\"submit\" value=\"修改\"></td>
\t</tr>
</table>
</form>
</center>
{% endblock %}", "news\\save.php", "/usr/local/nginx/html/mymvc.github.io/app/views/news/save.php");
    }
}
