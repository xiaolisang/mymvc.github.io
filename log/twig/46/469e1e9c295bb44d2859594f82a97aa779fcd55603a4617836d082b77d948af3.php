<?php

/* layout.php */
class __TwigTemplate_557938481cc49eabdd236a5b0c97750bf8d95bb3d5230faa5b794ac53ddb2a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html> 
<html> 
<head> 
  <meta charset=\"utf-8\"> 
  <title></title> 
</head>
<body>
\t<script src=\"../../jquery-1.9.1.min.js\"></script>

";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
</body>

</html>";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  33 => 13,  31 => 10,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html> 
<html> 
<head> 
  <meta charset=\"utf-8\"> 
  <title></title> 
</head>
<body>
\t<script src=\"../../jquery-1.9.1.min.js\"></script>

{% block content %}

{% endblock %}

</body>

</html>", "layout.php", "/usr/local/nginx/html/mymvc.github.io/app/views/layout.php");
    }
}
