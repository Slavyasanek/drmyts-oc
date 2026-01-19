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

/* drmyts/template/account/forgotten.twig */
class __TwigTemplate_e4c83d2985571591572fe3de4c000ba6c88718d25abed7a527229693af50e1e4 extends \Twig\Template
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
        // line 6
        echo ($context["text_account"] ?? null);
        echo "</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                </div>
            </div>
        </div>
    </div>
    <section class=\"sign-form\">
        <div class=\"container sign-form__container\">
            <h2 class=\"sign-form__title text--center text--size_h3-full\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h2>
            <form class=\"sign-form__form mx\" action=\"";
        // line 19
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"sign-form__txt text--center\">
                    <p>Забули пароль?</p>
                    <p>";
        // line 22
        echo ($context["text_email"] ?? null);
        echo "</p>
                </div>
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input ";
        // line 25
        if (($context["error_warning"] ?? null)) {
            echo " invalid ";
        }
        echo "\">
                        <input class=\"custom-input__input\" type=\"text\" name=\"email\" value=\"";
        // line 26
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" required />
                        ";
        // line 27
        if (($context["error_warning"] ?? null)) {
            // line 28
            echo "                            <div class=\"custom-input__error\">";
            echo ($context["error_warning"] ?? null);
            echo "</div>
                        ";
        }
        // line 30
        echo "                    </div>
                </div>
                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">Скинути пароль</button>
            </form>
        </div>
    </section>
</main>
";
        // line 37
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  110 => 30,  104 => 28,  102 => 27,  96 => 26,  90 => 25,  84 => 22,  78 => 19,  74 => 18,  66 => 12,  55 => 10,  51 => 9,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<main>
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">{{ text_account }}</h1>
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
            <form class=\"sign-form__form mx\" action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"sign-form__txt text--center\">
                    <p>Забули пароль?</p>
                    <p>{{ text_email }}</p>
                </div>
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input {% if error_warning %} invalid {% endif %}\">
                        <input class=\"custom-input__input\" type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" required />
                        {% if error_warning %}
                            <div class=\"custom-input__error\">{{ error_warning }}</div>
                        {% endif %}
                    </div>
                </div>
                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">Скинути пароль</button>
            </form>
        </div>
    </section>
</main>
{{ footer }}", "drmyts/template/account/forgotten.twig", "");
    }
}
