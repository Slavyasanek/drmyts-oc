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

/* drmyts/template/account/account.twig */
class __TwigTemplate_fa5edd78440950576f5f5d0585f8a4ee95c5254402827557a53f1a3dcfde75c0 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/account/account.twig", 3)->unwrap();
        // line 4
        echo "
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
  ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 23
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 25
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 26
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 27
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 28
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 30
        if (($context["credit_cards"] ?? null)) {
            // line 31
            echo "      <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 34
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 34);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </ul>
      ";
        }
        // line 38
        echo "      <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 40
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 41
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 42
        if (($context["reward"] ?? null)) {
            // line 43
            echo "        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 45
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 46
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 47
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
      </ul>
      <h2>";
        // line 49
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 51
        if ( !($context["tracking"] ?? null)) {
            // line 52
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
        ";
        } else {
            // line 54
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
        <li><a href=\"";
            // line 55
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
        ";
        }
        // line 57
        echo "      </ul>
      <h2>";
        // line 58
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 60
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 62
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 63
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>


<main>
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 70
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 74
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 74);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 74);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </div>
            </div>
            ";
        // line 78
        if (($context["success"] ?? null)) {
            // line 79
            echo "                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
            ";
        }
        // line 81
        echo "        </div>
    </div>
    <section class=\"account\">
        <div class=\"container account__container\">
            <div class=\"account__nav flex-col border--end\">
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
        // line 86
        echo ($context["edit"] ?? null);
        echo "\">
                    <div class=\"icon account__nav-icon\">
                        ";
        // line 88
        echo twig_call_macro($macros["macros"], "macro_svg", ["user", ""], 88, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>";
        // line 90
        echo ($context["text_edit"] ?? null);
        echo "</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"wishlist.html\">
                    <div class=\"icon account__nav-icon\">
                        <svg role=\"presentation\">
                            <use href=\"./assets/svg/sprite.svg#heart\"></use>
                        </svg>
                        ";
        // line 97
        echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 97, $context, $this->getSourceContext());
        echo "
                    </div>
                    <span>Список бажань</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"orders.html\">
                    <div class=\"icon account__nav-icon\">
                        <svg role=\"presentation\">
                            <use href=\"./assets/svg/sprite.svg#shopping-bag\"></use>
                        </svg>
                    </div>
                    <span>Історія замовлень</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"/\">
                    <div class=\"icon account__nav-icon\">
                        <svg role=\"presentation\">
                            <use href=\"./assets/svg/sprite.svg#logout\"></use>
                        </svg>
                    </div>
                    <span>Вийти</span>
                </a>
            </div>
            <div class=\"account__content\">
                <h2 class=\"account__subtitle text--size_h3-full\">Контактна інформація</h2>
                <form class=\"account-details d-grid\" action=\"/\">
                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_name\">Ваше ім’я</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"user_name\" placeholder=\"Ваше ім’я \" value=\"Вероніка\" required id=\"user_name\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_surname\">Прізвище</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"user_surname\" placeholder=\"Прізвище\" value=\"Кравчук\" required id=\"user_surname\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input invalid\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_email\">E-mail</label>
                            <input class=\"custom-input__input\" type=\"email\" name=\"user_email\" placeholder=\"E-mail\" value=\"example@gmail.com\" required id=\"user_email\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_tel\">Номер телефону</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"user_tel\" placeholder=\"Номер телефону\" value=\"+38 (068) 000 20 25\" required id=\"user_tel\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                    </div>
                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"old_pass\">Старий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"old_pass\" placeholder=\"Пароль\" required id=\"old_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                <svg class=\"anim\" role=\"presentation\">
                                    <use href=\"./assets/svg/sprite.svg#eye\"></use>
                                </svg>
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass\">Новий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass\" placeholder=\"Пароль\" value=\"qwerty2025\" required id=\"new_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                <svg class=\"anim\" role=\"presentation\">
                                    <use href=\"./assets/svg/sprite.svg#eye\"></use>
                                </svg>
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass_again\">Повторіть пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass_again\" placeholder=\"Пароль\" value=\"qwerty2025\" required id=\"new_pass_again\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                <svg class=\"anim\" role=\"presentation\">
                                    <use href=\"./assets/svg/sprite.svg#eye\"></use>
                                </svg>
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                    </div>
                    <button class=\"btn btn--theme btn--theme_accent text--upp btn--size_M d-block account-details__btn\" type=\"submit\">Зберегти</button>
                </form>
            </div>
        </div>
    </section>
</main>

";
        // line 182
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 182,  330 => 97,  320 => 90,  315 => 88,  310 => 86,  303 => 81,  297 => 79,  295 => 78,  291 => 76,  280 => 74,  276 => 73,  270 => 70,  260 => 63,  256 => 62,  249 => 60,  244 => 58,  241 => 57,  234 => 55,  227 => 54,  219 => 52,  217 => 51,  212 => 49,  205 => 47,  199 => 46,  192 => 45,  184 => 43,  182 => 42,  176 => 41,  170 => 40,  164 => 38,  160 => 36,  149 => 34,  145 => 33,  139 => 31,  137 => 30,  130 => 28,  124 => 27,  118 => 26,  112 => 25,  107 => 23,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  80 => 15,  75 => 14,  69 => 12,  67 => 11,  64 => 10,  53 => 8,  49 => 7,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

{% import \"drmyts/template/macro/macros.twig\" as macros %}

<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
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
      <h2>{{ text_my_account }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
        <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
        <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
        <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
      </ul>
      {% if credit_cards %}
      <h2>{{ text_credit_card }}</h2>
      <ul class=\"list-unstyled\">
        {% for credit_card in credit_cards %}
        <li><a href=\"{{ credit_card.href }}\">{{ credit_card.name }}</a></li>
        {% endfor %}
      </ul>
      {% endif %}
      <h2>{{ text_my_orders }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
        <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
        {% if reward %}
        <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li>
        {% endif %}
        <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
        <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li>
        <li><a href=\"{{ recurring }}\">{{ text_recurring }}</a></li>
      </ul>
      <h2>{{ text_my_affiliate }}</h2>
      <ul class=\"list-unstyled\">
        {% if not tracking %}
        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li>
        {% else %}
        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li>
        <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
        {% endif %}
      </ul>
      <h2>{{ text_my_newsletter }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
      </ul>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>


<main>
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">{{ heading_title }}</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    {% for breadcrumb in breadcrumbs %}
                        <a class=\"breadcrumbs__item\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                    {% endfor %}
                </div>
            </div>
            {% if success %}
                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
            {% endif %}
        </div>
    </div>
    <section class=\"account\">
        <div class=\"container account__container\">
            <div class=\"account__nav flex-col border--end\">
                <a class=\"flex-row account__nav-item text--upp\" href=\"{{ edit }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('user', '') }}
                    </div>
                    <span>{{ text_edit }}</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"wishlist.html\">
                    <div class=\"icon account__nav-icon\">
                        <svg role=\"presentation\">
                            <use href=\"./assets/svg/sprite.svg#heart\"></use>
                        </svg>
                        {{ macros.svg('heart', '') }}
                    </div>
                    <span>Список бажань</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"orders.html\">
                    <div class=\"icon account__nav-icon\">
                        <svg role=\"presentation\">
                            <use href=\"./assets/svg/sprite.svg#shopping-bag\"></use>
                        </svg>
                    </div>
                    <span>Історія замовлень</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"/\">
                    <div class=\"icon account__nav-icon\">
                        <svg role=\"presentation\">
                            <use href=\"./assets/svg/sprite.svg#logout\"></use>
                        </svg>
                    </div>
                    <span>Вийти</span>
                </a>
            </div>
            <div class=\"account__content\">
                <h2 class=\"account__subtitle text--size_h3-full\">Контактна інформація</h2>
                <form class=\"account-details d-grid\" action=\"/\">
                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_name\">Ваше ім’я</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"user_name\" placeholder=\"Ваше ім’я \" value=\"Вероніка\" required id=\"user_name\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_surname\">Прізвище</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"user_surname\" placeholder=\"Прізвище\" value=\"Кравчук\" required id=\"user_surname\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input invalid\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_email\">E-mail</label>
                            <input class=\"custom-input__input\" type=\"email\" name=\"user_email\" placeholder=\"E-mail\" value=\"example@gmail.com\" required id=\"user_email\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_tel\">Номер телефону</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"user_tel\" placeholder=\"Номер телефону\" value=\"+38 (068) 000 20 25\" required id=\"user_tel\" />
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                    </div>
                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"old_pass\">Старий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"old_pass\" placeholder=\"Пароль\" required id=\"old_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                <svg class=\"anim\" role=\"presentation\">
                                    <use href=\"./assets/svg/sprite.svg#eye\"></use>
                                </svg>
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass\">Новий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass\" placeholder=\"Пароль\" value=\"qwerty2025\" required id=\"new_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                <svg class=\"anim\" role=\"presentation\">
                                    <use href=\"./assets/svg/sprite.svg#eye\"></use>
                                </svg>
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass_again\">Повторіть пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass_again\" placeholder=\"Пароль\" value=\"qwerty2025\" required id=\"new_pass_again\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                <svg class=\"anim\" role=\"presentation\">
                                    <use href=\"./assets/svg/sprite.svg#eye\"></use>
                                </svg>
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                    </div>
                    <button class=\"btn btn--theme btn--theme_accent text--upp btn--size_M d-block account-details__btn\" type=\"submit\">Зберегти</button>
                </form>
            </div>
        </div>
    </section>
</main>

{{ footer }}", "drmyts/template/account/account.twig", "");
    }
}
