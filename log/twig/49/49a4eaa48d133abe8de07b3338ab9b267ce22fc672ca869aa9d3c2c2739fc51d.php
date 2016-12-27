<?php

/* news\add.php */
class __TwigTemplate_c860959a81a993710e10672413ec8cedd75edf5ad3c3fdff2f553da313ad8dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.php", "news\\add.php", 1);
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
<form action=\"newsadd\" method=\"post\">
<table border=1>
\t<tr>
\t\t<th>标题</th>
\t\t<td><input type=\"text\" name=\"title\" id=\"\"></td>
\t</tr>
\t<tr>
\t\t<th>作者</th>
\t\t<td><input type=\"text\" name=\"author\" id=\"\"></td>
\t</tr>

\t<tr>
\t\t<th></th>
\t\t<td><input type=\"submit\" value=\"提交\"></td>
\t</tr>
</table>
</form>
</center>
";
    }

    public function getTemplateName()
    {
        return "news\\add.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
<form action=\"newsadd\" method=\"post\">
<table border=1>
\t<tr>
\t\t<th>标题</th>
\t\t<td><input type=\"text\" name=\"title\" id=\"\"></td>
\t</tr>
\t<tr>
\t\t<th>作者</th>
\t\t<td><input type=\"text\" name=\"author\" id=\"\"></td>
\t</tr>

\t<tr>
\t\t<th></th>
\t\t<td><input type=\"submit\" value=\"提交\"></td>
\t</tr>
</table>
</form>
</center>
{% endblock %}", "news\\add.php", "D:\\phpStudy\\WWW\\mymvc\\app\\views\\news\\add.php");
    }
}
