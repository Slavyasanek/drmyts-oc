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
class __TwigTemplate_a6770549882568bf000fd7910f6e08a3a608e38f0babc7ffa4b4082ffa77e5c3 extends \Twig\Template
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
        // line 131
        echo "
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
\t\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">Оцінка</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"review_rating\" id=\"review-rating\">
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
\t\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"review_content\" placeholder=\"Відгук\"></textarea>
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"review_name\" placeholder=\"Ваше ім’я\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
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
        // line 328
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"quote-block bg--surface product-page__consult\">
\t\t\t\t\t<div class=\"quote-block__heading text--upp flex-row-wrap j-between\">
\t\t\t\t\t\t<div class=\"product-page__icon-title quote-block__title flex-row\">
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#warning\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span>Послуга експрес-консультації
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"quote-block__price\">500 ₴</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quote-block__content d-flex\">
\t\t\t\t\t\t<svg class=\"quote-block__icon\" role=\"presentation\">
\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#quote\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</article>

\t<script type=\"text/javascript\">
\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
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

\t</script>

\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('#button-cart').on('click', function () {
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
//
\t\t-->
\t</script>
\t<script
\t\ttype=\"text/javascript\">


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
//
\t\t-->
\t</script>
\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=  ";
        // line 505
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=  ";
        // line 509
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
//
\t\t-->
\t</script>
\t";
        // line 549
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
        return array (  812 => 549,  769 => 509,  762 => 505,  583 => 328,  494 => 242,  490 => 241,  480 => 234,  469 => 230,  463 => 228,  457 => 226,  454 => 225,  450 => 224,  445 => 222,  438 => 217,  436 => 216,  425 => 208,  411 => 197,  397 => 186,  383 => 175,  369 => 164,  355 => 153,  347 => 148,  343 => 147,  332 => 139,  325 => 135,  321 => 134,  317 => 133,  313 => 131,  310 => 118,  304 => 117,  300 => 115,  287 => 112,  276 => 111,  272 => 110,  268 => 109,  265 => 108,  262 => 107,  258 => 106,  251 => 102,  247 => 101,  244 => 100,  238 => 97,  235 => 96,  229 => 93,  225 => 92,  222 => 91,  220 => 90,  213 => 86,  209 => 85,  204 => 82,  195 => 76,  187 => 70,  184 => 69,  172 => 65,  168 => 63,  163 => 62,  160 => 61,  151 => 57,  147 => 55,  145 => 54,  136 => 48,  126 => 40,  123 => 39,  111 => 35,  107 => 33,  102 => 32,  100 => 31,  97 => 30,  88 => 26,  84 => 24,  82 => 23,  75 => 18,  72 => 17,  67 => 13,  56 => 11,  52 => 10,  44 => 4,  42 => 3,  37 => 1,);
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
    \t\t\t\t</div>
    \t\t\t</div> #}

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
\t\t\t\t\t\t\t\t<form class=\"product-reviews__form bg--white review-form d-none\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"review-form__rating flex-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text--color_gray\">Оцінка</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-rating flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"review_rating\" id=\"review-rating\">
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
\t\t\t\t\t\t\t\t\t\t<textarea class=\"custom-input__input\" name=\"review_content\" placeholder=\"Відгук\"></textarea>
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review-form__fields d-grid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-input review-form__field\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"custom-input__input\" type=\"text\" name=\"review_name\" placeholder=\"Ваше ім’я\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
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
\t\t\t\t\t\t\t<svg role=\"presentation\">
\t\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#warning\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span>Послуга експрес-консультації
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"quote-block__price\">500 ₴</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quote-block__content d-flex\">
\t\t\t\t\t\t<svg class=\"quote-block__icon\" role=\"presentation\">
\t\t\t\t\t\t\t<use href=\"./assets/svg/sprite.svg#quote\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</article>

\t<script type=\"text/javascript\">
\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
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

\t</script>

\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('#button-cart').on('click', function () {
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
//
\t\t-->
\t</script>
\t<script
\t\ttype=\"text/javascript\">


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
//
\t\t-->
\t</script>
\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=  {{ product_id }}');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=  {{ product_id }}',
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
//
\t\t-->
\t</script>
\t{{ footer }}
", "drmyts/template/product/product.twig", "");
    }
}
