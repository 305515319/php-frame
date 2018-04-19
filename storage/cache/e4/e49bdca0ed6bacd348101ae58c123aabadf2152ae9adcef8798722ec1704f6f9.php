<?php

/* Admin/category/lists.html */
class __TwigTemplate_4e68fa3228a1a80e1c84debe4eca2e292311b54b6284bc08b7d4ffe9d74ad17a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/layout.html", "Admin/category/lists.html", 1);
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
        echo "<div class=\"admin-content-body\">
      <div class=\"am-cf am-padding am-padding-bottom-0\">
        <div class=\"am-fl am-cf\"><strong class=\"am-text-primary am-text-lg\">分类列表</strong> / <small>Category Lists</small></div>
      </div>

      <hr>

      <div class=\"am-g\">
        <div class=\"am-u-sm-12 am-u-md-6\">
          <div class=\"am-btn-toolbar\">
            <div class=\"am-btn-group am-btn-group-xs\">
              <button type=\"button\" onclick=\"add()\" class=\"am-btn am-btn-default\"><span class=\"am-icon-plus\"></span> 新增</button>
            </div>
          </div>
        </div>

     
      </div>

      <div class=\"am-g\">
        <div class=\"am-u-sm-12\">
            <table class=\"am-table am-table-striped am-table-hover table-main\">
              <thead>
              <tr>
               <th class=\"table-id\">ID</th><th class=\"table-title\">名称</th><th class=\"table-title\">排序</th><th class=\"table-date am-hide-sm-only\">创建日期</th><th class=\"table-date am-hide-sm-only\">修改日期</th><th class=\"table-set\">操作</th>
              </tr>
              </thead>
              <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "                  <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "sort", array()), "html", null, true);
            echo "</td>
                    <td class=\"am-hide-sm-only\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "create_time", array()), "html", null, true);
            echo "</td>
                    <td class=\"am-hide-sm-only\">";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "update_time", array()) != "")) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "update_time", array()), "html", null, true);
                echo " ";
            } else {
                echo " 原创无修改 ";
            }
            echo "</td>
                    <td>
                      <div class=\"am-btn-toolbar\">
                        <div class=\"am-btn-group am-btn-group-xs\">
                          <button class=\"am-btn am-btn-default am-btn-xs am-text-secondary\" onclick=\"edit(";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo ")\"><span class=\"am-icon-pencil-square-o\"></span> 编辑</button>
                          <button class=\"am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only\" onclick=\"del(";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo ")\"><span class=\"am-icon-trash-o\"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              
              
              </tbody>
            </table>

             

            ";
        // line 56
        echo "                ";
        echo ($context["page"] ?? null);
        echo "
            ";
        // line 58
        echo "           
        </div>

      </div>
    </div>

<script type=\"text/javascript\">
  function add(){ window.location.href=\"/admin/addcate\";}
  function edit(id){ 
    window.location.href=\"/admin/updatecate?id=\"+id; 
  }
  function del(id) {
    if(confirm(\"确定要删除该类别吗？\")){
      \$.post(\"/admin/delcate\",{id:id,typ:\"del\"},function(res){
         if(res == \"0\") {
            alert(\"类型出错\");
          } else if(res == \"1\") {
            window.location.href=\"/admin/category\";
          } else if(res == \"2\") {
            alert(\"删除分类失败\");
          }  else if(res == \"3\") {
            alert(\"该分类下有文章，请先处理文章\");
          } else {
            alert(\"未知错误\");
          }
      });
    }
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "Admin/category/lists.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 58,  125 => 56,  116 => 48,  104 => 42,  100 => 41,  88 => 37,  84 => 36,  80 => 35,  76 => 34,  72 => 33,  69 => 32,  65 => 31,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/category/lists.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Admin\\category\\lists.html");
    }
}
