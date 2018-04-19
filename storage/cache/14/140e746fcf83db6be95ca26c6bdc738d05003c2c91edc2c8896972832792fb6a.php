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
        echo "<div class=\"am-g am-g-fixed blog-g-fixed\">
  <div class=\"am-u-md-8\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["articles"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["articles"] ?? null) : null));
        foreach ($context['_seq'] as $context["key"] => $context["article"]) {
            // line 6
            echo "      <article class=\"blog-main\">
        <h3 class=\"am-article-title blog-title\">
          <a href=\"#\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
            echo "</a>
        </h3>
        <h4 class=\"am-article-meta blog-meta\">发布日期：";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "create_time", array()), "html", null, true);
            echo " &nbsp;&nbsp;<a href=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", array()), "html", null, true);
            echo "</a></h4>

        <div class=\"am-g blog-content\">
          ";
            // line 14
            echo "                ";
            echo (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["articles"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["content"] ?? null) : null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[$context["key"]] ?? null) : null);
            echo "
            ";
            // line 16
            echo "            
        </div>
      </article>

      <hr class=\"am-article-divider blog-hr\">

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
  ";
        // line 24
        if ((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["articles"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["pstring"] ?? null) : null)) {
            // line 25
            echo "    <ul class=\"am-pagination blog-pagination\">
      <li class=\"am-pagination-prev\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pstring"] ?? null), 1, array()), "html", null, true);
            echo "\">&laquo; 上一页</a></li>
      <li class=\"am-pagination-next\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pstring"] ?? null), 2, array()), "html", null, true);
            echo "\">下一页 &raquo;</a></li>
    </ul>
  ";
        }
        // line 30
        echo "  </div>

  <div class=\"am-u-md-4 blog-sidebar\">
    <div class=\"am-panel-group\">
      <section class=\"am-panel am-panel-default\">
        <div class=\"am-panel-hd\">关于我</div>
        <div class=\"am-panel-bd\">
          <p>";
        // line 37
        echo twig_escape_filter($this->env, ($context["info"] ?? null));
        echo "</p>
          <a class=\"am-btn am-btn-success am-btn-sm\" href=\"#\">查看更多 →</a>
        </div>
      </section>

      ";
        // line 42
        if ((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["recommend"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["articles"] ?? null) : null)) {
            // line 43
            echo "      <section class=\"am-panel am-panel-default\">
        <div class=\"am-panel-hd\">文章目录</div>
        <ul class=\"am-list blog-list\">
          ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["recommend"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["articles"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 47
                echo "            <li><a href=\"/index/index?article_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </ul>
      </section>
      ";
        }
        // line 52
        echo "
    </div>
  </div>

</div>

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
        return array (  139 => 52,  134 => 49,  123 => 47,  119 => 46,  114 => 43,  112 => 42,  104 => 37,  95 => 30,  89 => 27,  85 => 26,  82 => 25,  80 => 24,  77 => 23,  65 => 16,  60 => 14,  52 => 10,  47 => 8,  43 => 6,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/index.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Home\\index.html");
    }
}
