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

/* drmyts/template/macro/macros.twig */
class __TwigTemplate_5f428f1b25891f51d7c979f0a5be51f64741d01fa90e8ede72b3cf2845e1b0f6 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
    }

    // line 1
    public function macro_svg($__name__ = null, $__class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <svg class=\"";
            echo ($context["class"] ?? null);
            echo "\" role=\"presentation\">
        <use href=\"catalog/view/theme/drmyts/assets/svg/sprite.svg#";
            // line 3
            echo ($context["name"] ?? null);
            echo "\"></use>
    </svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_ratingStar($__val__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "val" => $__val__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            echo "<div class=\"form-rating__star\" data-rating=\"";
            echo ($context["val"] ?? null);
            echo "\">
    ";
            // line 9
            echo twig_call_macro($macros["_self"], "macro_svg", ["empty-star", "form-rating__star-empty"], 9, $context, $this->getSourceContext());
            echo "
    ";
            // line 10
            echo twig_call_macro($macros["_self"], "macro_svg", ["full-star", "form-rating__star-full d-none"], 10, $context, $this->getSourceContext());
            echo "
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "drmyts/template/macro/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 10,  92 => 9,  87 => 8,  74 => 7,  62 => 3,  57 => 2,  43 => 1,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro svg(name, class) %}
    <svg class=\"{{ class }}\" role=\"presentation\">
        <use href=\"catalog/view/theme/drmyts/assets/svg/sprite.svg#{{ name }}\"></use>
    </svg>
{% endmacro %}

{% macro ratingStar(val) %}
<div class=\"form-rating__star\" data-rating=\"{{ val }}\">
    {{ _self.svg('empty-star', 'form-rating__star-empty') }}
    {{ _self.svg('full-star', 'form-rating__star-full d-none') }}
</div>
{% endmacro %}", "drmyts/template/macro/macros.twig", "E:\\laragon\\www\\dr-myts\\catalog\\view\\theme\\drmyts\\template\\macro\\macros.twig");
    }
}
