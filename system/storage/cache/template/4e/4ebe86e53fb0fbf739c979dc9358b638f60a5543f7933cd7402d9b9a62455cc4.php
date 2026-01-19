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

/* drmyts/template/product/product.twig */
class __TwigTemplate_84281eb2d61baaf4f29849080ff293479273e8c93c4f8e72120dfa41c8431746 extends \Twig\Template
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


<article class=\"product-page\">
\t<div class=\"container product-page__container\">
\t\t<div class=\"breadcrumbs text--color_gray product-page__breadcrumbs\">

\t\t\t<div class=\"breadcrumbs__list flex-row\">
\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "\t\t\t\t\t<a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t</div>

\t\t</div>
\t\t";
        // line 16
        echo "\t\t";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 17
            echo "\t\t\t<div class=\"product-page__gallery product-gallery\">
\t\t\t\t<div class=\"splide product-gallery__main-gallery\">
\t\t\t\t\t<div class=\"splide__track\">

\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t";
            // line 22
            if (($context["thumb"] ?? null)) {
                // line 23
                echo "\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                // line 25
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"294\" height=\"294\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 29
            echo "
\t\t\t\t\t\t\t";
            // line 30
            if (($context["images"] ?? null)) {
                // line 31
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 34);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" loading=\"lazy\" width=\"294\" height=\"294\">
\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t\t\t";
            }
            // line 39
            echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"product-gallery__footing flex-row j-center\">
\t\t\t\t\t<button class=\"btn splide__arrow slider__btn slider__btn--prev splide__arrow--prev flex-center product-gallery__arrow product-gallery__arrow--prev\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t";
            // line 47
            echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "arrow-right", 1 => ""], "method", false, false, false, 47);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"splide product-gallery__thumbs slider\">
\t\t\t\t\t\t<div class=\"splide__track slider__track\">
\t\t\t\t\t\t\t<ul class=\"splide__list slider__list\">
\t\t\t\t\t\t\t\t";
            // line 53
            if (($context["thumb"] ?? null)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                // line 56
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"60\" height=\"60\">
\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 64);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" loading=\"lazy\" width=\"60\" height=\"60\">
\t\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn splide__arrow splide__arrow--next slider__btn slider__btn--next flex-center product-gallery__arrow product-gallery__arrow--next\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t";
            // line 75
            echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "arrow-right", 1 => ""], "method", false, false, false, 75);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 81
        echo "
\t\t<div class=\"product-page__content\">
\t\t\t<div class=\"product-page__heading\">
\t\t\t\t<h1 class=\"product-page__title m-0\">";
        // line 84
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<p class=\"product-page__descr text--color_gray\">";
        // line 85
        echo ($context["model"] ?? null);
        echo "</p>
\t\t\t</div>

\t\t\t<div class=\"product-page__row flex-row j-between\">
                ";
        // line 89
        if (($context["special"] ?? null)) {
            // line 90
            echo "    \t\t\t\t<div class=\"product-price product-page__price flex-row product-price--sale\">
    \t\t\t\t\t<span class=\"product-price__full\">";
            // line 91
            echo ($context["price"] ?? null);
            echo "</span>
    \t\t\t\t\t<span class=\"product-price__sale\">";
            // line 92
            echo ($context["special"] ?? null);
            echo "</span>
    \t\t\t\t</div>
                ";
        } else {
            // line 95
            echo "                    <div class=\"product-price product-page__price flex-row\">
    \t\t\t\t\t<span class=\"product-price__full\">";
            // line 96
            echo ($context["price"] ?? null);
            echo "</span>
    \t\t\t\t</div>
                ";
        }
        // line 99
        echo "\t\t\t\t<div class=\"product-page__availability flex-row text--upp text--size_label product-page__icon-title\">
                    ";
        // line 100
        echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "check", 1 => ""], "method", false, false, false, 100);
        echo "
\t\t\t\t\t<span>В наявності</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-page__variants product-variants flex-col\">
\t\t\t\t<div class=\"product-variants__options flex-row-wrap\">
\t\t\t\t\t<p class=\"product-variants__title\">Об&#39;єм</p>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"15 мл\" checked id=\"size_15ml\">
\t\t\t\t\t<label class=\"product-variants__label\" for=\"size_15ml\">15 мл
\t\t\t\t\t</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"60 мл\" checked id=\"size_60ml\">
\t\t\t\t\t<label class=\"product-variants__label\" for=\"size_60ml\">60 мл
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-variants__options flex-row-wrap\">
\t\t\t\t\t<p class=\"product-variants__title\">Тип фактору SPF</p>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"factor_type\" value=\"physics\" checked id=\"physics\">
\t\t\t\t\t<label class=\"product-variants__label\" for=\"physics\">Фізичні фільтри</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-variants__options flex-row-wrap product-variants__options--color\">
\t\t\t\t\t<p class=\"product-variants__title\">Колір:
\t\t\t\t\t\t<span class=\"product-variants__chosen\">Glow</span>
\t\t\t\t\t</p>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"dark_beige\" checked id=\"color_dark_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_dark_beige\" style=\"background: #D3AB88;\">Dark beige</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"light_beige\" checked id=\"color_light_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_light_beige\" style=\"background: #E9C6B7;\">Light Beige</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"warm_beige\" checked id=\"color_warm_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_warm_beige\" style=\"background: #DA9E75;\">Warm Beige</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-page__btns d-grid\">
\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">
\t\t\t\t\t";
        // line 133
        echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "add-to-cart", 1 => ""], "method", false, false, false, 133);
        echo "
\t\t\t\t\t<span>Додати до кошика</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_dark text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">
\t\t\t\t\t";
        // line 137
        echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "fast-buy", 1 => ""], "method", false, false, false, 137);
        echo "

\t\t\t\t\t<span>Швидка покупка</span>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"product-page__help-links flex-row-wrap j-between\">
\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\" onclick=\"wishlist.add('";
        // line 144
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t";
        // line 145
        echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "heart", 1 => ""], "method", false, false, false, 145);
        echo "
\t\t\t\t\t<span>Додати у вішліст</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
\t\t\t\t\t";
        // line 149
        echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "need-help", 1 => ""], "method", false, false, false, 149);
        echo "
\t\t\t\t\t<span>Потрібна допомога?</span>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"product-page__faq-list flex-col\">
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Для кого цей засіб</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Як він працює</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Порада від Вероніки</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>“Я часто рекомендую цей бустер у протоколах освітлення шкіри, особливо після процедур або в сезон пігментації. Мʼякий, але дуже ефективний.”</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"true\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<div class=\"flex-row\">
\t\t\t\t\t\t\t<p>2 відгуки</p>
\t\t\t\t\t\t\t<div class=\"product-rating product-page__rating flex-row\">
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star--empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<div class=\"product-reviews product-page__reviews\">
\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\">
\t\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#leave-review\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>Залишити відгук та оцінку</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\" method=\"POST\">
\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">Оцінка</span>
\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"review_rating\" id=\"review-rating\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\">
\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"review_content\" placeholder=\"Відгук\"></textarea>
\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"review_name\" placeholder=\"Ваше ім’я\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__photo photo-upload\">
\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__wrapper rel\">
\t\t\t\t\t\t\t\t\t\t<input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#plus\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tДодати фото</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__disclaimer text--color_gray text--size_label\">Максимальний розмір файлу 10 Mb</div>
\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__list flex-row-wrap\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__footing flex-col\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\">Опублікувати відгук</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">Закрити</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"product-reviews__list flex-col\">
\t\t\t\t\t\t\t\t<div class=\"product-review product-reviews__item bg--white\">
\t\t\t\t\t\t\t\t\t<div class=\"product-review__heading flex-row-wrap j-between\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__author\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-review__name\">Вікторія</p>
\t\t\t\t\t\t\t\t\t\t\t<date class=\"product-review__date text--color_gray text--size_label\">4 квітня 2025</date>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star--empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-rating__val\">4.0</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-review__content\">
\t\t\t\t\t\t\t\t\t\t<p>Користуюсь вперше, ефект получила вже після першої процедури, шкіра гладенька, ефект ліфтингу, рівний тон. Дуже сподобалось</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-review product-reviews__item bg--white\">
\t\t\t\t\t\t\t\t\t<div class=\"product-review__imgs flex-row-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__img o-hid\">
\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"cover-image\" src=\"./assets/pics/product-review.png\" alt=\"\" loading=\"lazy\"></picture>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-review__heading flex-row-wrap j-between\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__author\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-review__name\">Наталія</p>
\t\t\t\t\t\t\t\t\t\t\t<date class=\"product-review__date text--color_gray text--size_label\">1 лютого 2025</date>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-rating__val\">5.0</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-review__content\">
\t\t\t\t\t\t\t\t\t\t<p>Чудовий засіб! Задоволена на всі сто. Результат з першого разу - зволожена і підтягнута шкіра, звужені пори. Дякую 🤩</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"quote-block bg--surface product-page__consult\">
\t\t\t\t<div class=\"quote-block__heading text--upp flex-row-wrap j-between\">
\t\t\t\t\t<div class=\"product-page__icon-title quote-block__title flex-row\">
\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#warning\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span>Послуга експрес-консультації
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"quote-block__price\">500 ₴</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"quote-block__content d-flex\">
\t\t\t\t\t<svg class=\"quote-block__icon\" role=\"presentation\">
\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#quote\"></use>
\t\t\t\t\t</svg>
\t\t\t\t\t<p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
\t\t\t</div>
\t\t</div>
\t</div>
</article>


<script
\ttype=\"text/javascript\">
\t<!--
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\$.ajax({
url: 'index.php?route=product/product/getRecurringDescription',
type: 'post',
data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
dataType: 'json',
beforeSend: function () {
\$('#recurring-description').html('');
},
success: function (json) {
\$('.alert-dismissible, .text-danger').remove();

if (json['success']) {
\$('#recurring-description').html(json['success']);
}
}
});
});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#button-cart').on('click', function () {
\$.ajax({
url: 'index.php?route=checkout/cart/add',
type: 'post',
data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
dataType: 'json',
beforeSend: function () {
\$('#button-cart').button('loading');
},
complete: function () {
\$('#button-cart').button('reset');
},
success: function (json) {
\$('.alert-dismissible, .text-danger').remove();
\$('.form-group').removeClass('has-error');

if (json['error']) {
if (json['error']['option']) {
for (i in json['error']['option']) {
var element = \$('#input-option' + i.replace('_', '-'));

if (element.parent().hasClass('input-group')) {
element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
} else {
element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
}
}
}

if (json['error']['recurring']) {
\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
}

// Highlight any found errors
\$('.text-danger').parent().addClass('has-error');
}

if (json['success']) {
\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\$('html, body').animate({
scrollTop: 0
}, 'slow');

\$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 511
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 513
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 515
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});

\$('button[id^=\\'button-upload\\']').on('click', function () {
var node = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
if (\$('#form-upload input[name=\\'file\\']').val() != '') {
clearInterval(timer);

\$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData(\$('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function () {
\$(node).button('loading');
},
complete: function () {
\$(node).button('reset');
},
success: function (json) {
\$('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(node).parent().find('input').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id= ";
        // line 582
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id= ";
        // line 586
        echo ($context["product_id"] ?? null);
        echo "',
type: 'post',
dataType: 'json',
data: \$(\"#form-review\").serialize(),
beforeSend: function () {
\$('#button-review').button('loading');
},
complete: function () {
\$('#button-review').button('reset');
},
success: function (json) {
\$('.alert-dismissible').remove();

if (json['error']) {
\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
}

if (json['success']) {
\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\$('input[name=\\'name\\']').val('');
\$('textarea[name=\\'text\\']').val('');
\$('input[name=\\'rating\\']:checked').prop('checked', false);
}
}
});
});

\$(document).ready(function () {
\$('.thumbnails').magnificPopup({
type: 'image',
delegate: 'a',
gallery: {
enabled: true
}
});
});
//--></script>
";
        // line 624
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 624,  759 => 586,  752 => 582,  682 => 515,  677 => 513,  672 => 511,  307 => 149,  300 => 145,  296 => 144,  286 => 137,  279 => 133,  243 => 100,  240 => 99,  234 => 96,  231 => 95,  225 => 92,  221 => 91,  218 => 90,  216 => 89,  209 => 85,  205 => 84,  200 => 81,  191 => 75,  183 => 69,  180 => 68,  168 => 64,  164 => 62,  159 => 61,  156 => 60,  147 => 56,  143 => 54,  141 => 53,  132 => 47,  122 => 39,  119 => 38,  107 => 34,  103 => 32,  98 => 31,  96 => 30,  93 => 29,  84 => 25,  80 => 23,  78 => 22,  71 => 17,  68 => 16,  63 => 12,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}


<article class=\"product-page\">
\t<div class=\"container product-page__container\">
\t\t<div class=\"breadcrumbs text--color_gray product-page__breadcrumbs\">

\t\t\t<div class=\"breadcrumbs__list flex-row\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t<a class=\"breadcrumbs__item\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t</div>
\t\t{# breadcrumbs #}
\t\t{% if thumb or images %}
\t\t\t<div class=\"product-page__gallery product-gallery\">
\t\t\t\t<div class=\"splide product-gallery__main-gallery\">
\t\t\t\t\t<div class=\"splide__track\">

\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t{% if thumb %}
\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"{{ thumb}}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"294\" height=\"294\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if images %}
\t\t\t\t\t\t\t\t{% for image in images %}
\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"{{ image.thumb }}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"294\" height=\"294\">
\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"product-gallery__footing flex-row j-center\">
\t\t\t\t\t<button class=\"btn splide__arrow slider__btn slider__btn--prev splide__arrow--prev flex-center product-gallery__arrow product-gallery__arrow--prev\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t{{ macros.svg('arrow-right', '') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"splide product-gallery__thumbs slider\">
\t\t\t\t\t\t<div class=\"splide__track slider__track\">
\t\t\t\t\t\t\t<ul class=\"splide__list slider__list\">
\t\t\t\t\t\t\t\t{% if thumb %}
\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"{{ thumb }}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"60\" height=\"60\">
\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if images %}
\t\t\t\t\t\t\t\t\t{% for image in images %}
\t\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"{{ image.thumb }}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"60\" height=\"60\">
\t\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn splide__arrow splide__arrow--next slider__btn slider__btn--next flex-center product-gallery__arrow product-gallery__arrow--next\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t{{ macros.svg('arrow-right', '') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t\t<div class=\"product-page__content\">
\t\t\t<div class=\"product-page__heading\">
\t\t\t\t<h1 class=\"product-page__title m-0\">{{ heading_title }}</h1>
\t\t\t\t<p class=\"product-page__descr text--color_gray\">{{ model }}</p>
\t\t\t</div>

\t\t\t<div class=\"product-page__row flex-row j-between\">
                {% if special %}
    \t\t\t\t<div class=\"product-price product-page__price flex-row product-price--sale\">
    \t\t\t\t\t<span class=\"product-price__full\">{{ price }}</span>
    \t\t\t\t\t<span class=\"product-price__sale\">{{ special }}</span>
    \t\t\t\t</div>
                {% else %}
                    <div class=\"product-price product-page__price flex-row\">
    \t\t\t\t\t<span class=\"product-price__full\">{{ price }}</span>
    \t\t\t\t</div>
                {% endif %}
\t\t\t\t<div class=\"product-page__availability flex-row text--upp text--size_label product-page__icon-title\">
                    {{ macros.svg('check', '') }}
\t\t\t\t\t<span>В наявності</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-page__variants product-variants flex-col\">
\t\t\t\t<div class=\"product-variants__options flex-row-wrap\">
\t\t\t\t\t<p class=\"product-variants__title\">Об&#39;єм</p>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"15 мл\" checked id=\"size_15ml\">
\t\t\t\t\t<label class=\"product-variants__label\" for=\"size_15ml\">15 мл
\t\t\t\t\t</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"60 мл\" checked id=\"size_60ml\">
\t\t\t\t\t<label class=\"product-variants__label\" for=\"size_60ml\">60 мл
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-variants__options flex-row-wrap\">
\t\t\t\t\t<p class=\"product-variants__title\">Тип фактору SPF</p>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"factor_type\" value=\"physics\" checked id=\"physics\">
\t\t\t\t\t<label class=\"product-variants__label\" for=\"physics\">Фізичні фільтри</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-variants__options flex-row-wrap product-variants__options--color\">
\t\t\t\t\t<p class=\"product-variants__title\">Колір:
\t\t\t\t\t\t<span class=\"product-variants__chosen\">Glow</span>
\t\t\t\t\t</p>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"dark_beige\" checked id=\"color_dark_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_dark_beige\" style=\"background: #D3AB88;\">Dark beige</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"light_beige\" checked id=\"color_light_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_light_beige\" style=\"background: #E9C6B7;\">Light Beige</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"warm_beige\" checked id=\"color_warm_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_warm_beige\" style=\"background: #DA9E75;\">Warm Beige</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-page__btns d-grid\">
\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">
\t\t\t\t\t{{ macros.svg('add-to-cart', '') }}
\t\t\t\t\t<span>Додати до кошика</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_dark text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">
\t\t\t\t\t{{ macros.svg('fast-buy', '') }}

\t\t\t\t\t<span>Швидка покупка</span>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"product-page__help-links flex-row-wrap j-between\">
\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\" onclick=\"wishlist.add('{{ product_id }}');\">
\t\t\t\t\t{{ macros.svg('heart', '') }}
\t\t\t\t\t<span>Додати у вішліст</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
\t\t\t\t\t{{ macros.svg('need-help', '') }}
\t\t\t\t\t<span>Потрібна допомога?</span>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"product-page__faq-list flex-col\">
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Для кого цей засіб</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Як він працює</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<p>Порада від Вероніки</p>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<p>“Я часто рекомендую цей бустер у протоколах освітлення шкіри, особливо після процедур або в сезон пігментації. Мʼякий, але дуже ефективний.”</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"true\">
\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t<div class=\"flex-row\">
\t\t\t\t\t\t\t<p>2 відгуки</p>
\t\t\t\t\t\t\t<div class=\"product-rating product-page__rating flex-row\">
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"product-rating__star--empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t<div class=\"product-reviews product-page__reviews\">
\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\">
\t\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#leave-review\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>Залишити відгук та оцінку</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\" method=\"POST\">
\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">Оцінка</span>
\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"review_rating\" id=\"review-rating\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\">
\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"review_content\" placeholder=\"Відгук\"></textarea>
\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"review_name\" placeholder=\"Ваше ім’я\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__photo photo-upload\">
\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__wrapper rel\">
\t\t\t\t\t\t\t\t\t\t<input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#plus\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tДодати фото</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__disclaimer text--color_gray text--size_label\">Максимальний розмір файлу 10 Mb</div>
\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__list flex-row-wrap\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-form__footing flex-col\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\">Опублікувати відгук</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">Закрити</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"product-reviews__list flex-col\">
\t\t\t\t\t\t\t\t<div class=\"product-review product-reviews__item bg--white\">
\t\t\t\t\t\t\t\t\t<div class=\"product-review__heading flex-row-wrap j-between\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__author\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-review__name\">Вікторія</p>
\t\t\t\t\t\t\t\t\t\t\t<date class=\"product-review__date text--color_gray text--size_label\">4 квітня 2025</date>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star--empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-rating__val\">4.0</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-review__content\">
\t\t\t\t\t\t\t\t\t\t<p>Користуюсь вперше, ефект получила вже після першої процедури, шкіра гладенька, ефект ліфтингу, рівний тон. Дуже сподобалось</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-review product-reviews__item bg--white\">
\t\t\t\t\t\t\t\t\t<div class=\"product-review__imgs flex-row-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__img o-hid\">
\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"cover-image\" src=\"./assets/pics/product-review.png\" alt=\"\" loading=\"lazy\"></picture>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-review__heading flex-row-wrap j-between\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__author\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-review__name\">Наталія</p>
\t\t\t\t\t\t\t\t\t\t\t<date class=\"product-review__date text--color_gray text--size_label\">1 лютого 2025</date>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"product-rating__star\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-rating__val\">5.0</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-review__content\">
\t\t\t\t\t\t\t\t\t\t<p>Чудовий засіб! Задоволена на всі сто. Результат з першого разу - зволожена і підтягнута шкіра, звужені пори. Дякую 🤩</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"quote-block bg--surface product-page__consult\">
\t\t\t\t<div class=\"quote-block__heading text--upp flex-row-wrap j-between\">
\t\t\t\t\t<div class=\"product-page__icon-title quote-block__title flex-row\">
\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#warning\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span>Послуга експрес-консультації
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"quote-block__price\">500 ₴</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"quote-block__content d-flex\">
\t\t\t\t\t<svg class=\"quote-block__icon\" role=\"presentation\">
\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#quote\"></use>
\t\t\t\t\t</svg>
\t\t\t\t\t<p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
\t\t\t</div>
\t\t</div>
\t</div>
</article>


<script
\ttype=\"text/javascript\">
\t<!--
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\$.ajax({
url: 'index.php?route=product/product/getRecurringDescription',
type: 'post',
data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
dataType: 'json',
beforeSend: function () {
\$('#recurring-description').html('');
},
success: function (json) {
\$('.alert-dismissible, .text-danger').remove();

if (json['success']) {
\$('#recurring-description').html(json['success']);
}
}
});
});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#button-cart').on('click', function () {
\$.ajax({
url: 'index.php?route=checkout/cart/add',
type: 'post',
data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
dataType: 'json',
beforeSend: function () {
\$('#button-cart').button('loading');
},
complete: function () {
\$('#button-cart').button('reset');
},
success: function (json) {
\$('.alert-dismissible, .text-danger').remove();
\$('.form-group').removeClass('has-error');

if (json['error']) {
if (json['error']['option']) {
for (i in json['error']['option']) {
var element = \$('#input-option' + i.replace('_', '-'));

if (element.parent().hasClass('input-group')) {
element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
} else {
element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
}
}
}

if (json['error']['recurring']) {
\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
}

// Highlight any found errors
\$('.text-danger').parent().addClass('has-error');
}

if (json['success']) {
\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\$('html, body').animate({
scrollTop: 0
}, 'slow');

\$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '{{ datepicker }}', pickTime: false});

\$('.datetime').datetimepicker({language: '{{ datepicker }}', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '{{ datepicker }}', pickDate: false});

\$('button[id^=\\'button-upload\\']').on('click', function () {
var node = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
if (\$('#form-upload input[name=\\'file\\']').val() != '') {
clearInterval(timer);

\$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData(\$('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function () {
\$(node).button('loading');
},
complete: function () {
\$(node).button('reset');
},
success: function (json) {
\$('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(node).parent().find('input').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
//--></script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id= {{ product_id }}');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id= {{ product_id }}',
type: 'post',
dataType: 'json',
data: \$(\"#form-review\").serialize(),
beforeSend: function () {
\$('#button-review').button('loading');
},
complete: function () {
\$('#button-review').button('reset');
},
success: function (json) {
\$('.alert-dismissible').remove();

if (json['error']) {
\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
}

if (json['success']) {
\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\$('input[name=\\'name\\']').val('');
\$('textarea[name=\\'text\\']').val('');
\$('input[name=\\'rating\\']:checked').prop('checked', false);
}
}
});
});

\$(document).ready(function () {
\$('.thumbnails').magnificPopup({
type: 'image',
delegate: 'a',
gallery: {
enabled: true
}
});
});
//--></script>
{{ footer }}
", "drmyts/template/product/product.twig", "");
    }
}
