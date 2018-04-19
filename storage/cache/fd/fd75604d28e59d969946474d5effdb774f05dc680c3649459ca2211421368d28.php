<?php

/* Admin/layout.html */
class __TwigTemplate_4cb5c993f146a1bc76d72c20a519f81048a7c6c361af29ccc9bd08487ce5ee0f extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js fixed-layout\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>PHP-FRAME管理后台</title>
  <meta name=\"description\" content=\"PHP-FRAME管理后台\">
  <meta name=\"keywords\" content=\"index\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
  <link rel=\"icon\" type=\"image/png\" href=\"/app/Views/Admin/assets/i/favicon.png\">
  <link rel=\"apple-touch-icon-precomposed\" href=\"/app/Views/Admin/assets/i/app-icon72x72@2x.png\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Amaze UI\" />
  <link rel=\"stylesheet\" href=\"/app/Views/Admin/assets/css/amazeui.min.css\"/>
  <link rel=\"stylesheet\" href=\"/app/Views/Admin/assets/css/admin.css\">
  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src=\"/app/Views/Admin/assets/js/jquery-1.7.2.min.js\"></script>
  <!--<![endif]-->
  <script src=\"/app/Views/Admin/assets/js/wangEditor.min.js\"></script>
  <script src=\"/app/Views/Admin/assets/ueditor/ueditor.config.js\"></script>
  <script src=\"/app/Views/Admin/assets/ueditor/ueditor.all.min.js\"></script>

</head>
<body>
<!--[if lte IE 9]>
<p class=\"browsehappy\">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href=\"http://browsehappy.com/\" target=\"_blank\">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class=\"am-topbar am-topbar-inverse admin-header\">
  <div class=\"am-topbar-brand\">
    <strong>PHP-FRAME</strong>  <small style=\"display: inline-block;color: #eee\">后台管理</small>
  </div>

  <button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only\" data-am-collapse=\"{target: '#topbar-collapse'}\"><span class=\"am-sr-only\">导航切换</span> <span class=\"am-icon-bars\"></span></button>

  <div class=\"am-collapse am-topbar-collapse\" id=\"topbar-collapse\">

    <ul class=\"am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list\">
      <li><a href=\"javascript:;\"><span class=\"am-icon-envelope-o\"></span> 收件箱 <span class=\"am-badge am-badge-warning\">5</span></a></li>
      <li class=\"am-dropdown\" data-am-dropdown>
        <a class=\"am-dropdown-toggle\" data-am-dropdown-toggle href=\"javascript:;\">
          <span class=\"am-icon-users\"></span> 管理员 <span class=\"am-icon-caret-down\"></span>
        </a>
        <ul class=\"am-dropdown-content\">
          <li><a href=\"/admin/profile\"><span class=\"am-icon-user\"></span> 资料</a></li>
          <li><a href=\"/admin/setting\"><span class=\"am-icon-cog\"></span> 设置</a></li>
          <li><a href=\"/admin/logout\"><span class=\"am-icon-power-off\"></span> 退出</a></li>
        </ul>
      </li>
      <li class=\"am-hide-sm-only\"><a href=\"javascript:;\" id=\"admin-fullscreen\"><span class=\"am-icon-arrows-alt\"></span> <span class=\"admin-fullText\">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class=\"am-cf admin-main\">
  <!-- sidebar start -->
  <div class=\"admin-sidebar am-offcanvas\" id=\"admin-offcanvas\">
    <div class=\"am-offcanvas-bar admin-offcanvas-bar\">

      <ul class=\"am-list admin-sidebar-list\">
        <li><a href=\"/admin/index\"><span class=\"am-icon-home\"></span> 首页</a></li>
        <li class=\"admin-parent\">
          <a class=\"am-cf\" data-am-collapse=\"{target: '#collapse-nav'}\"><span class=\"am-icon-cog\"></span> 系统模块 <span class=\"am-icon-angle-right am-fr am-margin-right\"></span></a>
          <ul class=\"am-list am-collapse admin-sidebar-sub am-in\" id=\"collapse-nav\">
            <li><a href=\"/admin/category\" class=\"am-cf\"><span class=\"am-icon-tree\"></span> 分类管理<span class=\"am-icon-star am-fr am-margin-right admin-icon-yellow\"></span></a></li>
            
            <li><a href=\"admin-log.html\"><span class=\"am-icon-calendar\"></span> 系统日志</a></li>
            <li><a href=\"/admin/template\"><span class=\"am-icon-bug\"></span> 404</a></li>
            <li><a href=\"/admin/template\"><span class=\"am-icon-recycle\"></span> 清除缓存</a></li>
          </ul>
        </li>
        <li><a href=\"/admin/article\"><span class=\"am-icon-pencil-square-o\"></span> 文章管理</a></li>
        <li><a href=\"/admin/logout\"><span class=\"am-icon-sign-out\"></span> 注销</a></li>
      </ul>

    
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <div class=\"admin-content\">
    ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "    <footer class=\"admin-content-footer\">
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


<script src=\"/app/Views/Admin/assets/js/amazeui.min.js\"></script>
<script src=\"/app/Views/Admin/assets/js/app.js\"></script>
</body>
</html>
";
    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        // line 86
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Admin/layout.html";
    }

    public function getDebugInfo()
    {
        return array (  141 => 86,  138 => 85,  112 => 87,  110 => 85,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/layout.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Admin\\layout.html");
    }
}
