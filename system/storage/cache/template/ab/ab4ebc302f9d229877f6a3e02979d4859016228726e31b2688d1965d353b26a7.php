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
class __TwigTemplate_5981060f8fd887f239912305959e520809bc53fb2fe310b14dbcac4a1e7121dd extends \Twig\Template
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
<div class=\"page-title border--end\">
    <div class=\"container page-title__container\">
        <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
            <div class=\"breadcrumbs__list flex-row\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
<section class=\"account-success\">
    <div class=\"container account-success__container\">
        <p class=\"account-success__msg text--center\">";
        // line 19
        echo ($context["text_message"] ?? null);
        echo "</p>
    </div>
</section>

  <div class=\"row\">";
        // line 23
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 32
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 34
        echo ($context["text_message"] ?? null);
        echo "
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 36
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 38
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 39
        echo ($context["column_right"] ?? null);
        echo "</div>


</main>

";
        // line 44
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
        return array (  143 => 44,  135 => 39,  131 => 38,  124 => 36,  119 => 34,  115 => 33,  111 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  86 => 24,  82 => 23,  75 => 19,  67 => 13,  56 => 11,  52 => 10,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}


<main>
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
<section class=\"account-success\">
    <div class=\"container account-success__container\">
        <p class=\"account-success__msg text--center\">{{ text_message }}</p>
    </div>
</section>

  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">
    {{ content_top }}
      <h1>{{ heading_title }}</h1>
      {{ text_message }}
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>


</main>

{{ footer }}", "drmyts/template/common/success.twig", "");
    }
}
