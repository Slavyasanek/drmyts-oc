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

/* drmyts/template/common/footer.twig */
class __TwigTemplate_b86c6907003b1026279e15bc9db6460ad9731e49511ecb932cfc4aee11c54797 extends \Twig\Template
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
        echo "<footer class=\"footer\">
    <div class=\"container footer__main\">
        <div class=\"footer__logo-block\">
            <div class=\"logo footer__logo\" href=\"/\">
                <picture>
                    ";
        // line 7
        echo "                    <img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Dr Myts shop logo\" loading=\"lazy\" />
                </picture>
            </div>
            <p class=\"footer__txt\">Експертно відібрані продукти від лікаря-дерматолога</p>
        </div>
        <div class=\"footer__nav flex-row-wrap\">
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">";
        // line 14
        echo ($context["text_catalogue"] ?? null);
        echo "</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Бренди</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Акції та знижки</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Улюблене Вероніки</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Обличчя</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Тіло</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Волосся</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Набори і подарунки</a></li>
                </ul>
            </div>
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">";
        // line 26
        echo ($context["text_information"] ?? null);
        echo "</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Про магазин</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Консультація</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Доставка та оплата</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Контакти</a></li>
                </ul>
            </div>
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">";
        // line 35
        echo ($context["text_service"] ?? null);
        echo "</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Instagram</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Telegram</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Телефон</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer__copyright\">
        <div class=\"container footer__copyright-container\">
            <ul class=\"footer__bottom-menu flex-col\">
                <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Політика конфіденційності</a></li>
                <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Договір оферти</a></li>
            </ul>
            ";
        // line 51
        echo "            <p class=\"footer__copy\">";
        echo ($context["powered"] ?? null);
        echo "</p>
        </div>
    </div>
</footer>
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 56
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 56);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 56);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 56);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
<script src=\"catalog/view/theme/drmyts/js/common.js\" type=\"text/javascript\"></script>

";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 62
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "drmyts/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 64,  134 => 62,  130 => 61,  125 => 58,  112 => 56,  108 => 55,  100 => 51,  82 => 35,  70 => 26,  55 => 14,  44 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"container footer__main\">
        <div class=\"footer__logo-block\">
            <div class=\"logo footer__logo\" href=\"/\">
                <picture>
                    {# <source srcset=\"./assets/pics/logo.svg\" type=\"image/svg+xml\" /> #}
                    <img src=\"{{ logo }}\" alt=\"Dr Myts shop logo\" loading=\"lazy\" />
                </picture>
            </div>
            <p class=\"footer__txt\">Експертно відібрані продукти від лікаря-дерматолога</p>
        </div>
        <div class=\"footer__nav flex-row-wrap\">
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">{{ text_catalogue }}</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Бренди</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Акції та знижки</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Улюблене Вероніки</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Обличчя</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Тіло</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Волосся</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Набори і подарунки</a></li>
                </ul>
            </div>
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">{{ text_information }}</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Про магазин</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Консультація</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Доставка та оплата</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Контакти</a></li>
                </ul>
            </div>
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">{{ text_service }}</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Instagram</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Telegram</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Телефон</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer__copyright\">
        <div class=\"container footer__copyright-container\">
            <ul class=\"footer__bottom-menu flex-col\">
                <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Політика конфіденційності</a></li>
                <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Договір оферти</a></li>
            </ul>
            {# <p class=\"footer__copy\">&#169;2025 dr.Myts Shop. All rights reserved.</p> #}
            <p class=\"footer__copy\">{{ powered }}</p>
        </div>
    </div>
</footer>
{% for style in styles %}
<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
{% endfor %}
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
<script src=\"catalog/view/theme/drmyts/js/common.js\" type=\"text/javascript\"></script>

{% for script in scripts %}
<script src=\"{{ script }}\" type=\"text/javascript\"></script>
{% endfor %}


<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>", "drmyts/template/common/footer.twig", "");
    }
}
