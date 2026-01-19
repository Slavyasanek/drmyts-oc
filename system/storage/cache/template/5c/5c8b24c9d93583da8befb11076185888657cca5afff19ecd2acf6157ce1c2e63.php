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
class __TwigTemplate_0eb704540a6eb42a8324115c692a4afb70b82a02c4ea43d959a8ba9b65894fc4 extends \Twig\Template
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
<article class=\"product-page\">
\t<div class=\"container product-page__container\">
\t\t<div class=\"breadcrumbs text--color_gray product-page__breadcrumbs\">

\t\t\t<div class=\"breadcrumbs__list flex-row\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t\t<a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</div>

\t\t</div>
\t\t";
        // line 17
        echo "\t\t";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 18
            echo "\t\t\t<div class=\"product-page__gallery product-gallery\">
\t\t\t\t<div class=\"splide product-gallery__main-gallery\">
\t\t\t\t\t<div class=\"splide__track\">

\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t";
            // line 23
            if (($context["thumb"] ?? null)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                // line 26
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"294\" height=\"294\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "
\t\t\t\t\t\t\t";
            // line 31
            if (($context["images"] ?? null)) {
                // line 32
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 35);
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
                // line 39
                echo "\t\t\t\t\t\t\t";
            }
            // line 40
            echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"product-gallery__footing flex-row j-center\">
\t\t\t\t\t<button class=\"btn splide__arrow slider__btn slider__btn--prev splide__arrow--prev flex-center product-gallery__arrow product-gallery__arrow--prev\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t";
            // line 48
            echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 48, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"splide product-gallery__thumbs slider\">
\t\t\t\t\t\t<div class=\"splide__track slider__track\">
\t\t\t\t\t\t\t<ul class=\"splide__list slider__list\">
\t\t\t\t\t\t\t\t";
            // line 54
            if (($context["thumb"] ?? null)) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                // line 57
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"60\" height=\"60\">
\t\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\"splide__slide product-gallery__thumb-slide bg--white\">
\t\t\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contain-image\" src=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 65);
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
                // line 69
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn splide__arrow splide__arrow--next slider__btn slider__btn--next flex-center product-gallery__arrow product-gallery__arrow--next\">
\t\t\t\t\t\t<div class=\"slider__arrow-icon icon\">
\t\t\t\t\t\t\t";
            // line 76
            echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-right", ""], 76, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 82
        echo "
\t\t<div class=\"product-page__content\">
\t\t\t<div class=\"product-page__heading\">
\t\t\t\t<h1 class=\"product-page__title m-0\">";
        // line 85
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<p class=\"product-page__descr text--color_gray\">";
        // line 86
        echo ($context["model"] ?? null);
        echo "</p>
\t\t\t</div>

\t\t\t<div class=\"product-page__row flex-row j-between\">
\t\t\t\t";
        // line 90
        if (($context["special"] ?? null)) {
            // line 91
            echo "\t\t\t\t\t<div class=\"product-price product-page__price flex-row product-price--sale\">
\t\t\t\t\t\t<span class=\"product-price__full\">";
            // line 92
            echo ($context["price"] ?? null);
            echo "</span>
\t\t\t\t\t\t<span class=\"product-price__sale\">";
            // line 93
            echo ($context["special"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t<div class=\"product-price product-page__price flex-row\">
\t\t\t\t\t\t<span class=\"product-price__full\">";
            // line 97
            echo ($context["price"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t<div class=\"product-page__availability flex-row text--upp text--size_label product-page__icon-title\">
\t\t\t\t\t";
        // line 101
        echo twig_call_macro($macros["macros"], "macro_svg", ["check", ""], 101, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t<span>";
        // line 102
        echo ($context["stock"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-page__variants product-variants flex-col\">
\t\t\t\t";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 107
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 107) == "radio")) {
                // line 108
                echo "\t\t\t\t\t\t<div class=\"product-variants__options flex-row-wrap\">
\t\t\t\t\t\t\t<p class=\"product-variants__title\">";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 109);
                echo "</p>
\t\t\t\t\t\t\t";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t<input class=\"product-vairants__option anim\" type=\"radio\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 111);
                    echo "\" id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 111);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 111);
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"product-variants__label\" for=\"";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 112);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 112);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 112);
                    echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
\t\t\t\t";
        // line 130
        echo "\t\t\t</div>

\t\t\t\t<div class=\"product-page__btns d-grid\">
\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\" data-loading-text=\"";
        // line 133
        echo ($context["text_loading"] ?? null);
        echo "\" id=\"button-cart\">
\t\t\t\t\t\t";
        // line 134
        echo twig_call_macro($macros["macros"], "macro_svg", ["add-to-cart", ""], 134, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<span>";
        // line 135
        echo ($context["button_cart"] ?? null);
        echo "</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_dark text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">
\t\t\t\t\t\t";
        // line 139
        echo twig_call_macro($macros["macros"], "macro_svg", ["fast-buy", ""], 139, $context, $this->getSourceContext());
        echo "

\t\t\t\t\t\t<span>Швидка покупка</span>
\t\t\t\t\t</button>

\t\t\t\t</div>

\t\t\t\t<div class=\"product-page__help-links flex-row-wrap j-between\">
\t\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\" onclick=\"wishlist.add('";
        // line 147
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t";
        // line 148
        echo twig_call_macro($macros["macros"], "macro_svg", ["heart", ""], 148, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<span>Додати у вішліст</span>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
\t\t\t\t\t\t";
        // line 153
        echo twig_call_macro($macros["macros"], "macro_svg", ["need-help", ""], 153, $context, $this->getSourceContext());
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
        // line 164
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 164, $context, $this->getSourceContext());
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
        // line 175
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 175, $context, $this->getSourceContext());
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
        // line 186
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 186, $context, $this->getSourceContext());
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
        // line 197
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 197, $context, $this->getSourceContext());
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
        // line 208
        echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 208, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<p>“Я часто рекомендую цей бустер у протоколах освітлення шкіри, особливо після процедур або в сезон пігментації. Мʼякий, але дуже ефективний.”</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
        // line 216
        if (($context["review_status"] ?? null)) {
            // line 217
            echo "\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"true\">

\t\t\t\t\t\t<div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">

\t\t\t\t\t\t\t<div class=\"flex-row\">
\t\t\t\t\t\t\t\t<p>";
            // line 222
            echo ($context["reviews"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t<div class=\"product-rating product-page__rating flex-row\">
                                    ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 225
                echo "                                        ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 226
                    echo "                                            ";
                    echo twig_call_macro($macros["macros"], "macro_svg", ["empty-star", "product-rating__star--empty"], 226, $context, $this->getSourceContext());
                    echo "
                                        ";
                } else {
                    // line 228
                    echo "                                            ";
                    echo twig_call_macro($macros["macros"], "macro_svg", ["full-star", "product-rating__star"], 228, $context, $this->getSourceContext());
                    echo "
                                        ";
                }
                // line 230
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
            // line 234
            echo twig_call_macro($macros["macros"], "macro_svg", ["arrow-down", ""], 234, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t<div class=\"product-reviews product-page__reviews\">
\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\">
                                    ";
            // line 241
            echo twig_call_macro($macros["macros"], "macro_svg", ["leave-review", ""], 241, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t\t\t\t<span>";
            // line 242
            echo ($context["text_write"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\"  id=\"form-review\">
\t\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">";
            // line 246
            echo ($context["entry_rating"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rating\" id=\"review-rating\">
                                            ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 250
                echo "                                                ";
                echo twig_call_macro($macros["macros"], "macro_ratingStar", [$context["i"]], 250, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"text\" placeholder=\"Відгук\" id=\"input-review\"></textarea>
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"name\" placeholder=\"";
            // line 301
            echo ($context["entry_name"] ?? null);
            echo "\" value=\"";
            echo ($context["customer_name"] ?? null);
            echo "\" id=\"input-name\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__photo photo-upload\">
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__wrapper rel\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#plus\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\tДодати фото</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__disclaimer text--color_gray text--size_label\">Максимальний розмір файлу 10 Mb</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__list flex-row-wrap\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__footing flex-col\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\">Опублікувати відгук</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">Закрити</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"product-reviews__list flex-col\" id=\"review\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    ";
        }
        // line 332
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"quote-block bg--surface product-page__consult\">
\t\t\t\t\t<div class=\"quote-block__heading text--upp flex-row-wrap j-between\">
\t\t\t\t\t\t<div class=\"product-page__icon-title quote-block__title flex-row\">
                            ";
        // line 336
        echo twig_call_macro($macros["macros"], "macro_svg", ["warning", ""], 336, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t<span>Послуга експрес-консультації
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"quote-block__price\">500 ₴</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quote-block__content d-flex\">
                        ";
        // line 343
        echo twig_call_macro($macros["macros"], "macro_svg", ["quote", "quote-block__icon"], 343, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t<p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</article>

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
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
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
        // line 491
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 495
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
        // line 533
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
        return array (  823 => 533,  782 => 495,  775 => 491,  624 => 343,  614 => 336,  608 => 332,  572 => 301,  521 => 252,  512 => 250,  508 => 249,  502 => 246,  495 => 242,  491 => 241,  481 => 234,  470 => 230,  464 => 228,  458 => 226,  455 => 225,  451 => 224,  446 => 222,  439 => 217,  437 => 216,  426 => 208,  412 => 197,  398 => 186,  384 => 175,  370 => 164,  356 => 153,  348 => 148,  344 => 147,  333 => 139,  326 => 135,  322 => 134,  318 => 133,  313 => 130,  310 => 118,  304 => 117,  300 => 115,  287 => 112,  276 => 111,  272 => 110,  268 => 109,  265 => 108,  262 => 107,  258 => 106,  251 => 102,  247 => 101,  244 => 100,  238 => 97,  235 => 96,  229 => 93,  225 => 92,  222 => 91,  220 => 90,  213 => 86,  209 => 85,  204 => 82,  195 => 76,  187 => 70,  184 => 69,  172 => 65,  168 => 63,  163 => 62,  160 => 61,  151 => 57,  147 => 55,  145 => 54,  136 => 48,  126 => 40,  123 => 39,  111 => 35,  107 => 33,  102 => 32,  100 => 31,  97 => 30,  88 => 26,  84 => 24,  82 => 23,  75 => 18,  72 => 17,  67 => 13,  56 => 11,  52 => 10,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

{% import \"drmyts/template/macro/macros.twig\" as macros %}

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
\t\t\t\t\t<div class=\"accordion product-page__faq\" aria-expanded=\"true\">

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
\t\t\t\t\t\t\t<div class=\"product-reviews product-page__reviews\">
\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\">
                                    {{ macros.svg('leave-review', '') }}
\t\t\t\t\t\t\t\t\t<span>{{ text_write }}</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\"  id=\"form-review\">
\t\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">{{ entry_rating }}</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rating\" id=\"review-rating\">
                                            {% for i in 1..5 %}
                                                {{ macros.ratingStar(i) }}
                                            {% endfor %}

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating__star\" data-rating=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-empty\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#empty-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"form-rating__star-full d-none\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#full-star\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"text\" placeholder=\"Відгук\" id=\"input-review\"></textarea>
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"name\" placeholder=\"{{ entry_name }}\" value=\"{{ customer_name }}\" id=\"input-name\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__photo photo-upload\">
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__wrapper rel\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#plus\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\tДодати фото</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__disclaimer text--color_gray text--size_label\">Максимальний розмір файлу 10 Mb</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"photo-upload__list flex-row-wrap\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__footing flex-col\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\">Опублікувати відгук</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">Закрити</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"product-reviews__list flex-col\" id=\"review\"></div>
\t\t\t\t\t\t\t</div>
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
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
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
