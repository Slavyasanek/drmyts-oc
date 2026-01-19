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

/* drmyts/template/common/header.twig */
class __TwigTemplate_b93954bd7707b9eb22500e0c59d15049ff2febe1e128d377f04f327fc6ccffb5 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["og_url"] ?? null);
        echo "\" />
";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
";
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 40
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 40);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 40);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 40);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        // line 44
        echo "<link href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/drmyts/stylesheet/home.css\" rel=\"stylesheet\">


";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 53
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 53);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 53);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 56
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</head>
<body>

";
        // line 61
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/common/header.twig", 61)->unwrap();
        // line 62
        echo "
<header class=\"header flex-col\">
    <div class=\"header__main-content rel border--end\">
        <div class=\"container header__container flex-row\">
            <button class=\"header__toggler btn flex-center icon hamburger\" type=\"button\" aria-label=\"Open Mobile menu\"><span class=\"d-block w-full rel\"></span></button>
            <div class=\"header-menu fixed w-full h-full header__menu\">
                <nav class=\"header-menu__inner h-full\">
                    <div class=\"header-menu__topbar flex-row j-between\">
                        ";
        // line 70
        if (($context["logo"] ?? null)) {
            // line 71
            echo "                            ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 72
                echo "                                <div class=\"logo header-menu__logo\">
                                    <picture>      
                                        <img src=\"";
                // line 74
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" fetchpriority=\"high\" />
                                    </picture>
                                </div>
                            ";
            } else {
                // line 78
                echo "                                <a class=\"logo header-menu__logo\" href=\"";
                echo ($context["home"] ?? null);
                echo "\">
                                    <picture>
                                        <img src=\"";
                // line 80
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" fetchpriority=\"high\" />
                                    </picture>
                                </a>
                            ";
            }
            // line 84
            echo "                        ";
        }
        // line 85
        echo "                        <button class=\"btn header-menu__close rel icon\">
                            ";
        // line 86
        echo twig_call_macro($macros["macros"], "macro_svg", ["сlose", ""], 86, $context, $this->getSourceContext());
        echo "
                        </button>
                    </div>
                    <ul class=\"header-menu__main flex-col\">
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Бренди
                                ";
        // line 93
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 93, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Акції та знижки
                                ";
        // line 99
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 99, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Улюблене Вероніки
                                ";
        // line 105
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 105, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Обличчя
                                ";
        // line 111
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 111, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Тіло
                                ";
        // line 117
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 117, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Волосся
                                ";
        // line 123
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 123, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Набори і подарунки
                                ";
        // line 129
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 129, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                    </ul>
                    <ul class=\"header-menu__secondary flex-col\">
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Про магазин</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Консультація</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Доставка та оплата</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Контакти</a></li>
                    </ul>
                    <ul class=\"header-menu__secondary flex-col\">
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Instagram</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Telegram</a></li>
                    </ul>
                    <div class=\"header-menu__footer\">
                        <ul class=\"header-menu__footer-list flex-col\">
                            <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Політика конфіденційності</a></li>
                            <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Договір оферти</a></li>
                        </ul>
                        <div class=\"header-menu__copy\">
                            <p>&#169;2025 dr.Myts Shop. All rights reserved.</p>
                        </div>
                    </div>
                </nav>
            </div>
            <a class=\"header__icon-link icon icon--profile\" href=\"";
        // line 154
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\">
                ";
        // line 155
        echo twig_call_macro($macros["macros"], "macro_svg", ["user", ""], 155, $context, $this->getSourceContext());
        echo "
            </a>
            ";
        // line 157
        if (($context["logo"] ?? null)) {
            // line 158
            echo "                ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 159
                echo "                    <div class=\"logo header__logo\">
                        <picture>      
                            <img src=\"";
                // line 161
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" fetchpriority=\"high\" />
                        </picture>
                    </div>
                ";
            } else {
                // line 165
                echo "                    <a class=\"logo header__logo\" href=\"";
                echo ($context["home"] ?? null);
                echo "\">
                        <picture>
                            <img src=\"";
                // line 167
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" fetchpriority=\"high\" />
                        </picture>
                    </a>
                ";
            }
            // line 171
            echo "            ";
        }
        // line 172
        echo "            <a class=\"header__icon-link icon rel icon--likes\" href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                ";
        // line 173
        echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 173, $context, $this->getSourceContext());
        echo "
                ";
        // line 174
        if (($context["wishlist_total"] ?? null)) {
            // line 175
            echo "                    <span class=\"icon__count flex-center\">";
            echo ($context["wishlist_total"] ?? null);
            echo "</span>
                ";
        }
        // line 177
        echo "            </a>
            <button class=\"header__icon-link rel cart-btn btn\" type=\"button\" data-modal-open=\"cart\">
                <div class=\"icon cart-btn__icon rel\">
                    ";
        // line 180
        echo twig_call_macro($macros["macros"], "macro_svg", ["shopping-bag", ""], 180, $context, $this->getSourceContext());
        echo "
                    ";
        // line 181
        if (($context["cart_total_items"] ?? null)) {
            // line 182
            echo "                        <span class=\"icon__count flex-center\">";
            echo ($context["cart_total_items"] ?? null);
            echo "</span>
                    ";
        }
        // line 184
        echo "                </div>
                ";
        // line 185
        if (($context["cart_total_price"] ?? null)) {
            // line 186
            echo "                    <span class=\"cart-btn__sum d-none\">";
            echo ($context["cart_total_prices"] ?? null);
            echo "</span>
                ";
        }
        // line 188
        echo "            </button>
        </div>
    </div>
    <div class=\"header__bottom\">
        <div class=\"container header__bottom-container\">
            <p class=\"header__slogan d-none m-0 text--color_gray\">100 % оригінальна продукція!</p>
            <ul class=\"header__menu d-none\">
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"about-shop.html\">Про магазин</a></li>
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"consult.html\">Консультація</a></li>
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"delivery-pay.html\">Доставка та оплата</a></li>
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Контакти</a></li>
            </ul>
            <form class=\"search-form header__search rel\" action=\"#\">
                <div class=\"search-form__header flex-row\">
                    <button class=\"btn flex-center search-form__close d-none search-form__back\" type=\"button\">
                        ";
        // line 203
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-back", ""], 203, $context, $this->getSourceContext());
        echo "
                    </button>
                    <div class=\"search-form__input custom-input custom-input--type_with-icon rel\">
                        <input class=\"custom-input__input\" name=\"search\" type=\"text\" placeholder=\"Пошук...\" autocomplete=\"off\" id=\"header-search\" />
                        <button class=\"btn flex-center icon custom-input__icon abs\" type=\"submit\">
                            ";
        // line 208
        echo twig_call_macro($macros["macros"], "macro_svg", ["search", ""], 208, $context, $this->getSourceContext());
        echo "
                        </button>
                    </div>
                    <button class=\"btn flex-center search-form__close d-none search-form__cross\" type=\"button\">
                        ";
        // line 212
        echo twig_call_macro($macros["macros"], "macro_svg", ["close", ""], 212, $context, $this->getSourceContext());
        echo "
                    </button>
                </div>
                <div class=\"live-search search-form__live-search abs d-none\">
                    <div class=\"live-search__content\">
                        <div class=\"live-search__history search-history d-none\">
                            <div class=\"search-history__heading flex-row j-between\">
                                <p class=\"search-history__title text--size_label text--color_gray\">Історія пошуку</p>
                                <button class=\"btn text--color_gray text--size_label search-history__clean-btn\" type=\"button\">Очистити історію</button>
                            </div>
                            <div class=\"search-history__items\">
                                <a class=\"search-text-item live-search__item flex-row j-between text--color_gray\" href=\"/\">
                                    <div class=\"search-text-item__search-icon icon\">
                                        ";
        // line 225
        echo twig_call_macro($macros["macros"], "macro_svg", ["search", ""], 225, $context, $this->getSourceContext());
        echo "
                                    </div>
                                    <div class=\"search-text-item__text\">тонік</div>
                                    <div class=\"search-text-item__icon\">
                                        ";
        // line 229
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 229, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between text--color_gray\" href=\"/\">
                                    <div class=\"search-text-item__search-icon icon\">
                                        ";
        // line 234
        echo twig_call_macro($macros["macros"], "macro_svg", ["search", ""], 234, $context, $this->getSourceContext());
        echo "
                                    </div>
                                    <div class=\"search-text-item__text\">крем</div>
                                    <div class=\"search-text-item__icon\">
                                        ";
        // line 238
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 238, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"live-search__searching text--color_gray d-none\">Шукаємо...</div>
                        <div class=\"live-search__no-results text--color_gray d-none\">Результатів не знайдено</div>
                        <div class=\"live-search__results d-none\">
                            <div class=\"live-search__text-items\">
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\"><strong>тонік</strong></div>
                                    <div class=\"search-text-item__icon\">
                                        ";
        // line 250
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 250, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        ";
        // line 259
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 259, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        зволожуючий
                                        <strong>тонік</strong>
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        ";
        // line 268
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 268, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        кислотою
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        ";
        // line 277
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 277, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для обличчя
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        ";
        // line 286
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 286, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </a>
                            </div>
                            <div class=\"live-search__products search-products\">
                                <div class=\"search-products__heading flex-row j-between\">
                                    <p class=\"text--size_h3-full search-products__title\">Продукти</p>
                                    <a class=\"btn flex-row text--upp search-products__view-all text--size_label\" href=\"/\">
                                        <span>Дивитися всі</span>
                                        ";
        // line 295
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-next", ""], 295, $context, $this->getSourceContext());
        echo "
                                    </a>
                                </div>
                                <div class=\"search-products__products d-grid\">
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-1.jpg\" alt=\"Comfort Zone\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Comfort Zone</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Comfort Zone</a>
                                                <span class=\"cart-item__type text--size_label\">Тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row\"><span class=\"product-price__full\">1 711,5 ₴</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-2.jpg\" alt=\"Cosmedix\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Cosmedix</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Cosmedix</a>
                                                <span class=\"cart-item__type text--size_label\">Відлущуючий тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row product-price--sale\">
                                                    <span class=\"product-price__full\">2 084 ₴</span>
                                                    <span class=\"product-price__sale\">1 711,5 ₴</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-3.jpg\" alt=\"Comfort Zone\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Comfort Zone</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Comfort Zone</a>
                                                <span class=\"cart-item__type text--size_label\">Заспокійливий тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row\"><span class=\"product-price__full\">2 039,13 ₴</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-4.jpg\" alt=\"Comfort Zone\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Comfort Zone</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Comfort Zone</a>
                                                <span class=\"cart-item__type text--size_label\">Бустер-тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row\"><span class=\"product-price__full\">2 330 ₴</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"header__mob-menu border--end\">
                <ul class=\"header__mob-list text--upp flex-row\">
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link active\" href=\"#\">Бренди</a></li>
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Акції та знижки</a></li>
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Улюблене Вероніки</a></li>
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Бренди</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
";
        // line 383
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 383,  595 => 295,  583 => 286,  571 => 277,  559 => 268,  547 => 259,  535 => 250,  520 => 238,  513 => 234,  505 => 229,  498 => 225,  482 => 212,  475 => 208,  467 => 203,  450 => 188,  444 => 186,  442 => 185,  439 => 184,  433 => 182,  431 => 181,  427 => 180,  422 => 177,  416 => 175,  414 => 174,  410 => 173,  403 => 172,  400 => 171,  389 => 167,  383 => 165,  372 => 161,  368 => 159,  365 => 158,  363 => 157,  358 => 155,  352 => 154,  324 => 129,  315 => 123,  306 => 117,  297 => 111,  288 => 105,  279 => 99,  270 => 93,  260 => 86,  257 => 85,  254 => 84,  243 => 80,  237 => 78,  226 => 74,  222 => 72,  219 => 71,  217 => 70,  207 => 62,  205 => 61,  200 => 58,  192 => 56,  188 => 55,  177 => 53,  173 => 52,  170 => 51,  161 => 49,  157 => 48,  151 => 44,  148 => 42,  135 => 40,  131 => 39,  128 => 38,  122 => 31,  116 => 29,  110 => 27,  108 => 26,  104 => 25,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{{ title }}</title>
{% if robots %}
<meta name=\"robots\" content=\"{{ robots }}\" />
{% endif %}
<base href=\"{{ base }}\" />
{% if description %}
<meta name=\"description\" content=\"{{ description }}\" />
{% endif %}
{% if keywords %}
<meta name=\"keywords\" content=\"{{ keywords }}\" />
{% endif %}
<meta property=\"og:title\" content=\"{{ title }}\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"{{ og_url }}\" />
{% if og_image %}
<meta property=\"og:image\" content=\"{{ og_image }}\" />
{% else %}
<meta property=\"og:image\" content=\"{{ logo }}\" />
{% endif %}
<meta property=\"og:site_name\" content=\"{{ name }}\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
{# <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\"> #}

{% for style in styles %}
<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
{% endfor %}

{# STYLES #}
<link href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/drmyts/stylesheet/home.css\" rel=\"stylesheet\">


{% for script in scripts %}
<script src=\"{{ script }}\" type=\"text/javascript\"></script>
{% endfor %}

{% for link in links %}
<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\" />
{% endfor %}
{% for analytic in analytics %}
{{ analytic }}
{% endfor %}
</head>
<body>

{% import \"drmyts/template/macro/macros.twig\" as macros %}

<header class=\"header flex-col\">
    <div class=\"header__main-content rel border--end\">
        <div class=\"container header__container flex-row\">
            <button class=\"header__toggler btn flex-center icon hamburger\" type=\"button\" aria-label=\"Open Mobile menu\"><span class=\"d-block w-full rel\"></span></button>
            <div class=\"header-menu fixed w-full h-full header__menu\">
                <nav class=\"header-menu__inner h-full\">
                    <div class=\"header-menu__topbar flex-row j-between\">
                        {% if logo %}
                            {% if home == og_url %}
                                <div class=\"logo header-menu__logo\">
                                    <picture>      
                                        <img src=\"{{ logo }}\" title=\"{{ name}}\" alt=\"{{ name}}\" fetchpriority=\"high\" />
                                    </picture>
                                </div>
                            {% else %}
                                <a class=\"logo header-menu__logo\" href=\"{{ home }}\">
                                    <picture>
                                        <img src=\"{{ logo }}\" title=\"{{ name}}\" alt=\"{{ name}}\" fetchpriority=\"high\" />
                                    </picture>
                                </a>
                            {% endif %}
                        {% endif %}
                        <button class=\"btn header-menu__close rel icon\">
                            {{ macros.svg('сlose', '') }}
                        </button>
                    </div>
                    <ul class=\"header-menu__main flex-col\">
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Бренди
                                {{ macros.svg('arrow-right', '') }}
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Акції та знижки
                                {{ macros.svg('arrow-right', '') }}
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Улюблене Вероніки
                                {{ macros.svg('arrow-right', '') }}
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Обличчя
                                {{ macros.svg('arrow-right', '') }}
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Тіло
                                {{ macros.svg('arrow-right', '') }}
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Волосся
                                {{ macros.svg('arrow-right', '') }}
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Набори і подарунки
                                {{ macros.svg('arrow-right', '') }}
                            </a>
                        </li>
                    </ul>
                    <ul class=\"header-menu__secondary flex-col\">
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Про магазин</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Консультація</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Доставка та оплата</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Контакти</a></li>
                    </ul>
                    <ul class=\"header-menu__secondary flex-col\">
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Instagram</a></li>
                        <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\" target=\"_blank\" rel=\"noopener noreferrer\">Telegram</a></li>
                    </ul>
                    <div class=\"header-menu__footer\">
                        <ul class=\"header-menu__footer-list flex-col\">
                            <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Політика конфіденційності</a></li>
                            <li class=\"header-menu__item\"><a class=\"header-menu__link\" href=\"#\">Договір оферти</a></li>
                        </ul>
                        <div class=\"header-menu__copy\">
                            <p>&#169;2025 dr.Myts Shop. All rights reserved.</p>
                        </div>
                    </div>
                </nav>
            </div>
            <a class=\"header__icon-link icon icon--profile\" href=\"{{ account}}\" title=\"{{ text_account }}\">
                {{ macros.svg('user', '') }}
            </a>
            {% if logo %}
                {% if home == og_url %}
                    <div class=\"logo header__logo\">
                        <picture>      
                            <img src=\"{{ logo }}\" title=\"{{ name}}\" alt=\"{{ name}}\" fetchpriority=\"high\" />
                        </picture>
                    </div>
                {% else %}
                    <a class=\"logo header__logo\" href=\"{{ home }}\">
                        <picture>
                            <img src=\"{{ logo }}\" title=\"{{ name}}\" alt=\"{{ name}}\" fetchpriority=\"high\" />
                        </picture>
                    </a>
                {% endif %}
            {% endif %}
            <a class=\"header__icon-link icon rel icon--likes\" href=\"{{ wishlist }}\" title=\"{{ text_wishlist  }}\">
                {{ macros.svg('heart', '') }}
                {% if wishlist_total %}
                    <span class=\"icon__count flex-center\">{{ wishlist_total}}</span>
                {% endif %}
            </a>
            <button class=\"header__icon-link rel cart-btn btn\" type=\"button\" data-modal-open=\"cart\">
                <div class=\"icon cart-btn__icon rel\">
                    {{ macros.svg('shopping-bag', '') }}
                    {% if cart_total_items %}
                        <span class=\"icon__count flex-center\">{{ cart_total_items }}</span>
                    {% endif %}
                </div>
                {% if cart_total_price %}
                    <span class=\"cart-btn__sum d-none\">{{ cart_total_prices }}</span>
                {% endif %}
            </button>
        </div>
    </div>
    <div class=\"header__bottom\">
        <div class=\"container header__bottom-container\">
            <p class=\"header__slogan d-none m-0 text--color_gray\">100 % оригінальна продукція!</p>
            <ul class=\"header__menu d-none\">
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"about-shop.html\">Про магазин</a></li>
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"consult.html\">Консультація</a></li>
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"delivery-pay.html\">Доставка та оплата</a></li>
                <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Контакти</a></li>
            </ul>
            <form class=\"search-form header__search rel\" action=\"#\">
                <div class=\"search-form__header flex-row\">
                    <button class=\"btn flex-center search-form__close d-none search-form__back\" type=\"button\">
                        {{ macros.svg('arrow-back', '') }}
                    </button>
                    <div class=\"search-form__input custom-input custom-input--type_with-icon rel\">
                        <input class=\"custom-input__input\" name=\"search\" type=\"text\" placeholder=\"Пошук...\" autocomplete=\"off\" id=\"header-search\" />
                        <button class=\"btn flex-center icon custom-input__icon abs\" type=\"submit\">
                            {{ macros.svg('search', '') }}
                        </button>
                    </div>
                    <button class=\"btn flex-center search-form__close d-none search-form__cross\" type=\"button\">
                        {{ macros.svg('close', '') }}
                    </button>
                </div>
                <div class=\"live-search search-form__live-search abs d-none\">
                    <div class=\"live-search__content\">
                        <div class=\"live-search__history search-history d-none\">
                            <div class=\"search-history__heading flex-row j-between\">
                                <p class=\"search-history__title text--size_label text--color_gray\">Історія пошуку</p>
                                <button class=\"btn text--color_gray text--size_label search-history__clean-btn\" type=\"button\">Очистити історію</button>
                            </div>
                            <div class=\"search-history__items\">
                                <a class=\"search-text-item live-search__item flex-row j-between text--color_gray\" href=\"/\">
                                    <div class=\"search-text-item__search-icon icon\">
                                        {{ macros.svg('search', '') }}
                                    </div>
                                    <div class=\"search-text-item__text\">тонік</div>
                                    <div class=\"search-text-item__icon\">
                                        {{ macros.svg('arrow-next', '') }}
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between text--color_gray\" href=\"/\">
                                    <div class=\"search-text-item__search-icon icon\">
                                        {{ macros.svg('search', '') }}
                                    </div>
                                    <div class=\"search-text-item__text\">крем</div>
                                    <div class=\"search-text-item__icon\">
                                        {{ macros.svg('arrow-next', '') }}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"live-search__searching text--color_gray d-none\">Шукаємо...</div>
                        <div class=\"live-search__no-results text--color_gray d-none\">Результатів не знайдено</div>
                        <div class=\"live-search__results d-none\">
                            <div class=\"live-search__text-items\">
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\"><strong>тонік</strong></div>
                                    <div class=\"search-text-item__icon\">
                                        {{ macros.svg('arrow-next', '') }}
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        {{ macros.svg('arrow-next', '') }}
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        зволожуючий
                                        <strong>тонік</strong>
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        {{ macros.svg('arrow-next', '') }}
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        кислотою
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        {{ macros.svg('arrow-next', '') }}
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для обличчя
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        {{ macros.svg('arrow-next', '') }}
                                    </div>
                                </a>
                            </div>
                            <div class=\"live-search__products search-products\">
                                <div class=\"search-products__heading flex-row j-between\">
                                    <p class=\"text--size_h3-full search-products__title\">Продукти</p>
                                    <a class=\"btn flex-row text--upp search-products__view-all text--size_label\" href=\"/\">
                                        <span>Дивитися всі</span>
                                        {{ macros.svg('arrow-next', '') }}
                                    </a>
                                </div>
                                <div class=\"search-products__products d-grid\">
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-1.jpg\" alt=\"Comfort Zone\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Comfort Zone</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Comfort Zone</a>
                                                <span class=\"cart-item__type text--size_label\">Тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row\"><span class=\"product-price__full\">1 711,5 ₴</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-2.jpg\" alt=\"Cosmedix\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Cosmedix</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Cosmedix</a>
                                                <span class=\"cart-item__type text--size_label\">Відлущуючий тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row product-price--sale\">
                                                    <span class=\"product-price__full\">2 084 ₴</span>
                                                    <span class=\"product-price__sale\">1 711,5 ₴</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-3.jpg\" alt=\"Comfort Zone\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Comfort Zone</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Comfort Zone</a>
                                                <span class=\"cart-item__type text--size_label\">Заспокійливий тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row\"><span class=\"product-price__full\">2 039,13 ₴</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"cart-item live-search__product cart-item--type_search d-flex\">
                                        <div class=\"cart-item__img\">
                                            <picture><img class=\"contain-image\" src=\"./assets/pics/search-item-4.jpg\" alt=\"Comfort Zone\" loading=\"lazy\" width=\"56\" height=\"56\" /></picture>
                                            <a class=\"cart-item__link abs inset wh-full\" href=\"/\">Comfort Zone</a>
                                        </div>
                                        <div class=\"cart-item__content\">
                                            <div class=\"cart-item__details flex-col\">
                                                <span class=\"cart-item__availability text--color_gray text--size_label d-block\">В наявності</span>
                                                <a class=\"cart-item__title\" href=\"/\">Comfort Zone</a>
                                                <span class=\"cart-item__type text--size_label\">Бустер-тонік</span>
                                            </div>
                                            <div class=\"cart-item__footer\">
                                                <div class=\"product-price cart-item__price flex-row\"><span class=\"product-price__full\">2 330 ₴</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"header__mob-menu border--end\">
                <ul class=\"header__mob-list text--upp flex-row\">
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link active\" href=\"#\">Бренди</a></li>
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Акції та знижки</a></li>
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Улюблене Вероніки</a></li>
                    <li class=\"header__bottom-item\"><a class=\"header__bottom-link\" href=\"#\">Бренди</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{ menu }}
", "drmyts/template/common/header.twig", "");
    }
}
