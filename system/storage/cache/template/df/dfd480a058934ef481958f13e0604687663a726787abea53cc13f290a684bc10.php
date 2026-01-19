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
class __TwigTemplate_b91a5ab23aeab90051d0a69b91c68441243076bf8680e1952609e489429efece extends \Twig\Template
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
            echo "<span class=\"text--color_gray\">(";
            echo twig_length_filter($this->env, ($context["products"] ?? null));
            echo ")</span>";
        }
        echo "</h2>
                ";
        // line 48
        if (($context["products"] ?? null)) {
            // line 49
            echo "                    <div class=\"wishlist flex-col\">
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 51
                echo "\t\t\t\t\t\t<div class=\"cart-item wishlist__item cart-item--type_wishlist d-flex\">
                            ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "    \t\t\t\t\t\t\t<div class=\"cart-item__img\">
    \t\t\t\t\t\t\t\t<picture>
    \t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 55);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                    echo "\" loading=\"lazy\" width=\"56\" height=\"56\">
                                    </picture>
    \t\t\t\t\t\t\t\t<a class=\"cart-item__link abs inset wh-full\" href=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
                    echo "</a>
    \t\t\t\t\t\t\t</div>
                            ";
                }
                // line 60
                echo "\t\t\t\t\t\t\t<div class=\"cart-item__content\">
\t\t\t\t\t\t\t\t<div class=\"cart-item__details flex-col\">
\t\t\t\t\t\t\t\t\t<a class=\"cart-item__title\" href=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 62);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
                echo "</a>
\t\t\t\t\t\t\t\t\t<span class=\"cart-item__type\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 63);
                echo "</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-price cart-item__price flex-row ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64)) {
                    echo " product-price--sale ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"product-price__full\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
                echo "</span>
                                        ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                                            <span class=\"product-price__sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 67);
                    echo "</span>
                                        ";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cart-item__footer flex-row-wrap j-end\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 72);
                echo "\" class=\"btn flex-center icon cart-item__delete\">
                                        ";
                // line 73
                echo twig_call_macro($macros["macros"], "macro_svg", ["delete", ""], 73, $context, $this->getSourceContext());
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t</div>
                ";
        } else {
            // line 81
            echo "    \t\t\t\t<div class=\"account-empty text--center flex-center flex-col\">
    \t\t\t\t\t<h3 class=\"account-empty__title\">";
            // line 82
            echo ($context["text_empty"] ?? null);
            echo "</h3>
    \t\t\t\t\t<p> ";
            // line 83
            echo ($context["text_wishlist_before_icon"] ?? null);
            echo "
                        <span class=\"icon icon--arrow\">
                            ";
            // line 85
            echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 85, $context, $this->getSourceContext());
            echo "
    \t\t\t\t\t</span>
                        ";
            // line 87
            echo ($context["text_wishlist_after_icon"] ?? null);
            echo "</p>
    \t\t\t\t</div>
                ";
        }
        // line 90
        echo "\t\t\t</div>
\t\t</div>
\t</section>
</main>
";
        // line 94
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
        return array (  273 => 94,  267 => 90,  261 => 87,  256 => 85,  251 => 83,  247 => 82,  244 => 81,  240 => 79,  228 => 73,  224 => 72,  219 => 69,  213 => 67,  211 => 66,  207 => 65,  201 => 64,  197 => 63,  191 => 62,  187 => 60,  179 => 57,  170 => 55,  166 => 53,  164 => 52,  161 => 51,  157 => 50,  154 => 49,  152 => 48,  142 => 47,  135 => 43,  130 => 41,  125 => 39,  120 => 37,  115 => 35,  110 => 33,  105 => 31,  100 => 29,  95 => 27,  90 => 25,  85 => 23,  80 => 21,  71 => 14,  60 => 12,  56 => 11,  50 => 8,  44 => 4,  42 => 3,  37 => 1,);
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
\t\t\t\t<h2 class=\"account__subtitle text--size_h3-full\">{{ text_wishlist_nav }} {% if products|length > 0 %}<span class=\"text--color_gray\">({{ products|length }})</span>{% endif %}</h2>
                {% if products %}
                    <div class=\"wishlist flex-col\">
                        {% for product in products %}
\t\t\t\t\t\t<div class=\"cart-item wishlist__item cart-item--type_wishlist d-flex\">
                            {% if product.thumb %}
    \t\t\t\t\t\t\t<div class=\"cart-item__img\">
    \t\t\t\t\t\t\t\t<picture>
    \t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" loading=\"lazy\" width=\"56\" height=\"56\">
                                    </picture>
    \t\t\t\t\t\t\t\t<a class=\"cart-item__link abs inset wh-full\" href=\"{{ product.href }}\">{{ product.name }}</a>
    \t\t\t\t\t\t\t</div>
                            {% endif %}
\t\t\t\t\t\t\t<div class=\"cart-item__content\">
\t\t\t\t\t\t\t\t<div class=\"cart-item__details flex-col\">
\t\t\t\t\t\t\t\t\t<a class=\"cart-item__title\" href=\"{{ product.href }}\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t\t<span class=\"cart-item__type\">{{ product.model }}</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-price cart-item__price flex-row {% if product.special %} product-price--sale {% endif %}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"product-price__full\">{{ product.price }}</span>
                                        {% if product.special %}
                                            <span class=\"product-price__sale\">{{ product.special }}</span>
                                        {% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cart-item__footer flex-row-wrap j-end\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.remove }}\" class=\"btn flex-center icon cart-item__delete\">
                                        {{ macros.svg('delete', '' )}}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        {% endfor %}
\t\t\t\t\t</div>
                {% else %}
    \t\t\t\t<div class=\"account-empty text--center flex-center flex-col\">
    \t\t\t\t\t<h3 class=\"account-empty__title\">{{ text_empty }}</h3>
    \t\t\t\t\t<p> {{ text_wishlist_before_icon}}
                        <span class=\"icon icon--arrow\">
                            {{ macros.svg('heart', '') }}
    \t\t\t\t\t</span>
                        {{ text_wishlist_after_icon }}</p>
    \t\t\t\t</div>
                {% endif %}
\t\t\t</div>
\t\t</div>
\t</section>
</main>
{{ footer }}
", "drmyts/template/account/wishlist.twig", "");
    }
}
