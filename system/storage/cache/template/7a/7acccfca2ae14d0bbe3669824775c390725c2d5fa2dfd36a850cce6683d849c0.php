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
class __TwigTemplate_df97b5da1860eb1917d84e4384eb720399573a08085a7c87c0f7c4d2746b3d5e extends \Twig\Template
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
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
  ";
        // line 10
        if (($context["success"] ?? null)) {
            // line 11
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 16
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 28
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 29
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 30
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 31
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 35
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 36
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 39
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 40
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 43
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 44
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 45
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 46
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 47
        if (($context["redirect"] ?? null)) {
            // line 48
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 50
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 54
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 55
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<main>
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 60
        echo ($context["text_account"] ?? null);
        echo "</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 64
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 64);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 64);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </div>
            </div>
        </div>
    </div>
    <section class=\"sign-form\">
        <div class=\"container sign-form__container\">
            ";
        // line 72
        if (($context["success"] ?? null)) {
            // line 73
            echo "                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
            ";
        }
        // line 75
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 76
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
            ";
        }
        // line 78
        echo "            <h2 class=\"sign-form__title text--center text--size_h3-full\">";
        echo ($context["text_login"] ?? null);
        echo "</h2>
            <form class=\"sign-form__form mx\" action=\"";
        // line 79
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input\">
                        <input class=\"custom-input__input\" type=\"email\" name=\"email\" value=\"";
        // line 82
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" required />
                        <div class=\"custom-input__error d-none\">";
        // line 83
        echo ($context["error_required_field"] ?? null);
        echo "</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"password\" value=\"";
        // line 86
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            ";
        // line 88
        echo twig_call_macro($macros["macros"], "macro_svg", ["eye", "anim"], 88, $context, $this->getSourceContext());
        echo "
                        </button>
                        <div class=\"custom-input__error d-none\">";
        // line 90
        echo ($context["error_required_field"] ?? null);
        echo "</div>
                    </div>
                </div>
                ";
        // line 93
        if (($context["redirect"] ?? null)) {
            // line 94
            echo "                    <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 96
        echo "                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">";
        echo ($context["button_login"] ?? null);
        echo "</button>
                <div class=\"sign-form__footer flex-row j-between\">
                    <div class=\"custom-checkbox sign-form__checkbox flex-row\">
                        <div class=\"custom-checkbox__wrapper rel\">
                            <input class=\"abs wh-full inset m-0\" type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" />
                        </div>
                        <label for=\"remember_me\">";
        // line 102
        echo ($context["text_remember_me"] ?? null);
        echo "</label>
                    </div>
                    <a class=\"sign-form__page-link\" href=\"/password-email.html\">";
        // line 104
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                </div>
                <a class=\"text--upp text--color_accent sign-form__bottom-link text--size_label text--center\" href=\"";
        // line 106
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["text_register"] ?? null);
        echo "</a>
            </form>
        </div>
    </section>
</main>


";
        // line 113
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
        return array (  337 => 113,  325 => 106,  320 => 104,  315 => 102,  305 => 96,  299 => 94,  297 => 93,  291 => 90,  286 => 88,  279 => 86,  273 => 83,  267 => 82,  261 => 79,  256 => 78,  250 => 76,  247 => 75,  241 => 73,  239 => 72,  231 => 66,  220 => 64,  216 => 63,  210 => 60,  202 => 55,  198 => 54,  192 => 50,  186 => 48,  184 => 47,  180 => 46,  174 => 45,  168 => 44,  164 => 43,  156 => 40,  152 => 39,  147 => 37,  143 => 36,  139 => 35,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  90 => 18,  88 => 17,  83 => 16,  77 => 14,  74 => 13,  68 => 11,  66 => 10,  63 => 9,  52 => 7,  48 => 6,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% import \"drmyts/template/macro/macros.twig\" as macros %}

<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
  {% endif %}
  {% if error_warning %}
  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>{{ text_new_customer }}</h2>
            <p><strong>{{ text_register }}</strong></p>
            <p>{{ text_register_account }}</p>
            <a href=\"{{ register }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>{{ text_returning_customer }}</h2>
            <p><strong>{{ text_i_am_returning_customer }}</strong></p>
            <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">{{ entry_email }}</label>
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">{{ entry_password }}</label>
                <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" />
                <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
              <input type=\"submit\" value=\"{{ button_login }}\" class=\"btn btn-primary\" />
              {% if redirect %}
              <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
              {% endif %}
            </form>
          </div>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
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
                    <a class=\"sign-form__page-link\" href=\"/password-email.html\">{{ text_forgotten }}</a>
                </div>
                <a class=\"text--upp text--color_accent sign-form__bottom-link text--size_label text--center\" href=\"{{ register }}\">{{ text_register }}</a>
            </form>
        </div>
    </section>
</main>


{{ footer }}", "drmyts/template/account/login.twig", "");
    }
}
