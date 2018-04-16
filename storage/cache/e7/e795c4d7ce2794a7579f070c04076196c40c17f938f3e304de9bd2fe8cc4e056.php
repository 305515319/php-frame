<?php

/* Home/layout.html */
class __TwigTemplate_636753c270c0589b20d2438b7213c1ea0d3764600c4791ebcfc75f651350db93 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>PHP-Frame框架--";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
</head>
<body>
\t";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "</body>
</html>";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t";
    }

    public function getTemplateName()
    {
        return "Home/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  38 => 10,  36 => 8,  30 => 5,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/layout.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Home\\layout.html");
    }
}
