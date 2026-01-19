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
class __TwigTemplate_dc0a20897f231a7cd583351f69cb719f11de4f3c93cf4af53561b2b6a4c2eabd extends \Twig\Template
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
            echo "                <div class=\"sign-form__icon mx\"> 
                    ";
            // line 21
            echo twig_call_macro($macros["macros"], "macro_svg", ["icon-check", "full-wh"], 21, $context, $this->getSourceContext());
            echo "
                </div>
                <div class=\"sign-form__txt text--center mx\"> 
                    <p> ";
            // line 24
            echo ($context["success"] ?? null);
            echo "</p>
                  </div>
            ";
        }
        // line 27
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 28
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
            ";
        }
        // line 30
        echo "            <h2 class=\"sign-form__title text--center text--size_h3-full\">";
        echo ($context["text_login"] ?? null);
        echo "</h2>
            <form class=\"sign-form__form mx\" action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input\">
                        <input class=\"custom-input__input\" type=\"email\" name=\"email\" value=\"";
        // line 34
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" required />
                        <div class=\"custom-input__error d-none\">";
        // line 35
        echo ($context["error_required_field"] ?? null);
        echo "</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"password\" value=\"";
        // line 38
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            ";
        // line 40
        echo twig_call_macro($macros["macros"], "macro_svg", ["eye", "anim"], 40, $context, $this->getSourceContext());
        echo "
                        </button>
                        <div class=\"custom-input__error d-none\">";
        // line 42
        echo ($context["error_required_field"] ?? null);
        echo "</div>
                    </div>
                </div>
                ";
        // line 45
        if (($context["redirect"] ?? null)) {
            // line 46
            echo "                    <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 48
        echo "                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">";
        echo ($context["button_login"] ?? null);
        echo "</button>
                <div class=\"sign-form__footer flex-row j-between\">
                    <div class=\"custom-checkbox sign-form__checkbox flex-row\">
                        <div class=\"custom-checkbox__wrapper rel\">
                            <input class=\"abs wh-full inset m-0\" type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" />
                        </div>
                        <label for=\"remember_me\">";
        // line 54
        echo ($context["text_remember_me"] ?? null);
        echo "</label>
                    </div>
                    <a class=\"sign-form__page-link\" href=\"";
        // line 56
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                </div>
                <a class=\"text--upp text--color_accent sign-form__bottom-link text--size_label text--center\" href=\"";
        // line 58
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["text_register"] ?? null);
        echo "</a>
            </form>
        </div>
    </section>
</main>


";
        // line 65
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
        return array (  187 => 65,  175 => 58,  168 => 56,  163 => 54,  153 => 48,  147 => 46,  145 => 45,  139 => 42,  134 => 40,  127 => 38,  121 => 35,  115 => 34,  109 => 31,  104 => 30,  98 => 28,  95 => 27,  89 => 24,  83 => 21,  80 => 20,  78 => 19,  70 => 13,  59 => 11,  55 => 10,  49 => 7,  43 => 3,  41 => 2,  37 => 1,);
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
                <div class=\"sign-form__icon mx\"> 
                    {{ macros.svg('icon-check', 'full-wh' ) }}
                </div>
                <div class=\"sign-form__txt text--center mx\"> 
                    <p> {{ success }}</p>
                  </div>
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
