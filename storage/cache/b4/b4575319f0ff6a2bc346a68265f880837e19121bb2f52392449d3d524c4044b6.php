<?php

/* Admin/article/lists.html */
class __TwigTemplate_f70990292291b6e5b8d63cc5eaebf18dd214d728d2c7642eb5d05ce56d66a954 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/layout.html", "Admin/article/lists.html", 1);
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
        <div class=\"am-fl am-cf\"><strong class=\"am-text-primary am-text-lg\">文章列表</strong> / <small>Article Lists</small></div>
      </div>

      <hr>

      <div class=\"am-g\">
        <div class=\"am-u-sm-12 am-u-md-6\">
          <div class=\"am-btn-toolbar\">
            <div class=\"am-btn-group am-btn-group-xs\">
              <button type=\"button\" class=\"am-btn am-btn-default\" onclick=\"add()\"><span class=\"am-icon-plus\"></span> 新增</button>
            </div>
          </div>
        </div>
        <div class=\"am-u-sm-12 am-u-md-3\">
          <div class=\"am-form-group\">
            <select name=\"pid\">
              ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cate"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </select>
          </div>
        </div>
        <div class=\"am-u-sm-12 am-u-md-3\">
          <div class=\"am-input-group am-input-group-sm\">
            <input type=\"text\" class=\"am-form-field\">
          <span class=\"am-input-group-btn\">
            <button class=\"am-btn am-btn-default\" type=\"button\">搜索</button>
          </span>
          </div>
        </div>
      </div>

      <div class=\"am-g\">
        <div class=\"am-u-sm-12\">
            <table class=\"am-table am-table-striped am-table-hover table-main\">
              <thead>
              <tr>
                <th class=\"table-id\">ID</th><th class=\"table-title\">标题</th><th class=\"table-type\">类别</th><th class=\"table-author am-hide-sm-only\">点击量</th><th class=\"table-date am-hide-sm-only\">创建日期</th><th class=\"table-set\">操作</th>
              </tr>
              </thead>
              <tbody>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "                  <tr>
                  <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td>
                  <td><a href=\"#\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</td>
                  <td class=\"am-hide-sm-only\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "click", array()), "html", null, true);
            echo "</td>
                  <td class=\"am-hide-sm-only\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "create_time", array()), "html", null, true);
            echo "</td>
                  <td>
                    <div class=\"am-btn-toolbar\">
                      <div class=\"am-btn-group am-btn-group-xs\">
                        <button class=\"am-btn am-btn-default am-btn-xs am-text-secondary\" onclick=\"edit(";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo ")\"><span class=\"am-icon-pencil-square-o\"></span> 编辑</button>
                        <button class=\"am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only\" onclick=\"del(";
            // line 57
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
        // line 63
        echo "              
              
              </tbody>
            </table>
            
            ";
        // line 69
        echo "                ";
        echo ($context["page"] ?? null);
        echo "
            ";
        // line 71
        echo "           
        </div>

      </div>
    </div>
  <script type=\"text/javascript\">
    function add() { window.location.href=\"/admin/addarticle\";}
    function edit(id) { window.location.href=\"/admin/editarticle?id=\"+id;}
    function del(id){
      if(confirm(\"确定删除该文章吗?\")){
        \$.post(\"/admin/delarticle\",{id:id},function(res){
          if(res == \"1\") {
            alert(\"删除成功\");
            location.reload();
          } else {
            alert(\"删除失败\");
          }
        });
      }
    }
  </script>
";
    }

    public function getTemplateName()
    {
        return "Admin/article/lists.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 71,  147 => 69,  140 => 63,  128 => 57,  124 => 56,  117 => 52,  113 => 51,  109 => 50,  105 => 49,  101 => 48,  98 => 47,  94 => 46,  70 => 24,  59 => 22,  55 => 21,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/article/lists.html", "D:\\phpStudy\\WWW\\php-frame\\app\\Views\\Admin\\article\\lists.html");
    }
}
