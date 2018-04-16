<?php

/* Home/index.html */
class __TwigTemplate_0d28a33151c3095de8930e1926a9df6ae7909fd9c653573acbb2c5b5f89a3d6f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Home/layout.html", "Home/index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Home/layout.html";
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
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
\t<tr><td>用户ID</td><td>昵称1111222</td></tr>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "\t\t<tr><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nickName", array()), "html", null, true);
            echo "</td></tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "Home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  44 => 7,  40 => 6,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/index.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Home\\index.html");
    }
}
