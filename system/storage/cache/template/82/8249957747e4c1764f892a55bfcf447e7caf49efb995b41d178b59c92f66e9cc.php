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

/* drmyts/template/account/register.twig */
class __TwigTemplate_c413cc791fa407d270fb466e6a35bf055e419b6b2eb6c5094e30fca450aa6348 extends \Twig\Template
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
        // line 5
        echo ($context["text_account"] ?? null);
        echo "</h1>
            <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
                <div class=\"breadcrumbs__list flex-row\">
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "                        <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                </div>
            </div>
        </div>
    </div>
    <section class=\"sign-form\">
        <div class=\"container sign-form__container\">
            <h2 class=\"sign-form__title text--center text--size_h3-full\">Реєстрація</h2>
            <form class=\"sign-form__form mx\" action=\"/\" method=\"post\">
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input\">
                        <input class=\"custom-input__input\" type=\"text\" name=\"user_name\" placeholder=\"Ваше ім'я\" required />
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input valid\">
                        <input class=\"custom-input__input\" type=\"tel\" name=\"user_phone\" placeholder=\"Номер телефону\" required />
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input invalid\">
                        <input class=\"custom-input__input\" type=\"email\" name=\"user_email\" placeholder=\"E-mail\" required />
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"user_password\" placeholder=\"Пароль\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            <svg class=\"anim\" role=\"presentation\">
                                <use href=\"./assets/svg/sprite.svg#eye\"></use>
                            </svg>
                        </button>
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"user_password_confirm\" placeholder=\"Повторіть пароль\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            <svg class=\"anim\" role=\"presentation\">
                                <use href=\"./assets/svg/sprite.svg#eye\"></use>
                            </svg>
                        </button>
                        <div class=\"custom-input__error d-none\">Ой, паролі не збігаються</div>
                    </div>
                </div>
                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">Зареєструватися</button>
                <div class=\"sign-form__footer flex-row j-between\">
                    <div class=\"custom-checkbox sign-form__checkbox flex-row\">
                        <div class=\"custom-checkbox__wrapper rel\">
                            <input class=\"abs wh-full inset m-0\" type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" />
                        </div>
                        <label for=\"remember_me\">Запам'ятати мене</label>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
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
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
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
        // line 166
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 171
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 176
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
";
        // line 181
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 181,  238 => 176,  230 => 171,  222 => 166,  65 => 11,  54 => 9,  50 => 8,  44 => 5,  37 => 1,);
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
            <h2 class=\"sign-form__title text--center text--size_h3-full\">Реєстрація</h2>
            <form class=\"sign-form__form mx\" action=\"/\" method=\"post\">
                <div class=\"sign-form__fields flex-col\">
                    <div class=\"sign-form__field custom-input\">
                        <input class=\"custom-input__input\" type=\"text\" name=\"user_name\" placeholder=\"Ваше ім'я\" required />
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input valid\">
                        <input class=\"custom-input__input\" type=\"tel\" name=\"user_phone\" placeholder=\"Номер телефону\" required />
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input invalid\">
                        <input class=\"custom-input__input\" type=\"email\" name=\"user_email\" placeholder=\"E-mail\" required />
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"user_password\" placeholder=\"Пароль\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            <svg class=\"anim\" role=\"presentation\">
                                <use href=\"./assets/svg/sprite.svg#eye\"></use>
                            </svg>
                        </button>
                        <div class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</div>
                    </div>
                    <div class=\"sign-form__field custom-input custom-input--type_password rel\">
                        <input class=\"custom-input__input\" type=\"password\" name=\"user_password_confirm\" placeholder=\"Повторіть пароль\" required />
                        <button class=\"btn flex-center custom-input__icon abs\" type=\"button\">
                            <svg class=\"anim\" role=\"presentation\">
                                <use href=\"./assets/svg/sprite.svg#eye\"></use>
                            </svg>
                        </button>
                        <div class=\"custom-input__error d-none\">Ой, паролі не збігаються</div>
                    </div>
                </div>
                <button class=\"text--upp btn--theme btn--theme_accent w-full btn btn--size_M sign-form__submit\" type=\"submit\">Зареєструватися</button>
                <div class=\"sign-form__footer flex-row j-between\">
                    <div class=\"custom-checkbox sign-form__checkbox flex-row\">
                        <div class=\"custom-checkbox__wrapper rel\">
                            <input class=\"abs wh-full inset m-0\" type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" />
                        </div>
                        <label for=\"remember_me\">Запам'ятати мене</label>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
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
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
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

\$('.time').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
{{ footer }} ", "drmyts/template/account/register.twig", "");
    }
}
