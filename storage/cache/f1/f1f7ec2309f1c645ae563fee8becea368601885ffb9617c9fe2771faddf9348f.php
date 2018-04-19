<?php

/* Admin/article/addarticle.html */
class __TwigTemplate_afd8429491e91fd80391ebb3c0545d5153f7bfe14f89948a0912235ed386017c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/layout.html", "Admin/article/addarticle.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
  small{color:#f00;display: none}
</style>
  <div class=\"admin-content-body\">
      <div class=\"am-cf am-padding am-padding-bottom-0\">
        <div class=\"am-fl am-cf\"><strong class=\"am-text-primary am-text-lg\">创建文章</strong> / <small style=\"display: inline-block;color:#000\">Add Article </small></div>
      </div>

      <hr/>

      <div class=\"am-g\">

        <div class=\"am-u-sm-12 am-u-md-4 am-u-md-push-8\"></div>

        <div class=\"am-u-sm-12 am-u-md-8 am-u-md-pull-4\">

          <form class=\"am-form am-form-horizontal\" id=\"add\" action=\"/admin/doAddArticle\" method=\"post\">
            
            <div class=\"am-form-group\">
              <label for=\"user-name\" class=\"am-u-sm-3 am-form-label\">类别</label>
              <div class=\"am-u-sm-9\">
                <select name=\"pid\" id=\"pid\">
                 ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cate"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </select>
              </div>
            </div>


            <div class=\"am-form-group\">
              <label for=\"user-name\" class=\"am-u-sm-3 am-form-label\">标题</label>
              <div class=\"am-u-sm-9\">
                <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"标题\">
                <small id=\"title-error\"></small>
              </div>
            </div>

            <div class=\"am-form-group\">
              <label for=\"user-name\" class=\"am-u-sm-3 am-form-label\">内容</label>
              <div class=\"am-u-sm-9\" id=\"contents\">
                 <textarea name=\"content\" id=\"content\" style=\"height: 400px\"></textarea>  
                  <small id=\"content-error\"></small>
              </div>
            </div>

            <div class=\"am-form-group\">
              <div class=\"am-u-sm-9 am-u-sm-push-3\">
                <button type=\"button\" id=\"save\"  class=\"am-btn am-btn-primary\">保存修改</button>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
<script type=\"text/javascript\">
 window.onload=function(){ UE.getEditor('content'); }
  \$(function(){
    \$(\"#save\").click(function(){
        var title = \$(\"#title\").val();
        if(title ==\"\") {
          \$(\"#title-error\").html(\"请输入文章标题\").show();
          \$(\"#title\").focus();
        } else {
          \$(\"#add\").submit();
        }
    });
    \$(\"input\").blur(function(){
      if(\$(this).val() != \"\") {
        \$(this).next('small').hide();
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "Admin/article/addarticle.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  63 => 26,  59 => 25,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/article/addarticle.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Admin\\article\\addarticle.html");
    }
}
