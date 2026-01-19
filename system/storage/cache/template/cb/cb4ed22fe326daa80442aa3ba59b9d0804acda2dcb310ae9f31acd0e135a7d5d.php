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
class __TwigTemplate_5e654173a3a8594c504571279692c66d213794a76bae5552407f72cd20a302d4 extends \Twig\Template
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
        // line 109
        echo "
";
        // line 110
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/icons.twig", "drmyts/template/common/header.twig", 110)->unwrap();
        // line 111
        echo "
<header class=\"header flex-col\">
    <div class=\"header__main-content rel border--end\">
        <div class=\"container header__container flex-row\">
            <button class=\"header__toggler btn flex-center icon hamburger\" type=\"button\" aria-label=\"Open Mobile menu\"><span class=\"d-block w-full rel\"></span></button>
            <div class=\"header-menu fixed w-full h-full header__menu\">
                <nav class=\"header-menu__inner h-full\">
                    <div class=\"header-menu__topbar flex-row j-between\">
                        ";
        // line 119
        if (($context["logo"] ?? null)) {
            // line 120
            echo "                            ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 121
                echo "                                <div class=\"logo header-menu__logo\">
                                    <picture>      
                                        <img src=\"";
                // line 123
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
                // line 127
                echo "                                <a class=\"logo header-menu__logo\" href=\"";
                echo ($context["home"] ?? null);
                echo "\">
                                    <picture>
                                        <img src=\"";
                // line 129
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
            // line 133
            echo "                        ";
        }
        // line 134
        echo "                        <button class=\"btn header-menu__close rel icon\">
                            <svg role=\"presentation\">
                                <use href=\"catalog/view/theme/";
        // line 136
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#close\"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class=\"header-menu__main flex-col\">
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Бренди
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/";
        // line 145
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Акції та знижки
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/";
        // line 153
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Улюблене Вероніки
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/";
        // line 161
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Обличчя
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/";
        // line 169
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Тіло
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/";
        // line 177
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Волосся
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/";
        // line 185
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Набори і подарунки
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/";
        // line 193
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
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
            <a class=\"header__icon-link icon icon--profile\" href=\"account.html\">
                ";
        // line 220
        echo twig_call_macro($macros["macros"], "macro_svg", ["user", ""], 220, $context, $this->getSourceContext());
        echo "
            </a>
            ";
        // line 222
        if (($context["logo"] ?? null)) {
            // line 223
            echo "                ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 224
                echo "                    <div class=\"logo header__logo\">
                        <picture>      
                            <img src=\"";
                // line 226
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
                // line 230
                echo "                    <a class=\"logo header__logo\" href=\"";
                echo ($context["home"] ?? null);
                echo "\">
                        <picture>
                            <img src=\"";
                // line 232
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
            // line 236
            echo "            ";
        }
        // line 237
        echo "            <a class=\"header__icon-link icon rel icon--likes\" href=\"wishlist.html\">
                <svg role=\"presentation\">
                    <use href=\"catalog/view/theme/";
        // line 239
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#heart\"></use>
                </svg>
                <span class=\"icon__count flex-center\">2</span>
            </a>
            <button class=\"header__icon-link rel cart-btn btn\" type=\"button\" data-modal-open=\"cart\">
                <div class=\"icon cart-btn__icon rel\">
                    <svg role=\"presentation\">
                        <use href=\"catalog/view/theme/";
        // line 246
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#shopping-bag\"></use>
                    </svg>
                    <span class=\"icon__count flex-center\">1</span>
                </div>
                <span class=\"cart-btn__sum d-none\">440 ₴</span>
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
                        <svg role=\"presentation\">
                            <use href=\"catalog/view/theme/";
        // line 267
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-back\"></use>
                        </svg>
                    </button>
                    <div class=\"search-form__input custom-input custom-input--type_with-icon rel\">
                        <input class=\"custom-input__input\" name=\"search\" type=\"text\" placeholder=\"Пошук...\" autocomplete=\"off\" id=\"header-search\" />
                        <button class=\"btn flex-center icon custom-input__icon abs\" type=\"submit\">
                            <svg role=\"presentation\">
                                <use href=\"catalog/view/theme/";
        // line 274
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#search\"></use>
                            </svg>
                        </button>
                    </div>
                    <button class=\"btn flex-center search-form__close d-none search-form__cross\" type=\"button\">
                        <svg role=\"presentation\">
                            <use href=\"catalog/view/theme/";
        // line 280
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#close\"></use>
                        </svg>
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
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 295
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#search\"></use>
                                        </svg>
                                    </div>
                                    <div class=\"search-text-item__text\">тонік</div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 301
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between text--color_gray\" href=\"/\">
                                    <div class=\"search-text-item__search-icon icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 308
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#search\"></use>
                                        </svg>
                                    </div>
                                    <div class=\"search-text-item__text\">крем</div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 314
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
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
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 328
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 339
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        зволожуючий
                                        <strong>тонік</strong>
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 350
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        кислотою
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 361
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для обличчя
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 372
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class=\"live-search__products search-products\">
                                <div class=\"search-products__heading flex-row j-between\">
                                    <p class=\"text--size_h3-full search-products__title\">Продукти</p>
                                    <a class=\"btn flex-row text--upp search-products__view-all text--size_label\" href=\"/\">
                                        <span>Дивитися всі</span>
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/";
        // line 383
        echo ($context["theme_directory"] ?? null);
        echo "/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
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
        // line 472
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
        return array (  697 => 472,  605 => 383,  591 => 372,  577 => 361,  563 => 350,  549 => 339,  535 => 328,  518 => 314,  509 => 308,  499 => 301,  490 => 295,  472 => 280,  463 => 274,  453 => 267,  429 => 246,  419 => 239,  415 => 237,  412 => 236,  401 => 232,  395 => 230,  384 => 226,  380 => 224,  377 => 223,  375 => 222,  370 => 220,  340 => 193,  329 => 185,  318 => 177,  307 => 169,  296 => 161,  285 => 153,  274 => 145,  262 => 136,  258 => 134,  255 => 133,  244 => 129,  238 => 127,  227 => 123,  223 => 121,  220 => 120,  218 => 119,  208 => 111,  206 => 110,  203 => 109,  199 => 58,  191 => 56,  187 => 55,  176 => 53,  172 => 52,  169 => 51,  160 => 49,  156 => 48,  150 => 44,  147 => 42,  134 => 40,  130 => 39,  127 => 38,  122 => 31,  116 => 29,  110 => 27,  108 => 26,  104 => 25,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
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
{# <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
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
{# <nav id=\"top\">
  <div class=\"container\">{{ currency }}
    {{ language }}
\t{{ blog_menu }}
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"{{ contact }}\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">{{ telephone }}</span></li>
        <li class=\"dropdown\"><a href=\"{{ account }}\" title=\"{{ text_account }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">{{ text_account }}</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            {% if logged %}
            <li><a href=\"{{ account }}\">{{ text_account }}</a></li>
            <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
            <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li>
            <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
            <li><a href=\"{{ logout }}\">{{ text_logout }}</a></li>
            {% else %}
            <li><a href=\"{{ register }}\">{{ text_register }}</a></li>
            <li><a href=\"{{ login }}\">{{ text_login }}</a></li>
            {% endif %}
          </ul>
        </li>
        <li><a href=\"{{ wishlist }}\" id=\"wishlist-total\" title=\"{{ text_wishlist }}\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">{{ text_wishlist }}</span></a></li>
        <li><a href=\"{{ shopping_cart }}\" title=\"{{ text_shopping_cart }}\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">{{ text_shopping_cart }}</span></a></li>
        <li><a href=\"{{ checkout }}\" title=\"{{ text_checkout }}\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">{{ text_checkout }}</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
\t\t<div id=\"logo\">
          {% if logo %}
            {% if home == og_url %}
              <img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-responsive\" />
            {% else %}
              <a href=\"{{ home }}\"><img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-responsive\" /></a>
            {% endif %}
          {% else %}
            <h1><a href=\"{{ home }}\">{{ name }}</a></h1>
          {% endif %}
\t\t</div>
      </div>
      <div class=\"col-sm-5\">{{ search }}</div>
      <div class=\"col-sm-3\">{{ cart }}</div>
    </div>
  </div>
</header> #}

{% import \"drmyts/template/macro/icons.twig\" as macros %}

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
                            <svg role=\"presentation\">
                                <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#close\"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class=\"header-menu__main flex-col\">
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Бренди
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Акції та знижки
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Улюблене Вероніки
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Обличчя
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Тіло
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Волосся
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
                            </a>
                        </li>
                        <li class=\"header-menu__item-general\">
                            <a class=\"header-menu__arrow-link flex-row j-between\" href=\"#\">
                                Набори і подарунки
                                <svg role=\"presentation\">
                                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-right\"></use>
                                </svg>
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
            <a class=\"header__icon-link icon icon--profile\" href=\"account.html\">
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
            <a class=\"header__icon-link icon rel icon--likes\" href=\"wishlist.html\">
                <svg role=\"presentation\">
                    <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#heart\"></use>
                </svg>
                <span class=\"icon__count flex-center\">2</span>
            </a>
            <button class=\"header__icon-link rel cart-btn btn\" type=\"button\" data-modal-open=\"cart\">
                <div class=\"icon cart-btn__icon rel\">
                    <svg role=\"presentation\">
                        <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#shopping-bag\"></use>
                    </svg>
                    <span class=\"icon__count flex-center\">1</span>
                </div>
                <span class=\"cart-btn__sum d-none\">440 ₴</span>
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
                        <svg role=\"presentation\">
                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-back\"></use>
                        </svg>
                    </button>
                    <div class=\"search-form__input custom-input custom-input--type_with-icon rel\">
                        <input class=\"custom-input__input\" name=\"search\" type=\"text\" placeholder=\"Пошук...\" autocomplete=\"off\" id=\"header-search\" />
                        <button class=\"btn flex-center icon custom-input__icon abs\" type=\"submit\">
                            <svg role=\"presentation\">
                                <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#search\"></use>
                            </svg>
                        </button>
                    </div>
                    <button class=\"btn flex-center search-form__close d-none search-form__cross\" type=\"button\">
                        <svg role=\"presentation\">
                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#close\"></use>
                        </svg>
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
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#search\"></use>
                                        </svg>
                                    </div>
                                    <div class=\"search-text-item__text\">тонік</div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between text--color_gray\" href=\"/\">
                                    <div class=\"search-text-item__search-icon icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#search\"></use>
                                        </svg>
                                    </div>
                                    <div class=\"search-text-item__text\">крем</div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
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
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        зволожуючий
                                        <strong>тонік</strong>
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        кислотою
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                                <a class=\"search-text-item live-search__item flex-row j-between\" href=\"/\">
                                    <div class=\"search-text-item__text text--color_gray\">
                                        <strong>тонік</strong>
                                        для обличчя
                                    </div>
                                    <div class=\"search-text-item__icon\">
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class=\"live-search__products search-products\">
                                <div class=\"search-products__heading flex-row j-between\">
                                    <p class=\"text--size_h3-full search-products__title\">Продукти</p>
                                    <a class=\"btn flex-row text--upp search-products__view-all text--size_label\" href=\"/\">
                                        <span>Дивитися всі</span>
                                        <svg role=\"presentation\">
                                            <use href=\"catalog/view/theme/{{ theme_directory }}/assets/svg/sprite.svg#arrow-next\"></use>
                                        </svg>
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
