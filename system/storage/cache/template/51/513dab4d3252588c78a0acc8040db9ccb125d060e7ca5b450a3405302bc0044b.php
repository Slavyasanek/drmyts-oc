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
class __TwigTemplate_021b7c408fc7fdfca7bbeba2fa267c51465785b4d09ef678f6ccaf2fa769f341 extends \Twig\Template
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


";
        // line 57
        echo "<main>
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
        return array (  95 => 80,  85 => 72,  74 => 70,  70 => 69,  63 => 64,  57 => 62,  54 => 61,  48 => 59,  46 => 58,  43 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}


{# <div id=\"account-login\" class=\"container\">
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
</div> #}
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
