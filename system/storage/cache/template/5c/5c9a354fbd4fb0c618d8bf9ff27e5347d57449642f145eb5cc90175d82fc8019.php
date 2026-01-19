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
class __TwigTemplate_cafbbe9c7d4949c9b33ccaf1d623002546ada2de78f75f1d383e01d7b5dcae16 extends \Twig\Template
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
    <div class=\"container product-page__container\"> 
      <div class=\"breadcrumbs text--color_gray product-page__breadcrumbs\">

        <div class=\"breadcrumbs__list flex-row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                <a class=\"breadcrumbs__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>

      </div>
      ";
        // line 16
        echo "      ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 17
            echo "      <div class=\"product-page__gallery product-gallery\"> 
        <div class=\"splide product-gallery__main-gallery\"> 
          <div class=\"splide__track\"> 

            <ul class=\"splide__list\">
              ";
            // line 22
            if (($context["thumb"] ?? null)) {
                // line 23
                echo "              <li class=\"splide__slide product-gallery__slide bg--white\"> 
                <picture> 
                    <img class=\"contain-image\" src=\"";
                // line 25
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"294\" height=\"294\">
                </picture>
              </li>
              ";
            }
            // line 29
            echo "
              ";
            // line 30
            if (($context["images"] ?? null)) {
                // line 31
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 32
                    echo "                    <li class=\"splide__slide product-gallery__slide bg--white\"> 
                        <picture> 
                            <img class=\"contain-image\" src=\"";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 34);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" loading=\"lazy\" width=\"294\" height=\"294\">
                        </picture>
                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "              ";
            }
            // line 39
            echo "
            </ul>
          </div>
        </div>

        <div class=\"product-gallery__footing flex-row j-center\">
          <button class=\"btn splide__arrow slider__btn slider__btn--prev splide__arrow--prev flex-center product-gallery__arrow product-gallery__arrow--prev\">
            <div class=\"slider__arrow-icon icon\">
              ";
            // line 47
            echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "arrow-right", 1 => ""], "method", false, false, false, 47);
            echo "
            </div>
          </button>
          <div class=\"splide product-gallery__thumbs slider\"> 
            <div class=\"splide__track slider__track\"> 
              <ul class=\"splide__list slider__list\">
                ";
            // line 53
            if (($context["thumb"] ?? null)) {
                // line 54
                echo "                <li class=\"splide__slide product-gallery__thumb-slide bg--white\"> 
                  <picture> 
                    <img class=\"contain-image\" src=\"";
                // line 56
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" loading=\"lazy\" width=\"60\" height=\"60\">
                  </picture>
                </li>
                ";
            }
            // line 60
            echo "                ";
            if (($context["images"] ?? null)) {
                // line 61
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 62
                    echo "                        <li class=\"splide__slide product-gallery__thumb-slide bg--white\"> 
                          <picture> 
                            <img class=\"contain-image\" src=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 64);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" loading=\"lazy\" width=\"60\" height=\"60\">
                          </picture>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                ";
            }
            // line 69
            echo "
              </ul>
            </div>
          </div>
          <button class=\"btn splide__arrow splide__arrow--next slider__btn slider__btn--next flex-center product-gallery__arrow product-gallery__arrow--next\">
            <div class=\"slider__arrow-icon icon\">
              ";
            // line 75
            echo twig_get_attribute($this->env, $this->source, ($context["macros"] ?? null), "svg", [0 => "arrow-right", 1 => ""], "method", false, false, false, 75);
            echo "
            </div>
          </button>
        </div>
      </div>
      ";
        }
        // line 81
        echo "
      <div class=\"product-page__content\"> 
        <div class=\"product-page__heading\">
          <h1 class=\"product-page__title m-0\">MYSTIQ Intense C15 Booster</h1>
          <p class=\"product-page__descr text--color_gray\">Освітлюючий бустер з 15% вітаміну С для сяйва, пружності та рівного тону шкіри.</p>
        </div>
        <div class=\"product-page__row flex-row j-between\">\t
          <div class=\"product-price product-page__price flex-row product-price--sale\"> <span class=\"product-price__full\">500 ₴</span><span class=\"product-price__sale\">440 ₴</span></div>
          <div class=\"product-page__availability flex-row text--upp text--size_label product-page__icon-title\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#check\"></use>
            </svg><span> В наявності</span>
          </div>
        </div>
        <div class=\"product-page__variants product-variants flex-col\"> 
          <div class=\"product-variants__options flex-row-wrap\">
            <p class=\"product-variants__title\">Об&#39;єм</p>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"15 мл\" checked id=\"size_15ml\">
            <label class=\"product-variants__label\" for=\"size_15ml\">15 мл </label>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"60 мл\" checked id=\"size_60ml\">
            <label class=\"product-variants__label\" for=\"size_60ml\">60 мл  </label>
          </div>
          <div class=\"product-variants__options flex-row-wrap\">
            <p class=\"product-variants__title\">Тип фактору SPF</p>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"factor_type\" value=\"physics\" checked id=\"physics\">
            <label class=\"product-variants__label\" for=\"physics\">Фізичні фільтри</label>
          </div>
          <div class=\"product-variants__options flex-row-wrap product-variants__options--color\">
            <p class=\"product-variants__title\">Колір: <span class=\"product-variants__chosen\">Glow</span></p>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"dark_beige\" checked id=\"color_dark_beige\">
            <label class=\"product-variants__color-label\" for=\"color_dark_beige\" style=\"background: #D3AB88;\">Dark beige</label>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"light_beige\" checked id=\"color_light_beige\">
            <label class=\"product-variants__color-label\" for=\"color_light_beige\" style=\"background: #E9C6B7;\">Light Beige</label>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"warm_beige\" checked id=\"color_warm_beige\">
            <label class=\"product-variants__color-label\" for=\"color_warm_beige\" style=\"background: #DA9E75;\">Warm Beige</label>
          </div>
        </div>
        <div class=\"product-page__btns d-grid\"> 
          <button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">  
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#add-to-cart\"></use>
            </svg><span>Додати до кошика</span>
          </button>
          <button class=\"btn btn--theme btn--size_M btn--theme_dark text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#fast-buy\"></use>
            </svg><span>Швидка покупка</span>
          </button>
        </div>
        <div class=\"product-page__help-links flex-row-wrap j-between\"> 
          <button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#heart\"></use>
            </svg><span>Додати у вішліст</span>
          </button>
          <button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#need-help\"></use>
            </svg><span>Потрібна допомога?</span>
          </button>
        </div>
        <div class=\"product-page__faq-list flex-col\">
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Для кого цей засіб</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Як він працює</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Ключові компоненти</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Ключові компоненти</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Як застосовувати</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Як застосовувати</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Порада від Вероніки</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>“Я часто рекомендую цей бустер у протоколах освітлення шкіри, особливо після процедур або в сезон пігментації. Мʼякий, але дуже ефективний.”</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"true\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <div class=\"flex-row\">
                <p>2 відгуки</p>
                <div class=\"product-rating product-page__rating flex-row\"> 
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star--empty\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                  </svg>
                </div>
              </div>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\">
              <div class=\"product-reviews product-page__reviews\"> 
                <button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\"> 
                  <svg role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#leave-review\"></use>
                  </svg><span>Залишити відгук та оцінку</span>
                </button>
                <form class=\"product-reviews__form bg--white review-form d-none\" method=\"POST\"> 
                  <div class=\"review-form__rating flex-row\"> <span class=\"text--color_gray\">Оцінка</span>
                    <div class=\"form-rating flex-row\">
                      <input type=\"hidden\" name=\"review_rating\" id=\"review-rating\">
                      <div class=\"form-rating__star\" data-rating=\"1\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"2\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"3\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"4\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"5\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\"> 
                    <textarea class=\"custom-input__input\" name=\"review_content\" placeholder=\"Відгук\"></textarea><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
                  </div>
                  <div class=\"review-form__fields d-grid\">
                    <div class=\"custom-input review-form__field\"> 
                      <input class=\"custom-input__input\" type=\"text\" name=\"review_name\" placeholder=\"Ваше ім’я\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
                    </div>
                    <div class=\"custom-input review-form__field\"> 
                      <input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
                    </div>
                  </div>
                  <div class=\"review-form__photo photo-upload\"> 
                    <div class=\"photo-upload__wrapper rel\"> 
                      <input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
                      <button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
                        <svg role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#plus\"></use>
                        </svg><span> Додати фото</span>
                      </button>
                    </div>
                    <div class=\"photo-upload__disclaimer text--color_gray text--size_label\">Максимальний розмір файлу 10 Mb</div>
                    <div class=\"photo-upload__list flex-row-wrap\"></div>
                  </div>
                  <div class=\"review-form__footing flex-col\">
                    <button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\">Опублікувати відгук</button>
                    <button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">Закрити</button>
                  </div>
                </form>
                <div class=\"product-reviews__list flex-col\"> 
                  <div class=\"product-review product-reviews__item bg--white\">
                    <div class=\"product-review__heading flex-row-wrap j-between\"> 
                      <div class=\"product-review__author\"> 
                        <p class=\"product-review__name\">Вікторія</p>
                        <date class=\"product-review__date text--color_gray text--size_label\">4 квітня 2025</date>
                      </div>
                      <div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\"> 
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star--empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg><span class=\"product-rating__val\">4.0</span>
                      </div>
                    </div>
                    <div class=\"product-review__content\"> 
                      <p>Користуюсь вперше, ефект получила вже після першої процедури, шкіра гладенька, ефект ліфтингу, рівний тон. Дуже сподобалось</p>
                    </div>
                  </div>
                  <div class=\"product-review product-reviews__item bg--white\">
                    <div class=\"product-review__imgs flex-row-wrap\"> 
                      <div class=\"product-review__img o-hid\"> 
                        <picture> <img class=\"cover-image\" src=\"./assets/pics/product-review.png\" alt=\"\" loading=\"lazy\"></picture>
                      </div>
                    </div>
                    <div class=\"product-review__heading flex-row-wrap j-between\"> 
                      <div class=\"product-review__author\"> 
                        <p class=\"product-review__name\">Наталія</p>
                        <date class=\"product-review__date text--color_gray text--size_label\">1 лютого 2025</date>
                      </div>
                      <div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\"> 
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg><span class=\"product-rating__val\">5.0</span>
                      </div>
                    </div>
                    <div class=\"product-review__content\"> 
                      <p>Чудовий засіб! Задоволена на всі сто. Результат з першого разу - зволожена і підтягнута шкіра, звужені пори. Дякую 🤩</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"quote-block bg--surface product-page__consult\">
          <div class=\"quote-block__heading text--upp flex-row-wrap j-between\"> 
            <div class=\"product-page__icon-title quote-block__title flex-row\"> 
              <svg role=\"presentation\">
                <use href=\"./assets/svg/sprite.svg#warning\"></use>
              </svg><span>Послуга експрес-консультації </span>
            </div><span class=\"quote-block__price\">500 ₴</span>
          </div>
          <div class=\"quote-block__content d-flex\"> 
            <svg class=\"quote-block__icon\" role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#quote\"></use>
            </svg>
            <p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
          </div>
          <button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
        </div>
      </div>
    </div>
</article>



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
\$('.date').datetimepicker({
\tlanguage: '";
        // line 472
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 477
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 483
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

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
        // line 550
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 554
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
        // line 592
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
        return array (  728 => 592,  687 => 554,  680 => 550,  610 => 483,  601 => 477,  593 => 472,  200 => 81,  191 => 75,  183 => 69,  180 => 68,  168 => 64,  164 => 62,  159 => 61,  156 => 60,  147 => 56,  143 => 54,  141 => 53,  132 => 47,  122 => 39,  119 => 38,  107 => 34,  103 => 32,  98 => 31,  96 => 30,  93 => 29,  84 => 25,  80 => 23,  78 => 22,  71 => 17,  68 => 16,  63 => 12,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}


<article class=\"product-page\"> 
    <div class=\"container product-page__container\"> 
      <div class=\"breadcrumbs text--color_gray product-page__breadcrumbs\">

        <div class=\"breadcrumbs__list flex-row\">
            {% for breadcrumb in breadcrumbs %}
                <a class=\"breadcrumbs__item\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
            {% endfor %}
        </div>

      </div>
      {# breadcrumbs #}
      {% if thumb or images %}
      <div class=\"product-page__gallery product-gallery\"> 
        <div class=\"splide product-gallery__main-gallery\"> 
          <div class=\"splide__track\"> 

            <ul class=\"splide__list\">
              {% if thumb %}
              <li class=\"splide__slide product-gallery__slide bg--white\"> 
                <picture> 
                    <img class=\"contain-image\" src=\"{{ thumb}}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"294\" height=\"294\">
                </picture>
              </li>
              {% endif %}

              {% if images %}
                {% for image in images %}
                    <li class=\"splide__slide product-gallery__slide bg--white\"> 
                        <picture> 
                            <img class=\"contain-image\" src=\"{{ image.thumb }}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"294\" height=\"294\">
                        </picture>
                  </li>
                {% endfor %}
              {% endif %}

            </ul>
          </div>
        </div>

        <div class=\"product-gallery__footing flex-row j-center\">
          <button class=\"btn splide__arrow slider__btn slider__btn--prev splide__arrow--prev flex-center product-gallery__arrow product-gallery__arrow--prev\">
            <div class=\"slider__arrow-icon icon\">
              {{ macros.svg('arrow-right', '') }}
            </div>
          </button>
          <div class=\"splide product-gallery__thumbs slider\"> 
            <div class=\"splide__track slider__track\"> 
              <ul class=\"splide__list slider__list\">
                {% if thumb %}
                <li class=\"splide__slide product-gallery__thumb-slide bg--white\"> 
                  <picture> 
                    <img class=\"contain-image\" src=\"{{ thumb }}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"60\" height=\"60\">
                  </picture>
                </li>
                {% endif %}
                {% if images %}
                    {% for image in images %}
                        <li class=\"splide__slide product-gallery__thumb-slide bg--white\"> 
                          <picture> 
                            <img class=\"contain-image\" src=\"{{ image.thumb }}\" alt=\"{{ heading_title }}\" loading=\"lazy\" width=\"60\" height=\"60\">
                          </picture>
                        </li>
                    {% endfor %}
                {% endif %}

              </ul>
            </div>
          </div>
          <button class=\"btn splide__arrow splide__arrow--next slider__btn slider__btn--next flex-center product-gallery__arrow product-gallery__arrow--next\">
            <div class=\"slider__arrow-icon icon\">
              {{ macros.svg('arrow-right', '') }}
            </div>
          </button>
        </div>
      </div>
      {% endif %}

      <div class=\"product-page__content\"> 
        <div class=\"product-page__heading\">
          <h1 class=\"product-page__title m-0\">MYSTIQ Intense C15 Booster</h1>
          <p class=\"product-page__descr text--color_gray\">Освітлюючий бустер з 15% вітаміну С для сяйва, пружності та рівного тону шкіри.</p>
        </div>
        <div class=\"product-page__row flex-row j-between\">\t
          <div class=\"product-price product-page__price flex-row product-price--sale\"> <span class=\"product-price__full\">500 ₴</span><span class=\"product-price__sale\">440 ₴</span></div>
          <div class=\"product-page__availability flex-row text--upp text--size_label product-page__icon-title\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#check\"></use>
            </svg><span> В наявності</span>
          </div>
        </div>
        <div class=\"product-page__variants product-variants flex-col\"> 
          <div class=\"product-variants__options flex-row-wrap\">
            <p class=\"product-variants__title\">Об&#39;єм</p>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"15 мл\" checked id=\"size_15ml\">
            <label class=\"product-variants__label\" for=\"size_15ml\">15 мл </label>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"size\" value=\"60 мл\" checked id=\"size_60ml\">
            <label class=\"product-variants__label\" for=\"size_60ml\">60 мл  </label>
          </div>
          <div class=\"product-variants__options flex-row-wrap\">
            <p class=\"product-variants__title\">Тип фактору SPF</p>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"factor_type\" value=\"physics\" checked id=\"physics\">
            <label class=\"product-variants__label\" for=\"physics\">Фізичні фільтри</label>
          </div>
          <div class=\"product-variants__options flex-row-wrap product-variants__options--color\">
            <p class=\"product-variants__title\">Колір: <span class=\"product-variants__chosen\">Glow</span></p>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"dark_beige\" checked id=\"color_dark_beige\">
            <label class=\"product-variants__color-label\" for=\"color_dark_beige\" style=\"background: #D3AB88;\">Dark beige</label>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"light_beige\" checked id=\"color_light_beige\">
            <label class=\"product-variants__color-label\" for=\"color_light_beige\" style=\"background: #E9C6B7;\">Light Beige</label>
            <input class=\"product-vairants__option anim\" type=\"radio\" name=\"color\" value=\"warm_beige\" checked id=\"color_warm_beige\">
            <label class=\"product-variants__color-label\" for=\"color_warm_beige\" style=\"background: #DA9E75;\">Warm Beige</label>
          </div>
        </div>
        <div class=\"product-page__btns d-grid\"> 
          <button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\">  
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#add-to-cart\"></use>
            </svg><span>Додати до кошика</span>
          </button>
          <button class=\"btn btn--theme btn--size_M btn--theme_dark text--upp flex-row product-page__icon-title product-page__btn j-center\" type=\"button\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#fast-buy\"></use>
            </svg><span>Швидка покупка</span>
          </button>
        </div>
        <div class=\"product-page__help-links flex-row-wrap j-between\"> 
          <button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#heart\"></use>
            </svg><span>Додати у вішліст</span>
          </button>
          <button class=\"btn flex-row product-page__icon-title text--upp text--size_label\" type=\"button\">
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#need-help\"></use>
            </svg><span>Потрібна допомога?</span>
          </button>
        </div>
        <div class=\"product-page__faq-list flex-col\">
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Для кого цей засіб</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Як він працює</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Бустер на основі 15% жиророзчинного вітаміну С (THD) діє глибше та мʼякше, ніж звичні форми аскорбінової кислоти. Вирівнює тон. Стимулює синтез колагену. Захищає від синього світла та стресу шкіри.</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Ключові компоненти</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Ключові компоненти</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Як застосовувати</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>Як застосовувати</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"false\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <p>Порада від Вероніки</p>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\"><p>“Я часто рекомендую цей бустер у протоколах освітлення шкіри, особливо після процедур або в сезон пігментації. Мʼякий, але дуже ефективний.”</p></div>
          </div>
          <div class=\"accordion product-page__faq\" aria-expanded=\"true\">
            <div class=\"accordion__heading flex-row j-between\" aria-label=\"Open accordion\" role=\"button\">
              <div class=\"flex-row\">
                <p>2 відгуки</p>
                <div class=\"product-rating product-page__rating flex-row\"> 
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                  </svg>
                  <svg class=\"product-rating__star--empty\" role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                  </svg>
                </div>
              </div>
              <div class=\"icon icon--arrow accordion__icon\"> 
                <svg role=\"presentation\">
                  <use href=\"./assets/svg/sprite.svg#arrow-down\"></use>
                </svg>
              </div>
            </div>
            <div class=\"accordion__content\">
              <div class=\"product-reviews product-page__reviews\"> 
                <button class=\"btn btn--theme btn--size_M btn--theme_accent text--upp flex-row product-page__icon-title product-reviews__btn j-center\" type=\"button\"> 
                  <svg role=\"presentation\">
                    <use href=\"./assets/svg/sprite.svg#leave-review\"></use>
                  </svg><span>Залишити відгук та оцінку</span>
                </button>
                <form class=\"product-reviews__form bg--white review-form d-none\" method=\"POST\"> 
                  <div class=\"review-form__rating flex-row\"> <span class=\"text--color_gray\">Оцінка</span>
                    <div class=\"form-rating flex-row\">
                      <input type=\"hidden\" name=\"review_rating\" id=\"review-rating\">
                      <div class=\"form-rating__star\" data-rating=\"1\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"2\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"3\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"4\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                      <div class=\"form-rating__star\" data-rating=\"5\">
                        <svg class=\"form-rating__star-empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg>
                        <svg class=\"form-rating__star-full d-none\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class=\"review-form__textarea review-form__field custom-input custom-input--type_textarea\"> 
                    <textarea class=\"custom-input__input\" name=\"review_content\" placeholder=\"Відгук\"></textarea><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
                  </div>
                  <div class=\"review-form__fields d-grid\">
                    <div class=\"custom-input review-form__field\"> 
                      <input class=\"custom-input__input\" type=\"text\" name=\"review_name\" placeholder=\"Ваше ім’я\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
                    </div>
                    <div class=\"custom-input review-form__field\"> 
                      <input class=\"custom-input__input\" type=\"email\" name=\"review_name\" placeholder=\"E-mail\" required><span class=\"custom-input__error d-none\">Поле обов'язкове до заповнення</span>
                    </div>
                  </div>
                  <div class=\"review-form__photo photo-upload\"> 
                    <div class=\"photo-upload__wrapper rel\"> 
                      <input class=\"hidden d-none\" type=\"file\" name=\"review_photos[]\" accept=\"image/*\" multiple>
                      <button class=\"btn btn--theme btn--theme_dark text--upp btn--size_M flex-row photo-upload__btn\" type=\"button\">
                        <svg role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#plus\"></use>
                        </svg><span> Додати фото</span>
                      </button>
                    </div>
                    <div class=\"photo-upload__disclaimer text--color_gray text--size_label\">Максимальний розмір файлу 10 Mb</div>
                    <div class=\"photo-upload__list flex-row-wrap\"></div>
                  </div>
                  <div class=\"review-form__footing flex-col\">
                    <button class=\"btn btn--theme btn--theme_accent btn--size_M text--upp w-full review-form__btn\" type=\"submit\">Опублікувати відгук</button>
                    <button class=\"btn text--upp btn--size_M review-form__close\" type=\"button\">Закрити</button>
                  </div>
                </form>
                <div class=\"product-reviews__list flex-col\"> 
                  <div class=\"product-review product-reviews__item bg--white\">
                    <div class=\"product-review__heading flex-row-wrap j-between\"> 
                      <div class=\"product-review__author\"> 
                        <p class=\"product-review__name\">Вікторія</p>
                        <date class=\"product-review__date text--color_gray text--size_label\">4 квітня 2025</date>
                      </div>
                      <div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\"> 
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star--empty\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#empty-star\"></use>
                        </svg><span class=\"product-rating__val\">4.0</span>
                      </div>
                    </div>
                    <div class=\"product-review__content\"> 
                      <p>Користуюсь вперше, ефект получила вже після першої процедури, шкіра гладенька, ефект ліфтингу, рівний тон. Дуже сподобалось</p>
                    </div>
                  </div>
                  <div class=\"product-review product-reviews__item bg--white\">
                    <div class=\"product-review__imgs flex-row-wrap\"> 
                      <div class=\"product-review__img o-hid\"> 
                        <picture> <img class=\"cover-image\" src=\"./assets/pics/product-review.png\" alt=\"\" loading=\"lazy\"></picture>
                      </div>
                    </div>
                    <div class=\"product-review__heading flex-row-wrap j-between\"> 
                      <div class=\"product-review__author\"> 
                        <p class=\"product-review__name\">Наталія</p>
                        <date class=\"product-review__date text--color_gray text--size_label\">1 лютого 2025</date>
                      </div>
                      <div class=\"product-review__rating product-rating text--color_gray flex-row text--size_label\"> 
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg>
                        <svg class=\"product-rating__star\" role=\"presentation\">
                          <use href=\"./assets/svg/sprite.svg#full-star\"></use>
                        </svg><span class=\"product-rating__val\">5.0</span>
                      </div>
                    </div>
                    <div class=\"product-review__content\"> 
                      <p>Чудовий засіб! Задоволена на всі сто. Результат з першого разу - зволожена і підтягнута шкіра, звужені пори. Дякую 🤩</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"quote-block bg--surface product-page__consult\">
          <div class=\"quote-block__heading text--upp flex-row-wrap j-between\"> 
            <div class=\"product-page__icon-title quote-block__title flex-row\"> 
              <svg role=\"presentation\">
                <use href=\"./assets/svg/sprite.svg#warning\"></use>
              </svg><span>Послуга експрес-консультації </span>
            </div><span class=\"quote-block__price\">500 ₴</span>
          </div>
          <div class=\"quote-block__content d-flex\"> 
            <svg class=\"quote-block__icon\" role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#quote\"></use>
            </svg>
            <p>Підберу повний план з урахуванням стану шкіри, твого бюджету, наявних засобів і побажань..</p>
          </div>
          <button class=\"btn btn--theme_accent text--upp btn--size_M btn--theme d-block quote-block__btn\" type=\"button\" data-modal-open=\"consult\">Детальніше</button>
        </div>
      </div>
    </div>
</article>



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
