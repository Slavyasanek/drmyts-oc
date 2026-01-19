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
class __TwigTemplate_94b5852b1c7fd5b0ea0b418a0071e1b6ea3e4dff74ae47d417a7a87ab5b0c392 extends \Twig\Template
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
        // line 45
        echo "<footer class=\"footer\">
    <div class=\"container footer__main\">
        <div class=\"footer__logo-block\">
            <a class=\"logo footer__logo\" href=\"/\">
                <picture>
                    ";
        // line 51
        echo "                    <img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Dr Myts shop logo\" loading=\"lazy\" />
                </picture>
            </a>
            <p class=\"footer__txt\">Експертно відібрані продукти від лікаря-дерматолога</p>
        </div>
        <div class=\"footer__nav flex-row-wrap\">
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">Каталог</h3>
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
                <h3 class=\"footer__menu-title\">Інформація</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Про магазин</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Консультація</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Доставка та оплата</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Контакти</a></li>
                </ul>
            </div>
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">Контакти</h3>
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
        // line 95
        echo "            <p class=\"footer__copy\">";
        echo ($context["powered"] ?? null);
        echo "</p>
        </div>
    </div>
</footer>
";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 100
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 100);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 100);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 100);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 103
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
<script src=\"catalog/view/theme/drmyts/js/common.js\" type=\"text/javascript\"></script>
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
        return array (  129 => 105,  120 => 103,  116 => 102,  103 => 100,  99 => 99,  91 => 95,  44 => 51,  37 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{# <footer>
  <div class=\"container\">
    <div class=\"row\">
      {% if informations %}
      <div class=\"col-sm-3\">
        <h5>{{ text_information }}</h5>
        <ul class=\"list-unstyled\">
         {% for information in informations %}
          <li><a href=\"{{ information.href }}\">{{ information.title }}</a></li>
          {% endfor %}
        </ul>
      </div>
      {% endif %}
      <div class=\"col-sm-3\">
        <h5>{{ text_service }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ contact }}\">{{ text_contact }}</a></li>
          <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
          <li><a href=\"{{ sitemap }}\">{{ text_sitemap }}</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_extra }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ manufacturer }}\">{{ text_manufacturer }}</a></li>
          <li><a href=\"{{ voucher }}\">{{ text_voucher }}</a></li>
          <li><a href=\"{{ affiliate }}\">{{ text_affiliate }}</a></li>
          <li><a href=\"{{ special }}\">{{ text_special }}</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_account }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ account }}\">{{ text_account }}</a></li>
          <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
          <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
          <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>{{ powered }}</p>
  </div>
</footer> #}
<footer class=\"footer\">
    <div class=\"container footer__main\">
        <div class=\"footer__logo-block\">
            <a class=\"logo footer__logo\" href=\"/\">
                <picture>
                    {# <source srcset=\"./assets/pics/logo.svg\" type=\"image/svg+xml\" /> #}
                    <img src=\"{{ logo }}\" alt=\"Dr Myts shop logo\" loading=\"lazy\" />
                </picture>
            </a>
            <p class=\"footer__txt\">Експертно відібрані продукти від лікаря-дерматолога</p>
        </div>
        <div class=\"footer__nav flex-row-wrap\">
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">Каталог</h3>
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
                <h3 class=\"footer__menu-title\">Інформація</h3>
                <ul class=\"footer__menu flex-col\">
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Про магазин</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Консультація</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Доставка та оплата</a></li>
                    <li class=\"footer__menu-item\"><a class=\"footer__menu-link\" href=\"#\">Контакти</a></li>
                </ul>
            </div>
            <div class=\"footer__menu-wr\">
                <h3 class=\"footer__menu-title\">Контакти</h3>
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
{% for script in scripts %}
<script src=\"{{ script }}\" type=\"text/javascript\"></script>
{% endfor %}
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
<script src=\"catalog/view/theme/drmyts/js/common.js\" type=\"text/javascript\"></script>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>", "drmyts/template/common/footer.twig", "");
    }
}
