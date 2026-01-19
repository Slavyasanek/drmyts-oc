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

/* drmyts/template/macro/icons.twig */
class __TwigTemplate_1d075dcb5cb95f7e6ef5ef46db26d981f3088d256d189f6896b58b692d09b909 extends \Twig\Template
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
            echo "    <svg class=\"icon ";
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

    public function getTemplateName()
    {
        return "drmyts/template/macro/icons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 3,  53 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro svg(name, class) %}
    <svg class=\"icon {{ class }}\" role=\"presentation\">
        <use href=\"catalog/view/theme/drmyts/assets/svg/sprite.svg#{{ name }}\"></use>
    </svg>
{% endmacro %}", "drmyts/template/macro/icons.twig", "E:\\laragon\\www\\dr-myts\\catalog\\view\\theme\\drmyts\\template\\macro\\icons.twig");
    }
}
