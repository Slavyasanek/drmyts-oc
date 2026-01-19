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

/* drmyts/template/product/review.twig */
class __TwigTemplate_0cb3ae5e9650450f93a391bbdabc606c956182fc1d4f98a74fd5cbea0dfa8b47 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/product/review.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if (($context["reviews"] ?? null)) {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 5
                echo "<div class=\"product-review product-reviews__item bg--white\">
\t";
                // line 12
                echo "\t<div class=\"product-review__heading flex-row-wrap j-between\">
\t\t<div class=\"product-review__author\">
\t\t\t<p class=\"product-review__name\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 14);
                echo "</p>
\t\t\t<date class=\"product-review__date text--color_gray text--size_label\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 15);
                echo "</date>
\t\t</div>
\t\t<div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\">
            ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 19
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 19) < $context["i"])) {
                        // line 20
                        echo "                    ";
                        echo twig_call_macro($macros["macros"], "macro_svg", ["empty-star", "product-rating__star--empty"], 20, $context, $this->getSourceContext());
                        echo "
                ";
                    } else {
                        // line 22
                        echo "                    ";
                        echo twig_call_macro($macros["macros"], "macro_svg", ["full-star", "product-rating__star"], 22, $context, $this->getSourceContext());
                        echo "
                ";
                    }
                    // line 24
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t<span class=\"product-rating__val\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 25);
                echo "</span>
\t\t</div>
\t</div>
\t<div class=\"product-review__content\">
\t\t<p>";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 29);
                echo "</p>
\t</div>
</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 35
            echo ($context["pagination"] ?? null);
            echo "</div>
  <div class=\"col-sm-6 text-right\">";
            // line 36
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 39
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "drmyts/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  116 => 36,  112 => 35,  109 => 34,  98 => 29,  90 => 25,  84 => 24,  78 => 22,  72 => 20,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  51 => 12,  48 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"drmyts/template/macro/macros.twig\" as macros %}

{% if reviews %}
{% for review in reviews %}
<div class=\"product-review product-reviews__item bg--white\">
\t{# <div class=\"product-review__imgs flex-row-wrap\">
\t\t<div class=\"product-review__img o-hid\">
\t\t\t<picture>
\t\t\t\t<img class=\"cover-image\" src=\"./assets/pics/product-review.png\" alt=\"\" loading=\"lazy\"></picture>
\t\t</div>
\t</div> #}
\t<div class=\"product-review__heading flex-row-wrap j-between\">
\t\t<div class=\"product-review__author\">
\t\t\t<p class=\"product-review__name\">{{ review.author }}</p>
\t\t\t<date class=\"product-review__date text--color_gray text--size_label\">{{ review.date_added }}</date>
\t\t</div>
\t\t<div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\">
            {% for i in 1..5 %}
                {% if review.rating < i %}
                    {{ macros.svg('empty-star', 'product-rating__star--empty') }}
                {% else %}
                    {{ macros.svg('full-star', 'product-rating__star') }}
                {% endif %}
            {% endfor %}
\t\t\t<span class=\"product-rating__val\">{{ review.rating }}</span>
\t\t</div>
\t</div>
\t<div class=\"product-review__content\">
\t\t<p>{{ review.text }}</p>
\t</div>
</div>

{% endfor %}
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-right\">{{ results }}</div>
</div>
{% else %}
<p>{{ text_no_reviews }}</p>
{% endif %}
", "drmyts/template/product/review.twig", "");
    }
}
