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

/* drmyts/template/account/edit.twig */
class __TwigTemplate_985699e7e7d09dfce8ace43866a7dbac38a0bd002646674b1c14b32f05b19667 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/account/edit.twig", 3)->unwrap();
        // line 4
        echo "
<main>
    <div class=\"page-title border--end\">
        <div class=\"container page-title__container\">
            <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    ";
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
        echo "                </div>
            </div>
        </div>
    </div>
    <section class=\"account\">
        <div class=\"container account__container\">
            <div class=\"account__nav flex-col border--end\">
                <a class=\"flex-row account__nav-item text--upp active\" href=\"";
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
                <a class=\"flex-row account__nav-item text--upp\" href=\"";
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
        echo ($context["text_wishlist"] ?? null);
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
            <div class=\"account__content\">
                ";
        // line 47
        if (($context["success"] ?? null)) {
            // line 48
            echo "                    <div class=\"flex-row account__success\">
                        <div class=\"icon account__success-icon\">
                            ";
            // line 50
            echo twig_call_macro($macros["macros"], "macro_svg", ["icon-check", ""], 50, $context, $this->getSourceContext());
            echo "
                        </div>
                        <span>";
            // line 52
            echo ($context["success"] ?? null);
            echo "</span>
                    </div>
                ";
        }
        // line 55
        echo "                <h2 class=\"account__subtitle text--size_h3-full\">";
        echo ($context["text_edit"] ?? null);
        echo "</h2>
                <form class=\"account-details d-grid\" action=\"";
        // line 56
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input ";
        // line 59
        if (($context["error_firstname"] ?? null)) {
            echo " invalid ";
        }
        echo "\">
                            <label class=\"custom-input__label text--color_gray\" for=\"input-firstname\">";
        // line 60
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                            <input class=\"custom-input__input\"  type=\"text\" name=\"firstname\" value=\"";
        // line 61
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"  />
                            ";
        // line 62
        if (($context["error_firstname"] ?? null)) {
            // line 63
            echo "                                <div class=\"custom-input__error\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 65
        echo "                        </div>
                        <div class=\"account-details__field custom-input ";
        // line 66
        if (($context["error_lastname"] ?? null)) {
            echo " invalid ";
        }
        echo "\">
                            <label class=\"custom-input__label text--color_gray\" for=\"input-lastname\">";
        // line 67
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"lastname\" value=\"";
        // line 68
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\"  />
                            ";
        // line 69
        if (($context["error_lastname"] ?? null)) {
            // line 70
            echo "                                <div class=\"custom-input__error \">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 72
        echo "                        </div>
                        <div class=\"account-details__field custom-input ";
        // line 73
        if (($context["error_email"] ?? null)) {
            echo "invalid";
        }
        echo "\">
                            <label class=\"custom-input__label text--color_gray\" for=\"input-email\">";
        // line 74
        echo ($context["entry_email"] ?? null);
        echo "</label>
                            <input class=\"custom-input__input\" type=\"email\" name=\"email\" value=\"";
        // line 75
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" />
                            ";
        // line 76
        if (($context["error_email"] ?? null)) {
            // line 77
            echo "                                <div class=\"custom-input__error\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 79
        echo "                        </div>
                        <div class=\"account-details__field custom-input ";
        // line 80
        if (($context["error_telephone"] ?? null)) {
            echo "invalid";
        }
        echo "\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_tel\">";
        // line 81
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                            <input class=\"custom-input__input\" type=\"tel\" name=\"telephone\" value=\"";
        // line 82
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\"  />
                            ";
        // line 83
        if (($context["error_telephone"] ?? null)) {
            // line 84
            echo "                            <div class=\"custom-input__error d-none\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 86
        echo "                        </div>
                    </div>

                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"old_pass\">Старий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"old_pass\" placeholder=\"Пароль\" id=\"old_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                ";
        // line 94
        echo twig_call_macro($macros["macros"], "macro_svg", ["eye", "anim"], 94, $context, $this->getSourceContext());
        echo "
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass\">Новий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass\" placeholder=\"Пароль\" value=\"qwerty2025\" id=\"new_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                ";
        // line 102
        echo twig_call_macro($macros["macros"], "macro_svg", ["eye", "anim"], 102, $context, $this->getSourceContext());
        echo "
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass_again\">Повторіть пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass_again\" placeholder=\"Пароль\" value=\"qwerty2025\" id=\"new_pass_again\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                ";
        // line 110
        echo twig_call_macro($macros["macros"], "macro_svg", ["eye", "anim"], 110, $context, $this->getSourceContext());
        echo "
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

<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
\t\t\$('.form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('.form-group').length) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 197
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 202
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 208
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});
//--></script>
";
        // line 212
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 212,  414 => 208,  405 => 202,  397 => 197,  307 => 110,  296 => 102,  285 => 94,  275 => 86,  269 => 84,  267 => 83,  261 => 82,  257 => 81,  251 => 80,  248 => 79,  242 => 77,  240 => 76,  234 => 75,  230 => 74,  224 => 73,  221 => 72,  215 => 70,  213 => 69,  207 => 68,  203 => 67,  197 => 66,  194 => 65,  188 => 63,  186 => 62,  180 => 61,  176 => 60,  170 => 59,  164 => 56,  159 => 55,  153 => 52,  148 => 50,  144 => 48,  142 => 47,  135 => 43,  130 => 41,  125 => 39,  120 => 37,  115 => 35,  110 => 33,  105 => 31,  100 => 29,  95 => 27,  90 => 25,  85 => 23,  80 => 21,  71 => 14,  60 => 12,  56 => 11,  50 => 8,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

{% import \"drmyts/template/macro/macros.twig\" as macros %}

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
        </div>
    </div>
    <section class=\"account\">
        <div class=\"container account__container\">
            <div class=\"account__nav flex-col border--end\">
                <a class=\"flex-row account__nav-item text--upp active\" href=\"{{ edit }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('user', '') }}
                    </div>
                    <span>{{ text_edit }}</span>
                </a>
                <a class=\"flex-row account__nav-item text--upp\" href=\"{{ wishlist }}\">
                    <div class=\"icon account__nav-icon\">
                        {{ macros.svg('heart', '') }}
                    </div>
                    <span>{{ text_wishlist }}</span>
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
            <div class=\"account__content\">
                {% if success %}
                    <div class=\"flex-row account__success\">
                        <div class=\"icon account__success-icon\">
                            {{ macros.svg('icon-check', '') }}
                        </div>
                        <span>{{ success }}</span>
                    </div>
                {% endif %}
                <h2 class=\"account__subtitle text--size_h3-full\">{{ text_edit }}</h2>
                <form class=\"account-details d-grid\" action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">

                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input {% if error_firstname %} invalid {% endif %}\">
                            <label class=\"custom-input__label text--color_gray\" for=\"input-firstname\">{{ entry_firstname }}</label>
                            <input class=\"custom-input__input\"  type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\"  />
                            {% if error_firstname %}
                                <div class=\"custom-input__error\">{{ error_firstname  }}</div>
                            {% endif %}
                        </div>
                        <div class=\"account-details__field custom-input {% if error_lastname %} invalid {% endif %}\">
                            <label class=\"custom-input__label text--color_gray\" for=\"input-lastname\">{{ entry_lastname }}</label>
                            <input class=\"custom-input__input\" type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\"  />
                            {% if error_lastname %}
                                <div class=\"custom-input__error \">{{ error_lastname }}</div>
                            {% endif %}
                        </div>
                        <div class=\"account-details__field custom-input {% if error_email %}invalid{% endif %}\">
                            <label class=\"custom-input__label text--color_gray\" for=\"input-email\">{{ entry_email }}</label>
                            <input class=\"custom-input__input\" type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" />
                            {% if error_email %}
                                <div class=\"custom-input__error\">{{ error_email }}</div>
                            {% endif %}
                        </div>
                        <div class=\"account-details__field custom-input {% if error_telephone %}invalid{% endif %}\">
                            <label class=\"custom-input__label text--color_gray\" for=\"user_tel\">{{ entry_telephone }}</label>
                            <input class=\"custom-input__input\" type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\"  />
                            {% if error_telephone %}
                            <div class=\"custom-input__error d-none\">{{ error_telephone }}</div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"account-details__col flex-col\">
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"old_pass\">Старий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"old_pass\" placeholder=\"Пароль\" id=\"old_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                {{ macros.svg('eye', 'anim') }}
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass\">Новий пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass\" placeholder=\"Пароль\" value=\"qwerty2025\" id=\"new_pass\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                {{ macros.svg('eye', 'anim') }}
                            </button>
                            <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                        </div>
                        <div class=\"account-details__field custom-input custom-input--type_password rel\">
                            <label class=\"custom-input__label text--color_gray\" for=\"new_pass_again\">Повторіть пароль</label>
                            <input class=\"custom-input__input\" type=\"password\" name=\"new_pass_again\" placeholder=\"Пароль\" value=\"qwerty2025\" id=\"new_pass_again\" />
                            <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                                {{ macros.svg('eye', 'anim') }}
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

<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
\t\t\$('.form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('.form-group').length) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: false
});
//--></script>
{{ footer }}
", "drmyts/template/account/edit.twig", "");
    }
}
