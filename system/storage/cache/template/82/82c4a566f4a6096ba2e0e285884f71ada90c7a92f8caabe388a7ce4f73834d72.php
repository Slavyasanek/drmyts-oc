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

/* localisation/currency_form.twig */
class __TwigTemplate_5e1c4f6757b2411365a09d992ebae5756f913224c92a2420c34aecad9f280fb4 extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-currency\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_iso"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 30
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"";
        // line 32
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
              ";
        // line 33
        if (($context["error_title"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo ($context["help_code"] ?? null);
        echo "\">";
        echo ($context["entry_code"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 41
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
              ";
        // line 42
        if (($context["error_code"] ?? null)) {
            // line 43
            echo "              <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
              ";
        }
        // line 45
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-left\">";
        // line 48
        echo ($context["entry_symbol_left"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"";
        // line 50
        echo ($context["symbol_left"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_symbol_left"] ?? null);
        echo "\" id=\"input-symbol-left\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-right\">";
        // line 54
        echo ($context["entry_symbol_right"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"";
        // line 56
        echo ($context["symbol_right"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_symbol_right"] ?? null);
        echo "\" id=\"input-symbol-right\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-decimal-place\">";
        // line 60
        echo ($context["entry_decimal_place"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"";
        // line 62
        echo ($context["decimal_place"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_decimal_place"] ?? null);
        echo "\" id=\"input-decimal-place\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\"><span data-toggle=\"tooltip\" title=\"";
        // line 66
        echo ($context["help_value"] ?? null);
        echo "\">";
        echo ($context["entry_value"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 68
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 72
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 75
        if (($context["status"] ?? null)) {
            // line 76
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 77
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 79
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 80
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 82
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 90
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/currency_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 90,  246 => 82,  241 => 80,  236 => 79,  231 => 77,  226 => 76,  224 => 75,  218 => 72,  209 => 68,  202 => 66,  193 => 62,  188 => 60,  179 => 56,  174 => 54,  165 => 50,  160 => 48,  155 => 45,  149 => 43,  147 => 42,  141 => 41,  134 => 39,  129 => 36,  123 => 34,  121 => 33,  115 => 32,  110 => 30,  105 => 28,  99 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-currency\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ text_iso }}</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_form }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-title\">{{ entry_title }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"{{ title }}\" placeholder=\"{{ entry_title }}\" id=\"input-title\" class=\"form-control\" />
              {% if error_title %}
              <div class=\"text-danger\">{{ error_title }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"{{ help_code }}\">{{ entry_code }}</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"{{ code }}\" placeholder=\"{{ entry_code }}\" id=\"input-code\" class=\"form-control\" />
              {% if error_code %}
              <div class=\"text-danger\">{{ error_code }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-left\">{{ entry_symbol_left }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"{{ symbol_left }}\" placeholder=\"{{ entry_symbol_left }}\" id=\"input-symbol-left\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-right\">{{ entry_symbol_right }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"{{ symbol_right }}\" placeholder=\"{{ entry_symbol_right }}\" id=\"input-symbol-right\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-decimal-place\">{{ entry_decimal_place }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"{{ decimal_place }}\" placeholder=\"{{ entry_decimal_place }}\" id=\"input-decimal-place\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\"><span data-toggle=\"tooltip\" title=\"{{ help_value }}\">{{ entry_value }}</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"{{ value }}\" placeholder=\"{{ entry_value }}\" id=\"input-value\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                {% if status %}
                <option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
                <option value=\"0\">{{ text_disabled }}</option>
                {% else %}
                <option value=\"1\">{{ text_enabled }}</option>
                <option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
                {% endif %}
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}", "localisation/currency_form.twig", "");
    }
}
