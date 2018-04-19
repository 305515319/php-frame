<?php

/* Error/404.html */
class __TwigTemplate_b51c2e0c39da5dc78b0d7d80877f594fb7cac014f8a27d0d80722bba776ef6d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js fixed-layout\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>404错误，页面不存在</title>
  <meta name=\"description\" content=\"这是一个404页面\">
  <meta name=\"keywords\" content=\"404\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
  <link rel=\"icon\" type=\"image/png\" href=\"/app/Views/Admin/assets/i/favicon.png\">
  <link rel=\"apple-touch-icon-precomposed\" href=\"/app/Views/Admin/assets/i/app-icon72x72@2x.png\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Amaze UI\" />
  <link rel=\"stylesheet\" href=\"/app/Views/Admin/assets/css/amazeui.min.css\"/>
  <link rel=\"stylesheet\" href=\"/app/Views/Admin/assets/css/admin.css\">
</head>
<body>
<!--[if lte IE 9]>
<p class=\"browsehappy\">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href=\"http://browsehappy.com/\" target=\"_blank\">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<div class=\"am-cf admin-main\" style=\"padding-top: 0;\">
  <!-- content start -->
  <div class=\"admin-content\">
    <div class=\"admin-content-body\">

      <div class=\"am-g\">
        <div class=\"am-u-sm-12\">
          <h2 class=\"am-text-center am-text-xxxl am-margin-top-lg\">404. Not Found</h2>
          <p class=\"am-text-center\">没有找到你要的页面</p>
        <pre class=\"page-404\">
          .----.
       _.'__    `.
   .--(\$)(\$\$)---/#\\
 .' @          /###\\
 :         ,   #####
  `-..__.-' _.-\\###/
        `;_:    `\"'
      .'\"\"\"\"\"`.
     /,  ya ,\\\\
    //  404!  \\\\
    `-._______.-'
    ___`. | .'___
   (______|______)
        </pre>
          <p class=\"am-text-center\"><a href=\"/\">回到首页</a></p>
        </div>
      </div>
    </div>

    <footer class=\"admin-content-footer\">
      <hr>
      <p class=\"am-padding-left\">© 2018 Power By PHP-FRAME</p>
    </footer>
  </div>
  <!-- content end -->

</div>

<a href=\"#\" class=\"am-icon-btn am-icon-th-list am-show-sm-only admin-menu\" data-am-offcanvas=\"{target: '#admin-offcanvas'}\"></a>


<!--[if lt IE 9]>
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"/app/Views/Admin/assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"/app/Views/Admin/assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<script src=\"/app/Views/Admin/assets/js/amazeui.min.js\"></script>
<script src=\"/app/Views/Admin/assets/js/app.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Error/404.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Error/404.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Error\\404.html");
    }
}
