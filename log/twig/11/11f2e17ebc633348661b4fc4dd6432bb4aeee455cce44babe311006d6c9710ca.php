<?php

/* layout.php */
class __TwigTemplate_efcc270bcb9f2077be256f7b57c94b69dbb300e3f8a20e71d0ef219263f72d9f extends Twig_Template
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

";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
</body>

</html>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.php";
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 12,  30 => 9,  20 => 1,);
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

{% block content %}

{% endblock %}

</body>

</html>", "layout.php", "D:\\phpStudy\\WWW\\mymvc\\app\\views\\layout.php");
    }
}
