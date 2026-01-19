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

/* drmyts/template/account/login.twig */
class __TwigTemplate_287ee882b78a988444f720967d46e531002ba2a2eb053f5dd2ef0a7b5c4af5d9 extends \Twig\Template
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
        echo "


<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
  ";
        // line 10
        if (($context["success"] ?? null)) {
            // line 11
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 16
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 28
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 29
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 30
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 31
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 35
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 36
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 39
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 40
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 43
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 44
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 45
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 46
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 47
        if (($context["redirect"] ?? null)) {
            // line 48
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 50
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 54
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 55
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<main>
    ";
        // line 58
        if (($context["success"] ?? null)) {
            // line 59
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 61
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 62
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 64
        echo "    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">Особистий кабінет</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 70
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 70);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 70);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </div>
            </div>
        </div>
    </div>

</main>


";
        // line 80
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 80,  244 => 72,  233 => 70,  229 => 69,  222 => 64,  216 => 62,  213 => 61,  207 => 59,  205 => 58,  199 => 55,  195 => 54,  189 => 50,  183 => 48,  181 => 47,  177 => 46,  171 => 45,  165 => 44,  161 => 43,  153 => 40,  149 => 39,  144 => 37,  140 => 36,  136 => 35,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  105 => 24,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  85 => 17,  80 => 16,  74 => 14,  71 => 13,  65 => 11,  63 => 10,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}


<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
  {% endif %}
  {% if error_warning %}
  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>{{ text_new_customer }}</h2>
            <p><strong>{{ text_register }}</strong></p>
            <p>{{ text_register_account }}</p>
            <a href=\"{{ register }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>{{ text_returning_customer }}</h2>
            <p><strong>{{ text_i_am_returning_customer }}</strong></p>
            <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">{{ entry_email }}</label>
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">{{ entry_password }}</label>
                <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" />
                <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
              <input type=\"submit\" value=\"{{ button_login }}\" class=\"btn btn-primary\" />
              {% if redirect %}
              <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
              {% endif %}
            </form>
          </div>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
<main>
    {% if success %}
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
    {% endif %}
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
    {% endif %}
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">Особистий кабінет</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    {% for breadcrumb in breadcrumbs %}
                        <a class=\"breadcrumbs__item\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

</main>


{{ footer }}", "drmyts/template/account/login.twig", "");
    }
}
