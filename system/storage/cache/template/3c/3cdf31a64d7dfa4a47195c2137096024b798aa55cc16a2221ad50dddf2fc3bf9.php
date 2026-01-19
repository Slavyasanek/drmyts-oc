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
class __TwigTemplate_57f2705a75821386f96692ff36c3154ef03934ce091c05fce78233b59df799c3 extends \Twig\Template
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
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/common/success.twig", 2)->unwrap();
        // line 3
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
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
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
        echo "                </div>
            </div>
        </div>
    </div>

    <section class=\"sign-form\"> 
        <div class=\"container sign-form__container\"> 
          <h2 class=\"sign-form__title text--center text--size_h3-full\">";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h2>
          <div class=\"sign-form__icon mx\"> 
            ";
        // line 22
        echo twig_call_macro($macros["macros"], "macro_svg", ["icon-check", "wh-full"], 22, $context, $this->getSourceContext());
        echo "
          </div>
          <div class=\"sign-form__txt text--center mx\"> 
            <p>";
        // line 25
        echo ($context["text_message"] ?? null);
        echo "</p>
          </div>
        </div>
    </section>
    
</main>

";
        // line 32
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
        return array (  100 => 32,  90 => 25,  84 => 22,  79 => 20,  70 => 13,  59 => 11,  55 => 10,  49 => 7,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% import \"drmyts/template/macro/macros.twig\" as macros %}

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

    <section class=\"sign-form\"> 
        <div class=\"container sign-form__container\"> 
          <h2 class=\"sign-form__title text--center text--size_h3-full\">{{ heading_title }}</h2>
          <div class=\"sign-form__icon mx\"> 
            {{ macros.svg('icon-check', 'wh-full') }}
          </div>
          <div class=\"sign-form__txt text--center mx\"> 
            <p>{{ text_message }}</p>
          </div>
        </div>
    </section>
    
</main>

{{ footer }}", "drmyts/template/common/success.twig", "");
    }
}
