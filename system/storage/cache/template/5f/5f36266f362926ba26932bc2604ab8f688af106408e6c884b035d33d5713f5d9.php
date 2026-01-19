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

/* drmyts/template/account/login.twig */
class __TwigTemplate_bacf82e5ae90e71adc0960ed72ca5b09b291d56748535bd6ad2beb4845e4f052 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/account/login.twig", 2)->unwrap();
        // line 3
        echo "
<main>
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 7
        echo ($context["text_account"] ?? null);
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
    <section class=\"sign-form\" id=\"account-login\">
        <div class=\"container sign-form__container\">
            ";
        // line 19
        if (($context["success"] ?? null)) {
            // line 20
            echo "                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
            ";
        }
        // line 22
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
            ";
        }
        // line 25
        echo "            <h2 class=\"sign-form__title text--center text--size_h3-full\">";
        echo ($context["text_login"] ?? null);
        echo "</h2>
            <form class=\"sign-form__form mx\" action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input\">
                        <input class=\"custom-input__input\" type=\"email\" name=\"email\" value=\"";
        // line 29
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" required />
                        <div class=\"custom-input__error d-none\">";
        // line 30
        echo ($context["error_required_field"] ?? null);
        echo "</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"password\" value=\"";
        // line 33
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            ";
        // line 35
        echo twig_call_macro($macros["macros"], "macro_svg", ["eye", "anim"], 35, $context, $this->getSourceContext());
        echo "
                        </button>
                        <div class=\"custom-input__error d-none\">";
        // line 37
        echo ($context["error_required_field"] ?? null);
        echo "</div>
                    </div>
                </div>
                ";
        // line 40
        if (($context["redirect"] ?? null)) {
            // line 41
            echo "                    <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 43
        echo "                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">";
        echo ($context["button_login"] ?? null);
        echo "</button>
                <div class=\"sign-form__footer flex-row j-between\">
                    <div class=\"custom-checkbox sign-form__checkbox flex-row\">
                        <div class=\"custom-checkbox__wrapper rel\">
                            <input class=\"abs wh-full inset m-0\" type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" />
                        </div>
                        <label for=\"remember_me\">";
        // line 49
        echo ($context["text_remember_me"] ?? null);
        echo "</label>
                    </div>
                    <a class=\"sign-form__page-link\" href=\"";
        // line 51
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                </div>
                <a class=\"text--upp text--color_accent sign-form__bottom-link text--size_label text--center\" href=\"";
        // line 53
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["text_register"] ?? null);
        echo "</a>
            </form>
        </div>
    </section>
</main>


";
        // line 60
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 60,  166 => 53,  159 => 51,  154 => 49,  144 => 43,  138 => 41,  136 => 40,  130 => 37,  125 => 35,  118 => 33,  112 => 30,  106 => 29,  100 => 26,  95 => 25,  89 => 23,  86 => 22,  80 => 20,  78 => 19,  70 => 13,  59 => 11,  55 => 10,  49 => 7,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% import \"drmyts/template/macro/macros.twig\" as macros %}

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
    <section class=\"sign-form\" id=\"account-login\">
        <div class=\"container sign-form__container\">
            {% if success %}
                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
            {% endif %}
            {% if error_warning %}
                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
            {% endif %}
            <h2 class=\"sign-form__title text--center text--size_h3-full\">{{ text_login }}</h2>
            <form class=\"sign-form__form mx\" action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input\">
                        <input class=\"custom-input__input\" type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" required />
                        <div class=\"custom-input__error d-none\">{{ error_required_field }}</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            {{ macros.svg('eye', 'anim')}}
                        </button>
                        <div class=\"custom-input__error d-none\">{{ error_required_field }}</div>
                    </div>
                </div>
                {% if redirect %}
                    <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
              {% endif %}
                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">{{ button_login }}</button>
                <div class=\"sign-form__footer flex-row j-between\">
                    <div class=\"custom-checkbox sign-form__checkbox flex-row\">
                        <div class=\"custom-checkbox__wrapper rel\">
                            <input class=\"abs wh-full inset m-0\" type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" />
                        </div>
                        <label for=\"remember_me\">{{ text_remember_me }}</label>
                    </div>
                    <a class=\"sign-form__page-link\" href=\"{{ forgotten }}\">{{ text_forgotten }}</a>
                </div>
                <a class=\"text--upp text--color_accent sign-form__bottom-link text--size_label text--center\" href=\"{{ register }}\">{{ text_register }}</a>
            </form>
        </div>
    </section>
</main>


{{ footer }}", "drmyts/template/account/login.twig", "");
    }
}
