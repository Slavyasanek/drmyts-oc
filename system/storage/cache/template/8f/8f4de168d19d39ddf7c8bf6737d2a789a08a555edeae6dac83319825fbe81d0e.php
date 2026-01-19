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

/* drmyts/template/common/success.twig */
class __TwigTemplate_23f8beb586e51f0da0c17aad7578fe48283b0cc1cf74a494e023505c6d8bde0b extends \Twig\Template
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


<main>

<div id=\"common-success\" class=\"container\">
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </div>
            </div>
        </div>
    </div>
  <div class=\"row\">";
        // line 19
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 29
        echo ($context["text_message"] ?? null);
        echo "
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 31
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 33
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 34
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

</main>

";
        // line 39
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  126 => 34,  122 => 33,  115 => 31,  110 => 29,  106 => 28,  99 => 27,  96 => 26,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  79 => 20,  75 => 19,  69 => 15,  58 => 13,  54 => 12,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}


<main>

<div id=\"common-success\" class=\"container\">
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">{{ heading_title }}</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    {% for breadcrumb in breadcrumbs %}
                        <a class=\"breadcrumbs__item\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {{ text_message }}
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>

</main>

{{ footer }}", "drmyts/template/common/success.twig", "");
    }
}
