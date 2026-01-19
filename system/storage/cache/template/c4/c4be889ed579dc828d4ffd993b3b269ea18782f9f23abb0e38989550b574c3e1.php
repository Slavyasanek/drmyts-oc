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
class __TwigTemplate_89880406b4bd3e02bc2a2afcc65e2a8b104666a65c4cfbf92044d7dfa66fb8d6 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "<div class=\"product-review product-reviews__item bg--white\">
\t";
                // line 10
                echo "\t<div class=\"product-review__heading flex-row-wrap j-between\">
\t\t<div class=\"product-review__author\">
\t\t\t<p class=\"product-review__name\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 12);
                echo "</p>
\t\t\t<date class=\"product-review__date text--color_gray text--size_label\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 13);
                echo "</date>
\t\t</div>
\t\t<div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\">
            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 17) < $context["i"])) {
                        // line 18
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "empty-star", 1 => "product-rating__star--empty"], "method", false, false, false, 18);
                        echo "
                ";
                    } else {
                        // line 20
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "full-star", 1 => "product-rating__star"], "method", false, false, false, 20);
                        echo "
                ";
                    }
                    // line 22
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t<span class=\"product-rating__val\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 23);
                echo "</span>
\t\t</div>
\t</div>
\t<div class=\"product-review__content\">
\t\t<p>";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 27);
                echo "</p>
\t</div>
</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 33
            echo ($context["pagination"] ?? null);
            echo "</div>
  <div class=\"col-sm-6 text-right\">";
            // line 34
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 37
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
        return array (  117 => 37,  111 => 34,  107 => 33,  104 => 32,  93 => 27,  85 => 23,  79 => 22,  73 => 20,  67 => 18,  64 => 17,  60 => 16,  54 => 13,  50 => 12,  46 => 10,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if reviews %}
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
