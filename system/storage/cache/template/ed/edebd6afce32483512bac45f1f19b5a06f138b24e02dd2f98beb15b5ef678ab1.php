<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* customer/customer_group_list.twig */
class __TwigTemplate_5dfb460d52eda7a2584be5aaf56601cfde219793dcda8e617a44ec2edc141366 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-customer-group').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer-group\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "cgd.name")) {
            // line 39
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>
                  <td class=\"text-right\">";
        // line 43
        if ((($context["sort"] ?? null) == "cg.sort_order")) {
            // line 44
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 47
        echo "</td>
                  <td class=\"text-right\">";
        // line 48
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 52
        if (($context["customer_groups"] ?? null)) {
            // line 53
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 54
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 55
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 55), ($context["selected"] ?? null))) {
                    // line 56
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 56);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 58
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 58);
                    echo "\" />
                    ";
                }
                // line 59
                echo "</td>
                  <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 60);
                echo "</td>
                  <td class=\"text-right\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "sort_order", [], "any", false, false, false, 61);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "edit", [], "any", false, false, false, 62);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
        } else {
            // line 66
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 67
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 70
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 75
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 76
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 82
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "customer/customer_group_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 82,  246 => 76,  242 => 75,  235 => 70,  229 => 67,  226 => 66,  223 => 65,  212 => 62,  208 => 61,  204 => 60,  201 => 59,  195 => 58,  189 => 56,  187 => 55,  184 => 54,  179 => 53,  177 => 52,  170 => 48,  167 => 47,  159 => 46,  149 => 44,  147 => 43,  144 => 42,  136 => 41,  126 => 39,  124 => 38,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"{{ add }}\" data-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" onclick=\"confirm('{{ text_confirm }}') ? \$('#form-customer-group').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> {{ text_list }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ delete }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer-group\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">{% if sort == 'cgd.name' %}
                    <a href=\"{{ sort_name }}\" class=\"{{ order|lower }}\">{{ column_name }}</a>
                    {% else %}
                    <a href=\"{{ sort_name }}\">{{ column_name }}</a>
                    {% endif %}</td>
                  <td class=\"text-right\">{% if sort == 'cg.sort_order' %}
                    <a href=\"{{ sort_sort_order }}\" class=\"{{ order|lower }}\">{{ column_sort_order }}</a>
                    {% else %}
                    <a href=\"{{ sort_sort_order }}\">{{ column_sort_order }}</a>
                    {% endif %}</td>
                  <td class=\"text-right\">{{ column_action }}</td>
                </tr>
              </thead>
              <tbody>
                {% if customer_groups %}
                {% for customer_group in customer_groups %}
                <tr>
                  <td class=\"text-center\">{% if customer_group.customer_group_id in selected %}
                    <input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\" />
                    {% else %}
                    <input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer_group.customer_group_id }}\" />
                    {% endif %}</td>
                  <td class=\"text-left\">{{ customer_group.name }}</td>
                  <td class=\"text-right\">{{ customer_group.sort_order }}</td>
                  <td class=\"text-right\"><a href=\"{{ customer_group.edit }}\" data-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                {% endfor %}
                {% else %}
                <tr>
                  <td class=\"text-center\" colspan=\"4\">{{ text_no_results }}</td>
                </tr>
                {% endif %}
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-right\">{{ results }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
{{ footer }} ", "customer/customer_group_list.twig", "");
    }
}
