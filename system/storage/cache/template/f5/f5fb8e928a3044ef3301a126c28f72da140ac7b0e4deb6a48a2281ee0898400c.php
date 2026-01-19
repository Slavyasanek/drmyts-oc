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

/* drmyts/template/account/wishlist.twig */
class __TwigTemplate_29708647dfee9b90bc88f2ef795d8c9587609cbffd502d0e0cee6246de09b61f extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/account/wishlist.twig", 3)->unwrap();
        // line 4
        echo "
<main>
\t<div class=\"page-title border--end\">
\t\t<div class=\"container page-title__container\">
\t\t\t<h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
\t\t\t\t<div class=\"breadcrumbs__list flex-row\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<section class=\"account\">
\t\t<div class=\"container account__container\">
\t\t\t<div class=\"account__nav flex-col border--end\">
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
        // line 21
        echo ($context["edit"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 23
        echo twig_call_macro($macros["macros"], "macro_svg", ["user", ""], 23, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp active\" href=\"";
        // line 27
        echo ($context["wishlist"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 29
        echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 29, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 31
        echo ($context["text_wishlist_nav"] ?? null);
        echo "</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
        // line 33
        echo ($context["order"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 35
        echo twig_call_macro($macros["macros"], "macro_svg", ["shopping-bag", ""], 35, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 37
        echo ($context["text_order"] ?? null);
        echo "</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
        // line 39
        echo ($context["logout"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 41
        echo twig_call_macro($macros["macros"], "macro_svg", ["logout", ""], 41, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 43
        echo ($context["text_logout"] ?? null);
        echo "</span>
                </a>
            </div>
\t\t\t<div class=\"account__content\">
\t\t\t\t<h2 class=\"account__subtitle text--size_h3-full\">";
        // line 47
        echo ($context["text_wishlist_nav"] ?? null);
        echo " ";
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 0)) {
            echo "(";
            echo twig_length_filter($this->env, ($context["products"] ?? null));
            echo ")";
        }
        echo "</h2>
\t\t\t\t<div class=\"account-empty text--center flex-center flex-col\">
\t\t\t\t\t<h3 class=\"account-empty__title\">";
        // line 49
        echo ($context["text_empty"] ?? null);
        echo "</h3>
\t\t\t\t\t<p>Щоб зберегти товар у список бажань, натисніть на іконку серця
                    <span class=\"icon icon--arrow\">
                        ";
        // line 52
        echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 52, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t</span>
                    на картці товару</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</main>
";
        // line 60
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  159 => 52,  153 => 49,  142 => 47,  135 => 43,  130 => 41,  125 => 39,  120 => 37,  115 => 35,  110 => 33,  105 => 31,  100 => 29,  95 => 27,  90 => 25,  85 => 23,  80 => 21,  71 => 14,  60 => 12,  56 => 11,  50 => 8,  44 => 4,  42 => 3,  37 => 1,);
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
                <a class=\"flex-row account__nav-item text--upp active\" href=\"{{ wishlist }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('heart', '') }}
                    </div>
                    <span>{{ text_wishlist_nav }}</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"{{ order }}\">
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
\t\t\t\t<h2 class=\"account__subtitle text--size_h3-full\">{{ text_wishlist_nav }} {% if products|length > 0 %}({{ products|length }}){% endif %}</h2>
\t\t\t\t<div class=\"account-empty text--center flex-center flex-col\">
\t\t\t\t\t<h3 class=\"account-empty__title\">{{ text_empty }}</h3>
\t\t\t\t\t<p>Щоб зберегти товар у список бажань, натисніть на іконку серця
                    <span class=\"icon icon--arrow\">
                        {{ macros.svg('heart', '') }}
\t\t\t\t\t</span>
                    на картці товару</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</main>
{{ footer }}
", "drmyts/template/account/wishlist.twig", "");
    }
}
