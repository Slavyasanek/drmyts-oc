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

/* drmyts/template/account/order_list.twig */
class __TwigTemplate_53b5825685f3306736dae643e52203ab7f0de937ac4a2fea10336d4ac481ff4e extends \Twig\Template
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
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/account/order_list.twig", 3)->unwrap();
        // line 4
        echo "<main>
\t<div class=\"page-title border--end\">
\t\t<div class=\"container page-title__container\">
\t\t\t<h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
\t\t\t\t<div class=\"breadcrumbs__list flex-row\">
\t\t\t\t\t";
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
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<section class=\"account\">
\t\t<div class=\"container account__container\">
\t\t\t<div class=\"account__nav flex-col border--end\">
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
        // line 20
        echo ($context["edit"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 22
        echo twig_call_macro($macros["macros"], "macro_svg", ["user", ""], 22, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
        // line 26
        echo ($context["wishlist"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 28
        echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 28, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 30
        echo ($context["text_wishlist_nav"] ?? null);
        echo "</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp active\" href=\"";
        // line 32
        echo ($context["order"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 34
        echo twig_call_macro($macros["macros"], "macro_svg", ["shopping-bag", ""], 34, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 36
        echo ($context["text_order"] ?? null);
        echo "</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
        // line 38
        echo ($context["logout"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 40
        echo twig_call_macro($macros["macros"], "macro_svg", ["logout", ""], 40, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 42
        echo ($context["text_logout"] ?? null);
        echo "</span>
                </a>
            </div>
\t\t\t<div class=\"account__content\">
\t\t\t\t<h2 class=\"account__subtitle text--size_h3-full\">";
        // line 46
        echo ($context["text_history"] ?? null);
        echo "</h2>
                ";
        // line 47
        if (($context["orders"] ?? null)) {
            // line 48
            echo "                ";
        } else {
            // line 49
            echo "\t\t\t\t<div class=\"account-empty text--center flex-center flex-col\">
\t\t\t\t\t<h3 class=\"account-empty__title\">";
            // line 50
            echo ($context["text_empty"] ?? null);
            echo "</h3>
\t\t\t\t\t<p>";
            // line 51
            echo ($context["text_empty_instructions"] ?? null);
            echo "</p>
\t\t\t\t</div>
                ";
        }
        // line 54
        echo "\t\t\t</div>
\t\t</div>
\t</section>
</main>

";
        // line 59
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  163 => 54,  157 => 51,  153 => 50,  150 => 49,  147 => 48,  145 => 47,  141 => 46,  134 => 42,  129 => 40,  124 => 38,  119 => 36,  114 => 34,  109 => 32,  104 => 30,  99 => 28,  94 => 26,  89 => 24,  84 => 22,  79 => 20,  70 => 13,  59 => 11,  55 => 10,  49 => 7,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

{% import \"drmyts/template/macro/macros.twig\" as macros %}
<main>
\t<div class=\"page-title border--end\">
\t\t<div class=\"container page-title__container\">
\t\t\t<h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">{{ heading_title }}</h1>
\t\t\t<div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
\t\t\t\t<div class=\"breadcrumbs__list flex-row\">
\t\t\t\t\t{% for breadcrumb in breadcrumbs %}
                        <a class=\"breadcrumbs__item\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                    {% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<section class=\"account\">
\t\t<div class=\"container account__container\">
\t\t\t<div class=\"account__nav flex-col border--end\">
                <a class=\"flex-row account__nav-item text--upp\" href=\"{{ edit }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('user', '') }}
                    </div>
                    <span>{{ text_edit }}</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"{{ wishlist }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('heart', '') }}
                    </div>
                    <span>{{ text_wishlist_nav }}</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp active\" href=\"{{ order }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('shopping-bag', '') }}
                    </div>
                    <span>{{ text_order }}</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"{{ logout }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('logout', '') }}
                    </div>
                    <span>{{ text_logout }}</span>
                </a>
            </div>
\t\t\t<div class=\"account__content\">
\t\t\t\t<h2 class=\"account__subtitle text--size_h3-full\">{{ text_history }}</h2>
                {% if orders %}
                {% else %}
\t\t\t\t<div class=\"account-empty text--center flex-center flex-col\">
\t\t\t\t\t<h3 class=\"account-empty__title\">{{ text_empty }}</h3>
\t\t\t\t\t<p>{{ text_empty_instructions }}</p>
\t\t\t\t</div>
                {% endif %}
\t\t\t</div>
\t\t</div>
\t</section>
</main>

{{ footer }}
", "drmyts/template/account/order_list.twig", "");
    }
}
