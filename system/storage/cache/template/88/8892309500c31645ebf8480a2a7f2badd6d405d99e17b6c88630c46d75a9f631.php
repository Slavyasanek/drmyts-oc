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
class __TwigTemplate_4634e0e29d43aa1bdf17d9673ddc22925a5e238434e90e1e072c51017c39d611 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("drmyts/template/macro/macros.twig", "drmyts/template/product/product.twig", 3)->unwrap();
        // line 4
        echo "
<main>
<article class=\"product-page\">
\t<div class=\"container product-page__container\">
\t\t<div class=\"breadcrumbs text--color_gray product-page__breadcrumbs\">

\t\t\t<div class=\"breadcrumbs__list flex-row\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t\t<a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</div>

\t\t</div>
\t\t";
        // line 18
        echo "\t\t";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 19
            echo "\t\t\t<div class=\"product-page__gallery product-gallery\">
\t\t\t\t<div class=\"splide product-gallery__main-gallery\">
\t\t\t\t\t<div class=\"splide__track\">

\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t";
            // line 24
            if (($context["thumb"] ?? null)) {
                // line 25
                echo "\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                // line 27
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"294\" height=\"294\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 31
            echo "
\t\t\t\t\t\t\t";
            // line 32
            if (($context["images"] ?? null)) {
                // line 33
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 36);
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
                // line 40
                echo "\t\t\t\t\t\t\t";
            }
            // line 41
            echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"product-gallery__footing flex-row j-center\">
\t\t\t\t\t<button class=\"btn splide__arrow slider__btn slider__btn--prev splide__arrow--prev flex-center product-gallery__arrow product-gallery__arrow--prev\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t";
            // line 49
            echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 49, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"splide product-gallery__thumbs slider\">
\t\t\t\t\t\t<div class=\"splide__track slider__track\">
\t\t\t\t\t\t\t<ul class=\"splide__list slider__list\">
\t\t\t\t\t\t\t\t";
            // line 55
            if (($context["thumb"] ?? null)) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                // line 58
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"60\" height=\"60\">
\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 66);
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
                // line 70
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn splide__arrow splide__arrow--next slider__btn slider__btn--next flex-center product-gallery__arrow product-gallery__arrow--next\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t";
            // line 77
            echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 77, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 83
        echo "
\t\t<div class=\"product-page__content\">
\t\t\t<div class=\"product-page__heading\">
\t\t\t\t<h1 class=\"product-page__title m-0\">";
        // line 86
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<p class=\"product-page__descr text--color_gray\">";
        // line 87
        echo ($context["model"] ?? null);
        echo "</p>
\t\t\t</div>

\t\t\t<div class=\"product-page__row flex-row j-between\">
\t\t\t\t";
        // line 91
        if (($context["special"] ?? null)) {
            // line 92
            echo "\t\t\t\t\t<div class=\"product-price product-page__price flex-row product-price--sale\">
\t\t\t\t\t\t<span class=\"product-price__full\">";
            // line 93
            echo ($context["price"] ?? null);
            echo "</span>
\t\t\t\t\t\t<span class=\"product-price__sale\">";
            // line 94
            echo ($context["special"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 97
            echo "\t\t\t\t\t<div class=\"product-price product-page__price flex-row\">
\t\t\t\t\t\t<span class=\"product-price__full\">";
            // line 98
            echo ($context["price"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t<div class=\"product-page__availability flex-row text--upp text--size_label product-page__icon-title\">
\t\t\t\t\t";
        // line 102
        echo twig_call_macro($macros["macros"], "macro_svg", ["check", ""], 102, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t<span>";
        // line 103
        echo ($context["stock"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-page__variants product-variants flex-col\">
\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 108
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 108) == "radio")) {
                // line 109
                echo "\t\t\t\t\t\t<div class=\"product-variants__options flex-row-wrap\">
\t\t\t\t\t\t\t<p class=\"product-variants__title\">";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 110);
                echo "</p>
\t\t\t\t\t\t\t";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 112);
                    echo "\" id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 112);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 112);
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"product-variants__label\" for=\"";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 113);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 113);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 113);
                    echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
\t\t\t\t";
        // line 131
        echo "\t\t\t</div>

\t\t\t\t<div class=\"product-page__btns d-grid\">
\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\" data-loading-text=\"";
        // line 134
        echo ($context["text_loading"] ?? null);
        echo "\" id=\"button-cart\">
\t\t\t\t\t\t";
        // line 135
        echo twig_call_macro($macros["macros"], "macro_svg", ["add-to-cart", ""], 135, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<span>";
        // line 136
        echo ($context["button_cart"] ?? null);
        echo "</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_dark text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">
\t\t\t\t\t\t";
        // line 140
        echo twig_call_macro($macros["macros"], "macro_svg", ["fast-buy", ""], 140, $context, $this->getSourceContext());
        echo "

\t\t\t\t\t\t<span>Швидка покупка</span>
\t\t\t\t\t</button>

\t\t\t\t</div>

\t\t\t\t<div class=\"product-page__help-links flex-row-wrap j-between\">
\t\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\" onclick=\"wishlist.add('";
        // line 148
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t";
        // line 149
        echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 149, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<span>Додати у вішліст</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
\t\t\t\t\t\t";
        // line 154
        echo twig_call_macro($macros["macros"], "macro_svg", ["need-help", ""], 154, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<span>Потрібна допомога?</span>
\t\t\t\t\t</button>

\t\t\t\t</div>

\t\t\t\t<div class=\"product-page__faq-list flex-col\">
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Для кого цей засіб</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
                                ";
        // line 165
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 165, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Як він працює</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t";
        // line 176
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 176, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t";
        // line 187
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 187, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t";
        // line 198
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 198, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Порада від Вероніки</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t";
        // line 209
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 209, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>“Я часто рекомендую цей бустер у протоколах освітлення шкіри, особливо після процедур або в сезон пігментації. Мʼякий, але дуже ефективний.”</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
        // line 217
        if (($context["review_status"] ?? null)) {
            // line 218
            echo "\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">

\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">

\t\t\t\t\t\t\t<div class=\"flex-row\">
\t\t\t\t\t\t\t\t<p>";
            // line 223
            echo ($context["reviews"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t<div class=\"product-rating product-page__rating flex-row\">
                                    ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 226
                echo "                                        ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 227
                    echo "                                            ";
                    echo twig_call_macro($macros["macros"], "macro_svg", ["empty-star", "product-rating__star--empty"], 227, $context, $this->getSourceContext());
                    echo "
                                        ";
                } else {
                    // line 229
                    echo "                                            ";
                    echo twig_call_macro($macros["macros"], "macro_svg", ["full-star", "product-rating__star"], 229, $context, $this->getSourceContext());
                    echo "
                                        ";
                }
                // line 231
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t";
            // line 235
            echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 235, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"accordion__content\">
                            ";
            // line 240
            if (($context["review_guest"] ?? null)) {
                // line 241
                echo "\t\t\t\t\t\t\t<div class=\"product-reviews product-page__reviews\">
\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\">
                                    ";
                // line 243
                echo twig_call_macro($macros["macros"], "macro_svg", ["leave-review", ""], 243, $context, $this->getSourceContext());
                echo "
\t\t\t\t\t\t\t\t\t<span>";
                // line 244
                echo ($context["text_write"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\"  id=\"form-review\">
\t\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">";
                // line 248
                echo ($context["entry_rating"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rating\" id=\"review-rating\" required>
                                            ";
                // line 251
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 252
                    echo "                                                ";
                    echo twig_call_macro($macros["macros"], "macro_ratingStar", [$context["i"]], 252, $context, $this->getSourceContext());
                    echo "
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"text\" placeholder=\"Відгук\" id=\"input-review\" required></textarea>
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">";
                // line 258
                echo ($context["error_required_field"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"name\" placeholder=\"";
                // line 262
                echo ($context["entry_name"] ?? null);
                echo "\" value=\"";
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" required><span class=\"custom-input__error d-none\">";
                echo ($context["error_required_field"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">";
                // line 265
                echo ($context["error_required_field"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    ";
                // line 268
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t<div class=\"review-form__photo photo-upload\">
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__wrapper rel\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
                                                ";
                // line 273
                echo twig_call_macro($macros["macros"], "macro_svg", ["plus", ""], 273, $context, $this->getSourceContext());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 274
                echo ($context["text_add_photo"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__disclaimer text--color_gray text--size_label\">";
                // line 277
                echo ($context["error_max_file"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__list flex-row-wrap\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__footing flex-col\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\"  id=\"button-review\" data-loading-text=\"";
                // line 281
                echo ($context["text_loading"] ?? null);
                echo "\">";
                echo ($context["text_publish_review"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">";
                // line 282
                echo ($context["text_close"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"product-reviews__list flex-col\" id=\"review\"></div>
\t\t\t\t\t\t\t</div>
                            ";
            } else {
                // line 289
                echo "                                ";
                echo ($context["text_login"] ?? null);
                echo "
                            ";
            }
            // line 291
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    ";
        }
        // line 294
        echo "\t\t\t\t</div>
                
\t\t\t\t<div class=\"quote-block bg--surface product-page__consult\">
\t\t\t\t\t<div class=\"quote-block__heading text--upp flex-row-wrap j-between\">
\t\t\t\t\t\t<div class=\"product-page__icon-title quote-block__title flex-row\">
                            ";
        // line 299
        echo twig_call_macro($macros["macros"], "macro_svg", ["warning", ""], 299, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t<span>Послуга експрес-консультації
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"quote-block__price\">500 ₴</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quote-block__content d-flex\">
                        ";
        // line 306
        echo twig_call_macro($macros["macros"], "macro_svg", ["quote", "quote-block__icon"], 306, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</article>
</main>
<template id=\"photoUploadTemplate\">
    <div class=\"photo-upload__file rel o-hid\">
        <picture><img class=\"cover-image\" src=\"\" alt=\"\" loading=\"lazy\" width=\"60\" height=\"60\" /></picture>
        <button class=\"photo-upload__delete btn flex-center icon abs\" type=\"button\">
            ";
        // line 319
        echo twig_call_macro($macros["macros"], "macro_svg", ["close", ""], 319, $context, $this->getSourceContext());
        echo "
        </button>
    </div>
</template>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

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
\t\t\t\t//beforeSend: function() {
\t\t\t\t\t//\$(node).button('loading');
\t\t\t\t//},
\t\t\t\t//complete: function() {
\t\t\t\t\t//\$(node).button('reset');
\t\t\t\t//},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
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
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 462
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 466
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
";
        // line 504
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
        return array (  834 => 504,  793 => 466,  786 => 462,  640 => 319,  624 => 306,  614 => 299,  607 => 294,  602 => 291,  596 => 289,  586 => 282,  580 => 281,  573 => 277,  567 => 274,  563 => 273,  555 => 268,  549 => 265,  539 => 262,  532 => 258,  526 => 254,  517 => 252,  513 => 251,  507 => 248,  500 => 244,  496 => 243,  492 => 241,  490 => 240,  482 => 235,  471 => 231,  465 => 229,  459 => 227,  456 => 226,  452 => 225,  447 => 223,  440 => 218,  438 => 217,  427 => 209,  413 => 198,  399 => 187,  385 => 176,  371 => 165,  357 => 154,  349 => 149,  345 => 148,  334 => 140,  327 => 136,  323 => 135,  319 => 134,  314 => 131,  311 => 119,  305 => 118,  301 => 116,  288 => 113,  277 => 112,  273 => 111,  269 => 110,  266 => 109,  263 => 108,  259 => 107,  252 => 103,  248 => 102,  245 => 101,  239 => 98,  236 => 97,  230 => 94,  226 => 93,  223 => 92,  221 => 91,  214 => 87,  210 => 86,  205 => 83,  196 => 77,  188 => 71,  185 => 70,  173 => 66,  169 => 64,  164 => 63,  161 => 62,  152 => 58,  148 => 56,  146 => 55,  137 => 49,  127 => 41,  124 => 40,  112 => 36,  108 => 34,  103 => 33,  101 => 32,  98 => 31,  89 => 27,  85 => 25,  83 => 24,  76 => 19,  73 => 18,  68 => 14,  57 => 12,  53 => 11,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

{% import \"drmyts/template/macro/macros.twig\" as macros %}

<main>
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
\t\t\t\t{% if special %}
\t\t\t\t\t<div class=\"product-price product-page__price flex-row product-price--sale\">
\t\t\t\t\t\t<span class=\"product-price__full\">{{ price }}</span>
\t\t\t\t\t\t<span class=\"product-price__sale\">{{ special }}</span>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"product-price product-page__price flex-row\">
\t\t\t\t\t\t<span class=\"product-price__full\">{{ price }}</span>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"product-page__availability flex-row text--upp text--size_label product-page__icon-title\">
\t\t\t\t\t{{ macros.svg('check', '') }}
\t\t\t\t\t<span>{{ stock }}</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-page__variants product-variants flex-col\">
\t\t\t\t{% for option in options %}
\t\t\t\t\t{% if option.type == 'radio' %}
\t\t\t\t\t\t<div class=\"product-variants__options flex-row-wrap\">
\t\t\t\t\t\t\t<p class=\"product-variants__title\">{{ option.name }}</p>
\t\t\t\t\t\t\t{% for option_value in option.product_option_value %}
\t\t\t\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"{{ option.name }}_{{ option_value.product_option_value_id }}\">
\t\t\t\t\t\t\t\t<label class=\"product-variants__label\" for=\"{{ option.name }}_{{ option_value.product_option_value_id }}\">{{ option_value.name }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}

\t\t\t\t{# <div class=\"product-variants__options flex-row-wrap product-variants__options--color\">
\t\t\t\t\t<p class=\"product-variants__title\">Колір:
\t\t\t\t\t\t<span class=\"product-variants__chosen\">Glow</span>
\t\t\t\t\t</p>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"dark_beige\" checked id=\"color_dark_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_dark_beige\" style=\"background: #D3AB88;\">Dark beige</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"light_beige\" checked id=\"color_light_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_light_beige\" style=\"background: #E9C6B7;\">Light Beige</label>
\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"warm_beige\" checked id=\"color_warm_beige\">
\t\t\t\t\t<label class=\"product-variants__color-label\" for=\"color_warm_beige\" style=\"background: #DA9E75;\">Warm Beige</label>
\t\t\t\t</div> #}
\t\t\t</div>

\t\t\t\t<div class=\"product-page__btns d-grid\">
\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\" data-loading-text=\"{{ text_loading }}\" id=\"button-cart\">
\t\t\t\t\t\t{{ macros.svg('add-to-cart', '') }}
\t\t\t\t\t\t<span>{{ button_cart }}</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_dark text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">
\t\t\t\t\t\t{{ macros.svg('fast-buy', '') }}

\t\t\t\t\t\t<span>Швидка покупка</span>
\t\t\t\t\t</button>

\t\t\t\t</div>

\t\t\t\t<div class=\"product-page__help-links flex-row-wrap j-between\">
\t\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\" onclick=\"wishlist.add('{{ product_id }}');\">
\t\t\t\t\t\t{{ macros.svg('heart', '') }}
\t\t\t\t\t\t<span>Додати у вішліст</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
\t\t\t\t\t\t{{ macros.svg('need-help', '') }}
\t\t\t\t\t\t<span>Потрібна допомога?</span>
\t\t\t\t\t</button>

\t\t\t\t</div>

\t\t\t\t<div class=\"product-page__faq-list flex-col\">
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Для кого цей засіб</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
                                {{ macros.svg('arrow-down', '') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Як він працює</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t{{ macros.svg('arrow-down', '') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t{{ macros.svg('arrow-down', '') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Ключові компоненти</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t{{ macros.svg('arrow-down', '') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>Як застосовувати</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
\t\t\t\t\t\t\t<p>Порада від Вероніки</p>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t{{ macros.svg('arrow-down', '') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>“Я часто рекомендую цей бустер у протоколах освітлення шкіри, особливо після процедур або в сезон пігментації. Мʼякий, але дуже ефективний.”</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    {% if review_status %}
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"false\">

\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">

\t\t\t\t\t\t\t<div class=\"flex-row\">
\t\t\t\t\t\t\t\t<p>{{ reviews }}</p>
\t\t\t\t\t\t\t\t<div class=\"product-rating product-page__rating flex-row\">
                                    {% for i in 1..5 %}
                                        {% if rating < i %}
                                            {{ macros.svg('empty-star', 'product-rating__star--empty') }}
                                        {% else %}
                                            {{ macros.svg('full-star', 'product-rating__star') }}
                                        {% endif %}
                                    {% endfor %} 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"icon icon--arrow accordion__icon\">
\t\t\t\t\t\t\t\t{{ macros.svg('arrow-down', '') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"accordion__content\">
                            {% if review_guest %}
\t\t\t\t\t\t\t<div class=\"product-reviews product-page__reviews\">
\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\">
                                    {{ macros.svg('leave-review', '') }}
\t\t\t\t\t\t\t\t\t<span>{{ text_write }}</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\"  id=\"form-review\">
\t\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">{{ entry_rating }}</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rating\" id=\"review-rating\" required>
                                            {% for i in 1..5 %}
                                                {{ macros.ratingStar(i) }}
                                            {% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"text\" placeholder=\"Відгук\" id=\"input-review\" required></textarea>
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">{{ error_required_field }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"name\" placeholder=\"{{ entry_name }}\" value=\"{{ customer_name }}\" id=\"input-name\" required><span class=\"custom-input__error d-none\">{{ error_required_field }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">{{ error_required_field }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    {{ captcha }}
\t\t\t\t\t\t\t\t\t<div class=\"review-form__photo photo-upload\">
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__wrapper rel\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
                                                {{ macros.svg('plus', '') }}
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ text_add_photo }}</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__disclaimer text--color_gray text--size_label\">{{ error_max_file }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__list flex-row-wrap\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__footing flex-col\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\"  id=\"button-review\" data-loading-text=\"{{ text_loading }}\">{{ text_publish_review }}</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">{{ text_close }}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"product-reviews__list flex-col\" id=\"review\"></div>
\t\t\t\t\t\t\t</div>
                            {% else %}
                                {{ text_login }}
                            {% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    {% endif %}
\t\t\t\t</div>
                
\t\t\t\t<div class=\"quote-block bg--surface product-page__consult\">
\t\t\t\t\t<div class=\"quote-block__heading text--upp flex-row-wrap j-between\">
\t\t\t\t\t\t<div class=\"product-page__icon-title quote-block__title flex-row\">
                            {{ macros.svg('warning', '') }}
\t\t\t\t\t\t\t<span>Послуга експрес-консультації
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"quote-block__price\">500 ₴</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quote-block__content d-flex\">
                        {{ macros.svg('quote', 'quote-block__icon') }}
\t\t\t\t\t\t<p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</article>
</main>
<template id=\"photoUploadTemplate\">
    <div class=\"photo-upload__file rel o-hid\">
        <picture><img class=\"cover-image\" src=\"\" alt=\"\" loading=\"lazy\" width=\"60\" height=\"60\" /></picture>
        <button class=\"photo-upload__delete btn flex-center icon abs\" type=\"button\">
            {{ macros.svg('close', '') }}
        </button>
    </div>
</template>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

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
\t\t\t\t//beforeSend: function() {
\t\t\t\t\t//\$(node).button('loading');
\t\t\t\t//},
\t\t\t\t//complete: function() {
\t\t\t\t\t//\$(node).button('reset');
\t\t\t\t//},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
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
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id={{ product_id }}',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
{{ footer }}
", "drmyts/template/product/product.twig", "");
    }
}
