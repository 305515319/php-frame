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
<html>
<head lang=\"en\">
  <meta charset=\"UTF-8\">
  <title>PHP-FRAME</title>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
  <link rel=\"alternate icon\" type=\"image/png\" href=\"/app/Views/Admin/assets/i/favicon.png\">
  <link rel=\"stylesheet\" href=\"/app/Views/Admin/assets/css/amazeui.min.css\"/>
  <style>
    @media only screen and (min-width: 1200px) {
      .blog-g-fixed {
        max-width: 1200px;
      }
    }

    @media only screen and (min-width: 641px) {
      .blog-sidebar {
        font-size: 1.4rem;
      }
    }

    .blog-main {
      padding: 20px 0;
    }

    .blog-title {
      margin: 10px 0 20px 0;
    }

    .blog-meta {
      font-size: 14px;
      margin: 10px 0 20px 0;
      color: #222;
    }

    .blog-meta a {
      color: #27ae60;
    }

    .blog-pagination a {
      font-size: 1.4rem;
    }

    .blog-team li {
      padding: 4px;
    }

    .blog-team img {
      margin-bottom: 0;
    }

    .blog-content img,
    .blog-team img {
      max-width: 100%;
      height: auto;
    }

    .blog-footer {
      padding: 10px 0;
      text-align: center;
    }
  </style>
</head>
<body>
<header class=\"am-topbar\">
  <div style=\"max-width: 1200px;margin:0 auto\">
  <h1 class=\"am-topbar-brand\">
    <a href=\"/index/index\">PHP-FRAME</a>
  </h1>

  <button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only\"
          data-am-collapse=\"{target: '#doc-topbar-collapse'}\"><span class=\"am-sr-only\">导航切换</span> <span
      class=\"am-icon-bars\"></span></button>

  <div class=\"am-collapse am-topbar-collapse\" id=\"doc-topbar-collapse\">
    <ul class=\"am-nav am-nav-pills am-topbar-nav\">
      <li><a href=\"/index/index\">首页</a></li>
      ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 84
            echo "        <li><a href=\"/index/index?cate_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </ul>

    <form class=\"am-topbar-form am-topbar-left am-form-inline am-topbar-right\" role=\"search\">
      <div class=\"am-form-group\">
        <input type=\"text\" class=\"am-form-field am-input-sm\" placeholder=\"搜索文章\">
      </div>
      <button type=\"submit\" class=\"am-btn am-btn-default am-btn-sm\">搜索</button>
    </form>

  </div>
</div>
</header>


";
        // line 100
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "

<footer class=\"blog-footer\">
    <small>© 2018 Power By PHP-FRAME</small>
</footer>

<!--[if lt IE 9]>
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"/app/Views/Admin/assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"/app/Views/Admin/assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<script src=\"/app/Views/Admin/assets/js/amazeui.min.js\"></script>

</body>
</html>
";
    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
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
        return array (  164 => 100,  141 => 102,  139 => 100,  123 => 86,  112 => 84,  108 => 83,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/layout.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Home\\layout.html");
    }
}
