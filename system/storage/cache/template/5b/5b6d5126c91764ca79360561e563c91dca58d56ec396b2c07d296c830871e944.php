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
class __TwigTemplate_3e787d06b6adbb3ae6ed885bab21a9188d687739aac286a5f27622915bbbed23 extends \Twig\Template
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
        <div class=\"account-success__msg text--center\">";
        // line 19
        echo ($context["text_message"] ?? null);
        echo "</div>
        <a href=\"";
        // line 20
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn--theme btn--size_M btn--theme_accent text--upp account-success__btn mx d-block\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
    </div>
</section>

";
        // line 24
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
        return array (  88 => 24,  79 => 20,  75 => 19,  67 => 13,  56 => 11,  52 => 10,  46 => 7,  37 => 1,);
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
        <div class=\"account-success__msg text--center\">{{ text_message }}</div>
        <a href=\"{{ continue }}\" class=\"btn btn--theme btn--size_M btn--theme_accent text--upp account-success__btn mx d-block\">{{ button_continue }}</a>
    </div>
</section>

{{ footer }}", "drmyts/template/common/success.twig", "");
    }
}
